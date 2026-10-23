<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Throwable;

class ProductService
{
    public function paginate(array $filters = []): LengthAwarePaginator
    {
        return Product::query()
            ->when($filters['search'] ?? null, function ($query, string $search) {
                $query->where(function ($query) use ($search) {
                    $query->where('name', 'like', "%{$search}%")
                        ->orWhere('sku', 'like', "%{$search}%")
                        ->orWhere('category', 'like', "%{$search}%");
                });
            })
            ->when($filters['category'] ?? null, fn ($query, string $category) => $query->where('category', $category))
            ->when($filters['status'] ?? null, function ($query, string $status) {
                match ($status) {
                    'in_stock' => $query->where('stock_quantity', '>', 5),
                    'low_stock' => $query->whereBetween('stock_quantity', [1, 5]),
                    'out_of_stock' => $query->where('stock_quantity', 0),
                    default => null,
                };
            })
            ->orderBy('name')
            ->paginate(15)
            ->withQueryString();
    }

    public function categories(): array
    {
        return Product::query()
            ->whereNotNull('category')
            ->where('category', '!=', '')
            ->distinct()
            ->orderBy('category')
            ->pluck('category')
            ->all();
    }

    public function create(array $data): Product
    {
        $image = $this->usableUpload($data['image'] ?? null) ? $data['image'] : null;
        $images = array_values(array_filter($data['images'] ?? [], fn ($file) => $this->usableUpload($file)));
        unset($data['image']);
        unset($data['images']);

        $data['tags'] = $this->normalizeTags($data['tags'] ?? null);

        if ($image) {
            $data['image_path'] = $image->store('products', 'public');
        }

        $storedPaths = array_filter([$data['image_path'] ?? null]);

        try {
            return DB::transaction(function () use ($data, $images, &$storedPaths) {
                $product = Product::create($data);

                foreach ($images as $index => $uploadedImage) {
                    $path = $uploadedImage->store('products/gallery', 'public');
                    $storedPaths[] = $path;
                    $product->images()->create([
                        'path' => $path,
                        'is_primary' => $index === 0 && empty($product->image_path),
                        'sort_order' => $index,
                    ]);
                }

                if (empty($product->image_path) && $product->images->isNotEmpty()) {
                    $primaryImage = $product->images->first();
                    $primaryImage->update(['is_primary' => true]);
                    $product->update(['image_path' => $primaryImage->path]);
                } elseif ($product->image_path) {
                    $product->images()->create([
                        'path' => $product->image_path,
                        'is_primary' => true,
                        'sort_order' => 0,
                    ]);
                }

                return $product;
            });
        } catch (Throwable $exception) {
            Storage::disk('public')->delete($storedPaths);

            throw $exception;
        }
    }

    public function update(Product $product, array $data): Product
    {
        $image = $this->usableUpload($data['image'] ?? null) ? $data['image'] : null;
        $images = array_values(array_filter($data['images'] ?? [], fn ($file) => $this->usableUpload($file)));
        $removeImageIds = $data['remove_images'] ?? [];
        $removeImage = (bool) ($data['remove_image'] ?? false);
        unset($data['image'], $data['images'], $data['remove_image'], $data['remove_images']);

        $data['tags'] = $this->normalizeTags($data['tags'] ?? null);

        $oldImagePath = $product->image_path;
        $newImagePath = null;
        $storedPaths = [];
        $removedPaths = [];
        $coverWasRemoved = false;

        if ($image) {
            $newImagePath = $image->store('products', 'public');
            $storedPaths[] = $newImagePath;
            $data['image_path'] = $newImagePath;
        } elseif ($removeImage) {
            $data['image_path'] = null;
        }

        try {
            DB::transaction(function () use ($product, $data, $images, $removeImageIds, $removeImage, $oldImagePath, $newImagePath, &$storedPaths, &$removedPaths, &$coverWasRemoved) {
                $product->update($data);

                if ($removeImageIds) {
                    $galleryImages = $product->images()->whereIn('id', $removeImageIds)->get();
                    foreach ($galleryImages as $galleryImage) {
                        $removedPaths[] = $galleryImage->path;
                        $coverWasRemoved = $coverWasRemoved || $galleryImage->path === $oldImagePath;
                        $galleryImage->delete();
                    }
                }

                if ($images) {
                    $nextOrder = (int) $product->images()->max('sort_order') + 1;
                    foreach ($images as $index => $uploadedImage) {
                        $path = $uploadedImage->store('products/gallery', 'public');
                        $storedPaths[] = $path;
                        $product->images()->create([
                            'path' => $path,
                            'is_primary' => false,
                            'sort_order' => $nextOrder + $index,
                        ]);
                    }
                }

                if ($removeImage || $newImagePath) {
                    if ($oldImagePath) {
                        $product->images()->where('path', $oldImagePath)->delete();
                        $removedPaths[] = $oldImagePath;
                    }
                }

                if (($removeImage || $coverWasRemoved) && ! $newImagePath) {
                    $nextPrimary = $product->images()->first();
                    if ($nextPrimary) {
                        $nextPrimary->update(['is_primary' => true]);
                    }
                    $product->update(['image_path' => $nextPrimary?->path]);
                }
            });
        } catch (Throwable $exception) {
            Storage::disk('public')->delete($storedPaths);

            throw $exception;
        }

        if ($newImagePath || $removeImage) {
            if ($newImagePath) {
                $product->images()->create([
                    'path' => $newImagePath,
                    'is_primary' => true,
                    'sort_order' => 0,
                ]);
            }
        }

        Storage::disk('public')->delete(array_unique(array_filter($removedPaths)));
        foreach ($storedPaths as $path) {
            if ($path !== $newImagePath && ! $product->images()->where('path', $path)->exists()) {
                Storage::disk('public')->delete($path);
            }
        }

        return $product;
    }

    public function delete(Product $product): void
    {
        $imagePaths = $product->images()->pluck('path')->all();
        if ($product->image_path) {
            $imagePaths[] = $product->image_path;
        }
        $product->delete();

        Storage::disk('public')->delete(array_unique($imagePaths));
    }

    private function normalizeTags(?string $tags): array
    {
        if ($tags === null || trim($tags) === '') {
            return [];
        }

        return array_values(array_unique(array_filter(array_map('trim', explode(',', $tags)))));
    }

    private function usableUpload(mixed $file): bool
    {
        return $file instanceof UploadedFile
            && $file->isValid()
            && is_string($file->getRealPath())
            && $file->getRealPath() !== '';
    }
}
