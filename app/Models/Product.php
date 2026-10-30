<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'sku',
        'upc',
        'category',
        'supplier',
        'brand',
        'lead_time',
        'description',
        'price',
        'currency',
        'cost',
        'tax_rate',
        'stock_quantity',
        'width',
        'height',
        'depth',
        'material',
        'finish',
        'internal_notes',
        'tags',
        'image_path',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'price' => 'decimal:2',
            'cost' => 'decimal:2',
            'tax_rate' => 'decimal:2',
            'stock_quantity' => 'integer',
            'width' => 'decimal:2',
            'height' => 'decimal:2',
            'depth' => 'decimal:2',
            'is_active' => 'boolean',
            'tags' => 'array',
        ];
    }

    public function images(): HasMany
    {
        return $this->hasMany(ProductImage::class)->orderBy('sort_order');
    }
    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
