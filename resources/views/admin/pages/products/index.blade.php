@extends('admin.layouts.app')

@section('title', 'Product Catalog')

@section('content')
    <div class="p-6 md:p-10 max-w-[1440px] mx-auto w-full flex flex-col gap-8 flex-grow">
        <!-- Page Header & Filters -->
        <div
            class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-stack-lg border-b border-outline-variant pb-6">
            <div>
                <h2
                    class="font-headline-lg text-headline-lg md:font-display-lg md:text-display-lg text-on-surface mb-2 tracking-tight">
                    Products</h2>
                <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl">Browse our catalog of premium
                    corporate office furniture. Filter by category, availability, or search by SKU.</p>
            </div>
            <form method="GET" action="{{ route('admin.products.index') }}" class="flex flex-wrap items-center gap-3">
                <label class="sr-only" for="product-search">Search products</label>
                <input id="product-search" name="search" value="{{ request('search') }}" type="search"
                    placeholder="Search name or SKU"
                    class="bg-surface-container-lowest border border-outline-variant rounded-DEFAULT px-4 py-2 font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary">
                <label class="sr-only" for="product-category">Category</label>
                <select id="product-category" name="category"
                    class="appearance-none bg-surface-container-lowest border border-outline-variant rounded-DEFAULT px-4 py-2 font-label-md text-label-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary">
                    <option value="">All Categories</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category }}" @selected(request('category') === $category)>{{ $category }}</option>
                    @endforeach
                </select>
                <label class="sr-only" for="product-status">Stock status</label>
                <select id="product-status" name="status"
                    class="appearance-none bg-surface-container-lowest border border-outline-variant rounded-DEFAULT px-4 py-2 font-label-md text-label-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary">
                    <option value="">All stock levels</option>
                    <option value="in_stock" @selected(request('status') === 'in_stock')>In Stock</option>
                    <option value="low_stock" @selected(request('status') === 'low_stock')>Low Stock</option>
                    <option value="out_of_stock" @selected(request('status') === 'out_of_stock')>Out of Stock</option>
                </select>
                <button
                    class="rounded-DEFAULT bg-primary-container px-4 py-2 text-sm font-semibold text-on-primary">Filter</button>
                @if (request()->filled('search') || request()->filled('category') || request()->filled('status'))
                    <a href="{{ route('admin.products.index') }}"
                        class="text-sm text-on-surface-variant hover:text-primary">Clear</a>
                @endif
                <a href="{{ route('admin.products.create') }}" class="inline-flex items-center gap-2 rounded-DEFAULT bg-primary-container px-4 py-2 text-sm font-semibold text-on-primary"><span class="material-symbols-outlined text-base">add</span>Add Product</a>
            </form>
        </div>
        <!-- Product Grid (Bento/Card Style) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-gutter">
            @forelse ($products as $product)
                <article
                    class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-primary/50 transition-all duration-300">
                    <a href="{{ route('admin.products.show', $product) }}"
                        class="relative aspect-[4/3] bg-surface-container-low overflow-hidden">
                        @if ($product->image_path)
                            <img alt="{{ $product->name }}" src="{{ asset('storage/' . $product->image_path) }}"
                                class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500" />
                        @else
                            <div class="w-full h-full flex items-center justify-center text-outline-variant"><span
                                    class="material-symbols-outlined text-6xl">chair</span></div>
                        @endif
                        <span
                            class="absolute top-3 left-3 inline-flex items-center px-2 py-1 rounded-full bg-surface/90 border border-outline-variant text-[10px] font-semibold uppercase tracking-wider {{ !$product->is_active ? 'text-outline' : ($product->stock_quantity === 0 ? 'text-error' : ($product->stock_quantity <= 5 ? 'text-secondary' : 'text-primary')) }}">
                            @if (!$product->is_active)
                                Inactive
                            @elseif ($product->stock_quantity === 0)
                                Out of Stock
                            @elseif ($product->stock_quantity <= 5)
                                Low Stock ({{ $product->stock_quantity }})
                            @else
                                In Stock
                            @endif
                        </span>
                    </a>
                    <div class="p-stack-md flex flex-col flex-1">
                        <div class="flex justify-between items-start mb-1 gap-2">
                            <h3 class="font-title-lg text-title-lg text-on-surface truncate">{{ $product->name }}</h3>
                            <p class="font-title-lg text-title-lg text-primary shrink-0">
                                {{ $product->currency }} {{ number_format((float) $product->price, 2) }}</p>
                        </div>
                        <p class="font-label-md text-label-md text-outline mb-2">SKU: {{ $product->sku }}</p>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-4">
                            {{ $product->category ?: 'Uncategorized' }} · {{ number_format($product->stock_quantity) }}
                            available</p>
                        <div class="mt-auto flex items-center gap-2 pt-2 border-t border-outline-variant/30">
                            <a href="{{ route('admin.products.show', $product) }}"
                                class="flex-1 bg-surface-container-low hover:bg-primary hover:text-on-primary text-primary border border-primary/20 font-label-md text-label-md py-2 rounded-DEFAULT transition-colors flex justify-center items-center gap-2"><span
                                    class="material-symbols-outlined text-[16px]">visibility</span>View Product</a>
                            <a href="{{ route('admin.products.edit', $product) }}"
                                class="p-2 text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-DEFAULT border border-transparent hover:border-outline-variant transition-all"
                                title="Edit product"><span class="material-symbols-outlined">edit</span></a>
                        </div>
                    </div>
                </article>
            @empty
                <div
                    class="col-span-full border border-dashed border-outline-variant bg-surface-container-lowest p-10 text-center">
                    <span class="material-symbols-outlined text-5xl text-outline-variant">inventory_2</span>
                    <p class="mt-3 font-semibold text-on-surface">No products found</p>
                    <p class="mt-1 text-sm text-on-surface-variant">Create a product or adjust your filters.</p>
                    <a href="{{ route('admin.products.create') }}"
                        class="mt-4 inline-flex items-center gap-2 rounded bg-primary-container px-4 py-2 text-sm font-semibold text-on-primary"><span
                            class="material-symbols-outlined text-base">add</span>Add Product</a>
                </div>
            @endforelse
        </div>
        @if ($products->hasPages())
            <div>{{ $products->links() }}</div>
        @endif
    </div>
@endsection
