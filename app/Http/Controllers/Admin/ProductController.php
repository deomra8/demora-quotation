<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function __construct(private readonly ProductService $products) {}

    public function index(Request $request): View
    {
        return view('admin.pages.products.index', [
            'products' => $this->products->paginate($request->only('search', 'category', 'status')),
            'categories' => $this->products->categories(),
        ]);
    }

    public function create(): View
    {
        return view('admin.pages.products.create');
    }

    public function store(StoreProductRequest $request): RedirectResponse
    {
        $product = $this->products->create($request->validated());

        return redirect()->route('admin.products.show', $product)->with('success', 'Product created successfully.');
    }

    public function show(Product $product): View
    {
        $product->load('images');

        return view('admin.pages.products.edit', compact('product'));
    }

    public function edit(Product $product): View
    {
        $product->load('images');

        return view('admin.pages.products.show', compact('product'));
    }

    public function update(UpdateProductRequest $request, Product $product): RedirectResponse
    {
        $this->products->update($product, $request->validated());

        return redirect()->route('admin.products.show', $product)->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product): RedirectResponse
    {
        $this->products->delete($product);

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
