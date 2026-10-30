<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class CategoryService
{
    /**
     * Get all categories.
     */
    public function getAll(int $perPage = 10): LengthAwarePaginator
    {
        return Category::withCount('products')
            ->latest()
            ->paginate($perPage);
    }

    /**
     * Get a single category.
     */
    public function find(int $id): Category
    {
        return Category::with('products')->findOrFail($id);
    }

    /**
     * Create a new category.
     */
    public function create(array $data): Category
    {
        return DB::transaction(function () use ($data) {

            $image = $data['image'];

            unset($data['image']);

            $data['slug'] = $this->generateUniqueSlug($data['name']);

            $data['image'] = $image->store('categories', 'public');

            return Category::create($data);
        });
    }

    /**
     * Update an existing category.
     */
    public function update(Category $category, array $data): Category
    {
        return DB::transaction(function () use ($category, $data) {

            if (
                isset($data['name']) &&
                $data['name'] !== $category->name
            ) {
                $data['slug'] = $this->generateUniqueSlug(
                    $data['name'],
                    $category->id
                );
            }

            if (isset($data['image'])) {

                $newImage = $data['image']->store('categories', 'public');

                if ($category->image) {
                    Storage::disk('public')->delete($category->image);
                }

                $data['image'] = $newImage;
            }

            $category->update($data);

            return $category->fresh();
        });
    }

    /**
     * Delete a category.
     */
    public function delete(Category $category): void
    {
        if ($category->products()->exists()) {
            throw ValidationException::withMessages([
                'category' => 'Cannot delete this category because it has products.',
            ]);
        }

        DB::transaction(function () use ($category) {

            if ($category->image) {
                Storage::disk('public')->delete($category->image);
            }

            $category->delete();
        });
    }

    /**
     * Generate a unique slug.
     */
    private function generateUniqueSlug(
        string $name,
        ?int $ignoreId = null
    ): string {

        $slug = Str::slug($name);

        // Fallback for names that cannot be transliterated.
        if (empty($slug)) {
            $slug = 'category-' . Str::random(8);
        }

        $originalSlug = $slug;
        $counter = 1;

        while (
            Category::where('slug', $slug)
            ->when($ignoreId, fn($query) => $query->where('id', '!=', $ignoreId))
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter;
            $counter++;
        }

        return $slug;
    }
}
