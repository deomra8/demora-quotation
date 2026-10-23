<?php

namespace Tests\Feature;

use App\Models\Product;
use App\Models\User;
use App\Services\ProductService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProductManagementTest extends TestCase
{
    use RefreshDatabase;

    public function test_empty_image_upload_is_ignored_without_an_empty_storage_path(): void
    {
        Storage::fake('public');

        $product = app(ProductService::class)->create([
            'name' => 'Sample Product',
            'sku' => 'SAMPLE-001',
            'price' => '100.00',
            'currency' => 'EGP',
            'tax_rate' => '14.00',
            'stock_quantity' => 1,
            'is_active' => true,
            'image' => new UploadedFile('/missing/upload.tmp', 'empty.jpg', 'image/jpeg', UPLOAD_ERR_NO_FILE, true),
        ]);

        $this->assertDatabaseHas('products', ['id' => $product->id, 'image_path' => null]);
        $this->assertSame(0, $product->images()->count());
    }

    public function test_product_creation_persists_catalog_fields_and_gallery_images(): void
    {
        $this->actingAs(User::factory()->create());
        Storage::fake('public');

        $response = $this->post(route('admin.products.store'), [
            'name' => 'Nile Desk',
            'sku' => 'ND-100',
            'upc' => '987654321012',
            'brand' => 'Nile Design',
            'supplier' => 'Nile Supply',
            'category' => 'Desks',
            'lead_time' => 'One week',
            'description' => 'Adjustable office desk',
            'price' => '1200.00',
            'currency' => 'EGP',
            'cost' => '700.00',
            'tax_rate' => '14.00',
            'stock_quantity' => 12,
            'width' => '60.00',
            'height' => '30.00',
            'depth' => '30.00',
            'material' => 'Oak and steel',
            'finish' => 'Natural oak',
            'internal_notes' => 'Keep boxed until delivery',
            'tags' => 'workspace, adjustable',
            'image' => UploadedFile::fake()->image('cover.jpg'),
            'images' => [UploadedFile::fake()->image('side.jpg')],
            'is_active' => 1,
        ]);

        $product = Product::where('sku', 'ND-100')->firstOrFail();
        $response->assertRedirect(route('admin.products.show', $product));

        $this->assertSame(['workspace', 'adjustable'], $product->tags);
        $this->assertCount(2, $product->images);
        $this->assertTrue(Storage::disk('public')->exists($product->image_path));
        $this->assertTrue(Storage::disk('public')->exists($product->images->last()->path));

        $this->get(route('admin.products.index', ['search' => 'ND-100']))
            ->assertOk()
            ->assertSee('Nile Desk');
        $this->get(route('admin.products.show', $product))
            ->assertOk()
            ->assertSee('Nile Design')
            ->assertSee('Natural oak');
    }

    public function test_authenticated_user_can_manage_products(): void
    {
        $this->actingAs(User::factory()->create());
        Storage::fake('public');

        $product = Product::create([
            'name' => 'Aeron Chair',
            'sku' => 'CH-882',
            'category' => 'Seating',
            'description' => 'Ergonomic office chair',
            'price' => 850,
            'stock_quantity' => 8,
            'is_active' => true,
        ]);

        $this->get(route('admin.products.index', ['search' => 'CH-882', 'category' => 'Seating']))
            ->assertOk()
            ->assertSee('Aeron Chair')
            ->assertSee('CH-882');

        $this->get(route('admin.products.create'))
            ->assertOk()
            ->assertSee('Add New Product')
            ->assertSee('UPC / Barcode')
            ->assertSee('Internal Cost (EGP)')
            ->assertSee('product-primary-image')
            ->assertSee('product-gallery-images');
        $this->get(route('admin.products.edit', $product))
            ->assertOk()
            ->assertSee('product-primary-image')
            ->assertSee('product-gallery-images');
        $this->get(route('admin.products.show', $product))->assertOk()->assertSee('Ergonomic office chair');

        $this->put(route('admin.products.update', $product), [
            'name' => 'Aeron Chair Plus',
            'sku' => 'CH-882',
            'upc' => '123456789012',
            'category' => 'Seating',
            'supplier' => 'Office Supply Co.',
            'lead_time' => '2-3 business days',
            'description' => 'Updated description',
            'price' => '925.50',
            'currency' => 'EGP',
            'cost' => '420.00',
            'tax_rate' => '20.00',
            'stock_quantity' => 4,
            'width' => '27.00',
            'height' => '45.00',
            'depth' => '16.50',
            'material' => 'Mesh and aluminum',
            'finish' => 'Mineral',
            'internal_notes' => 'Handle with care',
            'image' => UploadedFile::fake()->image('product.jpg'),
            'is_active' => 1,
        ])->assertRedirect(route('admin.products.show', $product));

        $product->refresh();
        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'name' => 'Aeron Chair Plus',
            'price' => 925.50,
            'stock_quantity' => 4,
            'upc' => '123456789012',
            'supplier' => 'Office Supply Co.',
            'material' => 'Mesh and aluminum',
        ]);
        $this->assertTrue(Storage::disk('public')->exists($product->image_path));

        $this->get(route('admin.products.show', $product))
            ->assertOk()
            ->assertSee('Gross Margin')
            ->assertSee('Handle with care')
            ->assertSee('2-3 business days');

        $this->delete(route('admin.products.destroy', $product))
            ->assertRedirect(route('admin.products.index'));

        $this->assertDatabaseMissing('products', ['id' => $product->id]);
        $this->assertFalse(Storage::disk('public')->exists($product->image_path));
    }
}
