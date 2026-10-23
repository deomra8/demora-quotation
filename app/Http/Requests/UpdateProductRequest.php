<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $product = $this->route('product');

        return [
            'name' => ['required', 'string', 'max:255'],
            'sku' => ['required', 'string', 'max:100', Rule::unique('products', 'sku')->ignore($product)],
            'upc' => ['nullable', 'string', 'max:50', Rule::unique('products', 'upc')->ignore($product)],
            'category' => ['nullable', 'string', 'max:100'],
            'supplier' => ['nullable', 'string', 'max:255'],
            'brand' => ['nullable', 'string', 'max:255'],
            'lead_time' => ['nullable', 'string', 'max:100'],
            'description' => ['nullable', 'string', 'max:5000'],
            'price' => ['required', 'numeric', 'min:0', 'decimal:0,2'],
            'currency' => ['required', 'string', 'in:EGP,USD'],
            'cost' => ['nullable', 'numeric', 'min:0', 'decimal:0,2'],
            'tax_rate' => ['required', 'numeric', 'min:0', 'max:100', 'decimal:0,2'],
            'stock_quantity' => ['required', 'integer', 'min:0'],
            'width' => ['nullable', 'numeric', 'min:0', 'decimal:0,2'],
            'height' => ['nullable', 'numeric', 'min:0', 'decimal:0,2'],
            'depth' => ['nullable', 'numeric', 'min:0', 'decimal:0,2'],
            'material' => ['nullable', 'string', 'max:255'],
            'finish' => ['nullable', 'string', 'max:255'],
            'internal_notes' => ['nullable', 'string', 'max:5000'],
            'image' => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'images' => ['nullable', 'array', 'max:8'],
            'images.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:5120'],
            'remove_images' => ['sometimes', 'array'],
            'remove_images.*' => ['integer', 'exists:product_images,id'],
            'tags' => ['nullable', 'string', 'max:1000'],
            'remove_image' => ['sometimes', 'boolean'],
            'is_active' => ['required', 'boolean'],
        ];
    }
}
