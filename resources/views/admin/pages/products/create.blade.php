@extends('admin.layouts.app')

@section('title', 'Product Catalog')

@section('content')
    <div class="flex-1 overflow-y-auto p-margin-mobile md:p-margin-desktop">
        <div class="max-w-container-max mx-auto w-full">
                <form method="POST" action="{{ route('admin.products.store') }}" enctype="multipart/form-data">
                    @csrf
                    @if ($errors->any())
                        <div class="mb-4 rounded border border-error/30 bg-error/5 p-4 text-sm text-error" role="alert">
                            <ul class="list-inside list-disc">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
                        </div>
                    @endif
            <!-- Page Header -->
            <div class="mb-stack-lg flex flex-col md:flex-row md:items-center md:justify-between gap-stack-md">
                <div>
                    <nav class="flex text-sm text-on-surface-variant mb-2 font-body-md">
                        <a class="hover:text-primary" href="{{ route('admin.products.index') }}">Product Catalog</a>
                        <span class="mx-2">/</span>
                        <span class="text-primary font-medium">Add New Product</span>
                    </nav>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface">Add New Product</h2>
                </div>
                <div class="flex items-center gap-stack-md">
                        <a href="{{ route('admin.products.index') }}"
                            class="px-6 py-2 border border-outline-variant text-on-surface-variant rounded hover:bg-surface-container-low transition-colors font-label-md text-label-md">Cancel</a>
                        <button type="submit"
                            class="px-6 py-2 bg-primary-container text-on-primary rounded hover:bg-primary transition-colors font-label-md text-label-md">Save
                        Product</button>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
                <!-- Left Column (Main Form) -->
                <div class="lg:col-span-8 space-y-stack-lg">
                    <!-- Section 1: Basic Information -->
                    <section
                        class="bg-surface-container-lowest border border-outline-variant rounded p-stack-lg ambient-shadow">
                        <h3
                            class="font-title-lg text-title-lg text-on-surface mb-stack-md border-b border-outline-variant pb-2">
                            Basic Information</h3>
                        <div class="space-y-stack-md">
                            <div>
                                <label
                                    class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Product
                                    Name</label>
                                    <input id="name" name="name" required maxlength="255"
                                    class="w-full p-3 border border-outline-variant rounded text-body-lg font-body-lg input-focus-glow"
                                        type="text" value="{{ old('name', 'Cairo Executive Desk') }}" />
                                    @error('name')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                                <div>
                                    <label
                                        class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">SKU
                                        / Product Code</label>
                                    <input id="sku" name="sku" required maxlength="100"
                                        class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                        type="text" value="{{ old('sku', 'EG-DSK-001') }}" />
                                    @error('sku')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror
                                </div>
                                <div>
                                    <label
                                        class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Category</label>
                                    <input id="category" name="category" maxlength="100" value="{{ old('category', 'Office Desks') }}" placeholder="e.g. Seating"
                                        class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow bg-white">
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                                <div>
                                    <label
                                        class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Retail Price ({{ old('currency', 'EGP') }})</label>
                                    <input id="price" name="price" required min="0" step="0.01"
                                        class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                        type="number" value="{{ old('price', '48500.00') }}" />
                                    @error('price')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror
                                </div>
                                <div>
                                    <label for="currency" class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Currency</label>
                                    <select id="currency" name="currency" required class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow">
                                        <option value="EGP" @selected(old('currency', 'EGP') === 'EGP')>EGP · Egyptian Pound</option>
                                        <option value="USD" @selected(old('currency') === 'USD')>USD · US Dollar</option>
                                    </select>
                                    @error('currency')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror
                                </div>
                                <div>
                                    <label for="cost" class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Internal Cost ({{ old('currency', 'EGP') }})</label>
                                    <input id="cost" name="cost" min="0" step="0.01"
                                        class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow text-outline"
                                        type="number" value="{{ old('cost', '32500.00') }}" />
                                    @error('cost')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                                    <div><label for="upc" class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">UPC / Barcode</label><input id="upc" name="upc" maxlength="50" value="{{ old('upc', '6223001000017') }}" class="w-full p-3 border border-outline-variant rounded text-body-md input-focus-glow">@error('upc')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror</div>
                                    <div><label for="brand" class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Brand / Manufacturer</label><input id="brand" name="brand" maxlength="255" value="{{ old('brand', 'Nile Design Solutions') }}" class="w-full p-3 border border-outline-variant rounded text-body-md input-focus-glow">@error('brand')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror</div>
                                    <div><label for="supplier" class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Supplier</label><input id="supplier" name="supplier" maxlength="255" value="{{ old('supplier', 'El-Masry Office Furniture') }}" class="w-full p-3 border border-outline-variant rounded text-body-md input-focus-glow"></div>
                                    <div><label for="lead_time" class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Lead Time</label><input id="lead_time" name="lead_time" maxlength="100" value="{{ old('lead_time', '3-5 business days in Cairo') }}" placeholder="e.g. 2-3 business days" class="w-full p-3 border border-outline-variant rounded text-body-md input-focus-glow"></div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Section 2: Description & Details -->
                    <section
                        class="bg-surface-container-lowest border border-outline-variant rounded p-stack-lg ambient-shadow">
                        <h3
                            class="font-title-lg text-title-lg text-on-surface mb-stack-md border-b border-outline-variant pb-2">
                            Description &amp; Details</h3>
                        <div class="space-y-stack-md">
                            <div>
                                <label
                                    class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Product
                                    Description</label>
                                <div
                                    class="border border-outline-variant rounded overflow-hidden focus-within:border-primary focus-within:ring-2 focus-within:ring-primary/20">
                                    <div class="bg-surface-container-low border-b border-outline-variant p-2 flex gap-2">
                                        <button
                                            class="p-1 hover:bg-outline-variant/20 rounded text-on-surface-variant"><span
                                                class="material-symbols-outlined text-sm">format_bold</span></button>
                                        <button
                                            class="p-1 hover:bg-outline-variant/20 rounded text-on-surface-variant"><span
                                                class="material-symbols-outlined text-sm">format_italic</span></button>
                                        <button
                                            class="p-1 hover:bg-outline-variant/20 rounded text-on-surface-variant"><span
                                                class="material-symbols-outlined text-sm">format_list_bulleted</span></button>
                                    </div>
                                        <textarea id="description" name="description" maxlength="5000" class="w-full p-3 border-none resize-y text-body-md font-body-md outline-none" rows="4">{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-stack-md">
                                <div>
                                    <label
                                        class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Width
                                        (in)</label>
                                        <input id="width" name="width" min="0" step="0.01"
                                        class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                            type="number" value="{{ old('width', '180') }}" />
                                </div>
                                <div>
                                    <label
                                        class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Height
                                        (in)</label>
                                        <input id="height" name="height" min="0" step="0.01"
                                        class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                            type="number" value="{{ old('height', '75') }}" />
                                </div>
                                <div>
                                    <label
                                        class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Depth
                                        (in)</label>
                                        <input id="depth" name="depth" min="0" step="0.01"
                                        class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                            type="number" value="{{ old('depth', '80') }}" />
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                                <div>
                                    <label
                                        class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Material</label>
                                        <input id="material" name="material" maxlength="255"
                                        class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                            type="text" value="{{ old('material', 'Egyptian beechwood and steel') }}" />
                                </div>
                                <div>
                                    <label
                                        class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Color
                                        / Finish</label>
                                        <input id="finish" name="finish" maxlength="255"
                                        class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                            type="text" value="{{ old('finish', 'Natural walnut') }}" />
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Section 4: Additional Notes -->
                    <section
                        class="bg-surface-container-lowest border border-outline-variant rounded p-stack-lg ambient-shadow">
                        <h3
                            class="font-title-lg text-title-lg text-on-surface mb-stack-md border-b border-outline-variant pb-2">
                            Additional Notes</h3>
                        <div>
                            <label
                                class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Internal
                                Comments (Not visible to clients)</label>
                            <textarea id="internal_notes" name="internal_notes" maxlength="5000" class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                rows="3">{{ old('internal_notes', 'Delivery from Obour City. Confirm elevator access before dispatch.') }}</textarea>
                        </div>
                    </section>
                </div>
                <!-- Right Column (Media & Status) -->
                <div class="lg:col-span-4 space-y-stack-lg">
                    <!-- Section 3: Inventory & Media -->
                    <section
                        class="bg-surface-container-lowest border border-outline-variant rounded p-stack-lg ambient-shadow">
                        <h3
                            class="font-title-lg text-title-lg text-on-surface mb-stack-md border-b border-outline-variant pb-2">
                            Status &amp; Media</h3>
                        <div
                            class="mb-stack-lg flex items-center justify-between p-4 bg-surface-container-low rounded border border-outline-variant/50">
                            <div>
                                <p class="font-title-lg text-title-lg text-on-surface text-sm">Active Status</p>
                                <p class="font-body-md text-body-md text-on-surface-variant text-xs mt-1">Product
                                    will be visible in catalog</p>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input type="hidden" name="is_active" value="0" />
                                    <input id="is_active" name="is_active" @checked((bool) old('is_active', true)) class="sr-only peer" type="checkbox" value="1" />
                                <div
                                    class="w-11 h-6 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-container">
                                </div>
                            </label>
                        </div>
                        <div>
                            <label
                                class="block font-label-md text-label-md text-on-surface-variant mb-2 uppercase tracking-wider">Product
                                Images</label>
                            <!-- Main Image Preview -->
                            <div data-image-picker="primary" role="button" tabindex="0" aria-label="Choose primary product image"
                                class="w-full h-48 bg-surface-container rounded border border-outline-variant mb-4 overflow-hidden relative group cursor-pointer">
                                <img id="product-primary-preview" class="hidden w-full h-full object-cover" alt="Primary product image preview" />
                                <div id="product-primary-empty" class="flex h-full w-full items-center justify-center text-outline-variant"><span class="material-symbols-outlined text-5xl">add_photo_alternate</span></div>
                                <div class="absolute inset-0 bg-black/40 hidden group-hover:flex items-center justify-center transition-opacity pointer-events-none">
                                    <span class="text-white flex items-center gap-2 font-label-md text-label-md"><span class="material-symbols-outlined">edit</span> Change Primary</span>
                                </div>
                                <div
                                    class="absolute top-2 left-2 bg-surface px-2 py-1 rounded text-xs font-bold text-on-surface border border-outline-variant shadow-sm">
                                    Primary</div>
                            </div>
                            <!-- Thumbnail Grid -->
                            <div id="product-gallery-preview" class="grid grid-cols-3 gap-2 mb-4">
                                <button type="button" data-image-picker="gallery" class="aspect-square bg-surface-container rounded border border-outline-variant overflow-hidden text-outline-variant hover:border-primary"><span class="material-symbols-outlined flex h-full w-full items-center justify-center">image</span></button>
                                <button type="button" data-image-picker="gallery" class="aspect-square bg-surface-container rounded border border-outline-variant overflow-hidden text-outline-variant hover:border-primary"><span class="material-symbols-outlined flex h-full w-full items-center justify-center">image</span></button>
                                <button type="button" data-image-picker="gallery" class="aspect-square border-2 border-dashed border-outline-variant rounded flex flex-col items-center justify-center text-outline hover:border-primary hover:text-primary transition-colors bg-surface-container-low"><span class="material-symbols-outlined mb-1">add_photo_alternate</span><span class="text-[10px] font-label-md uppercase">Add Image</span></button>
                            </div>
                            <input id="product-primary-image" name="image" type="file" accept="image/jpeg,image/png,image/webp" class="hidden" />
                            <input id="product-gallery-images" name="images[]" type="file" multiple accept="image/jpeg,image/png,image/webp" class="hidden" />
                            @error('image')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror
                            @error('images.*')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror
                            <p class="text-xs text-on-surface-variant font-body-md">JPG, PNG, WEBP. Max 5MB per image.</p>
                            </div>
                            <div class="mt-4">
                                <label for="tax_rate" class="mb-1 block text-xs font-semibold uppercase tracking-wider text-on-surface-variant">Tax Rate (%)</label>
                                <input id="tax_rate" name="tax_rate" type="number" min="0" max="100" step="0.01" required value="{{ old('tax_rate', '14.00') }}" class="w-full rounded border border-outline-variant bg-surface px-3 py-2 text-sm" />
                                @error('tax_rate')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror
                            </div>
                            <div class="mt-4">
                                <label for="stock_quantity" class="mb-1 block text-xs font-semibold uppercase tracking-wider text-on-surface-variant">Stock Level</label>
                                <input id="stock_quantity" name="stock_quantity" type="number" min="0" step="1" required value="{{ old('stock_quantity', 18) }}" class="w-full rounded border border-outline-variant bg-surface px-3 py-2 text-sm" />
                                @error('stock_quantity')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror
                            </div>
                            <div class="mt-4">
                                <label for="tags" class="mb-1 block text-xs font-semibold uppercase tracking-wider text-on-surface-variant">Tags (comma separated)</label>
                                <input id="tags" name="tags" value="{{ old('tags', 'Egyptian made, Executive, Office') }}" placeholder="Ergonomic, Mesh" class="w-full rounded border border-outline-variant bg-surface px-3 py-2 text-sm" />
                                @error('tags')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror
                            </div>
                    </section>
                    <!-- Summary Card -->
                    <section
                        class="bg-surface-container-lowest border border-outline-variant rounded p-stack-lg ambient-shadow">
                        <h3
                            class="font-title-lg text-title-lg text-on-surface mb-stack-md border-b border-outline-variant pb-2">
                            Publishing Summary</h3>
                        <ul class="space-y-3 font-body-md text-body-md text-on-surface">
                            <li class="flex justify-between border-b border-outline-variant/30 pb-2">
                                <span class="text-on-surface-variant">Created By:</span>
                                <span>Admin User</span>
                            </li>
                            <li class="flex justify-between border-b border-outline-variant/30 pb-2">
                                <span class="text-on-surface-variant">Last Modified:</span>
                                <span>Just now</span>
                            </li>
                            <li class="flex justify-between border-b border-outline-variant/30 pb-2">
                                <span class="text-on-surface-variant">Visibility:</span>
                                <span class="text-tertiary-container font-medium flex items-center gap-1"><span
                                        class="material-symbols-outlined text-[16px]">visibility</span>
                                    Public</span>
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const primaryInput = document.getElementById('product-primary-image');
            const galleryInput = document.getElementById('product-gallery-images');
            const primaryPreview = document.getElementById('product-primary-preview');
            const primaryEmpty = document.getElementById('product-primary-empty');
            const galleryPreview = document.getElementById('product-gallery-preview');
            let galleryFiles = [];

            document.querySelectorAll('[data-image-picker="primary"]').forEach((tile) => {
                tile.addEventListener('click', () => primaryInput.click());
                tile.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        primaryInput.click();
                    }
                });
            });

            document.querySelectorAll('[data-image-picker="gallery"]').forEach((tile) => {
                tile.addEventListener('click', () => galleryInput.click());
            });

            primaryInput.addEventListener('change', () => {
                const file = primaryInput.files[0];
                if (!file) return;
                primaryPreview.src = URL.createObjectURL(file);
                primaryPreview.classList.remove('hidden');
                primaryEmpty.classList.add('hidden');
            });

            galleryInput.addEventListener('change', () => {
                galleryFiles = galleryFiles.concat(Array.from(galleryInput.files));
                const transfer = new DataTransfer();
                galleryFiles.forEach((file) => transfer.items.add(file));
                galleryInput.files = transfer.files;
                galleryPreview.innerHTML = '';
                galleryFiles.forEach((file) => {
                    const tile = document.createElement('div');
                    tile.className = 'aspect-square overflow-hidden rounded border border-outline-variant';
                    const image = document.createElement('img');
                    image.src = URL.createObjectURL(file);
                    image.alt = file.name;
                    image.className = 'h-full w-full object-cover';
                    tile.appendChild(image);
                    galleryPreview.appendChild(tile);
                });
                const addTile = document.createElement('button');
                addTile.type = 'button';
                addTile.className = 'aspect-square border-2 border-dashed border-outline-variant rounded flex flex-col items-center justify-center text-outline hover:border-primary hover:text-primary transition-colors bg-surface-container-low';
                addTile.innerHTML = '<span class="material-symbols-outlined mb-1">add_photo_alternate</span><span class="text-[10px] font-label-md uppercase">Add Image</span>';
                addTile.addEventListener('click', () => galleryInput.click());
                galleryPreview.appendChild(addTile);
            });
        });
    </script>
    </div>
@endsection
