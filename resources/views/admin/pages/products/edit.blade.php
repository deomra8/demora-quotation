@extends('admin.layouts.app')

@section('title', $product->name)

@section('content')
    <div class="p-6 md:p-10 max-w-[1440px] mx-auto w-full flex flex-col gap-8 flex-grow">
        <div class="max-w-[1440px] mx-auto">
            <!-- Page Header & Actions -->
            <div class="flex flex-col gap-4 pb-6 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <a class="font-body-md text-body-md hover:text-primary transition-colors flex items-center gap-1" href="{{ route('admin.products.index') }}">
                        <span class="material-symbols-outlined" style="font-size: 16px;">arrow_back</span>Back to Catalog
                    </a>
                    <div class="mt-3 flex flex-wrap items-center gap-4">
                        <h2 class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface">{{ $product->name }}</h2>
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-xs font-semibold {{ $product->is_active ? 'bg-emerald-50 text-emerald-700' : 'bg-slate-100 text-slate-600' }}">{{ $product->is_active ? 'Active' : 'Inactive' }}</span>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <a href="{{ route('admin.products.show', $product) }}" class="px-4 py-2 font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors">Cancel</a>
                    <button form="product-edit-form" type="submit" class="px-6 py-2 font-label-md text-label-md bg-primary-container text-on-primary rounded-DEFAULT hover:opacity-90 transition-opacity flex items-center gap-2"><span class="material-symbols-outlined" style="font-size: 18px;">save</span>Update Product</button>
                </div>
            </div>
            <!-- Form Layout Grid -->
            <form id="product-delete-form" method="POST" action="{{ route('admin.products.destroy', $product) }}" class="hidden" onsubmit="return confirm('Delete this product?')">
                @csrf
                @method('DELETE')
            </form>
            <form id="product-edit-form" method="POST" action="{{ route('admin.products.update', $product) }}" enctype="multipart/form-data" class="grid grid-cols-1 lg:grid-cols-12 gap-gutter pb-gutter">
                @csrf
                @method('PUT')
                @if ($errors->any())<div class="lg:col-span-12 rounded border border-error/30 bg-error/5 p-4 text-sm text-error" role="alert"><ul class="list-inside list-disc">@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
                <!-- Left Column (Main Info - 8 cols) -->
                <div class="lg:col-span-8 flex flex-col gap-stack-lg">
                    <!-- Basic Information Card -->
                    <div
                        class="bg-surface-container-lowest border border-outline-variant rounded-lg p-stack-lg shadow-[0_1px_2px_rgba(0,0,0,0.02)]">
                        <h3
                            class="font-title-lg text-title-lg text-on-surface mb-stack-lg pb-stack-sm border-b border-outline-variant/50">
                            Basic Information</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                            <div class="md:col-span-2">
                                <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Product
                                    Name</label>
                                <input name="name" required maxlength="255"
                                    class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all"
                                    type="text" value="{{ old('name', $product->name) }}" />
                            </div>
                            <div>
                                <label
                                    class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">SKU</label>
                                <input name="sku" required maxlength="100"
                                    class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all"
                                    type="text" value="{{ old('sku', $product->sku) }}" />
                            </div>
                            <div>
                                <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Brand /
                                    Manufacturer</label>
                                <input name="brand" maxlength="255"
                                    class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all"
                                    type="text" value="{{ old('brand', $product->brand) }}" />
                            </div>
                            <div class="md:col-span-2">
                                <label
                                    class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Description</label>
                                <textarea name="description" maxlength="5000"
                                    class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all resize-y"
                                    rows="4">{{ old('description', $product->description) }}</textarea>
                            </div>
                            <div><label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">UPC / Barcode</label><input name="upc" maxlength="50" value="{{ old('upc', $product->upc) }}" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md"></div>
                            <div><label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Category</label><input name="category" maxlength="100" value="{{ old('category', $product->category) }}" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md"></div>
                            <div><label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Supplier</label><input name="supplier" maxlength="255" value="{{ old('supplier', $product->supplier) }}" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md"></div>
                            <div><label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Lead Time</label><input name="lead_time" maxlength="100" value="{{ old('lead_time', $product->lead_time) }}" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md"></div>
                            <div><label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Material</label><input name="material" maxlength="255" value="{{ old('material', $product->material) }}" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md"></div>
                            <div><label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Color / Finish</label><input name="finish" maxlength="255" value="{{ old('finish', $product->finish) }}" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md"></div>
                            <div><label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Width (in)</label><input name="width" type="number" min="0" step="0.01" value="{{ old('width', $product->width) }}" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md"></div>
                            <div><label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Height (in)</label><input name="height" type="number" min="0" step="0.01" value="{{ old('height', $product->height) }}" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md"></div>
                            <div><label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Depth (in)</label><input name="depth" type="number" min="0" step="0.01" value="{{ old('depth', $product->depth) }}" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md"></div>
                            <div class="md:col-span-2"><label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Internal Notes</label><textarea name="internal_notes" maxlength="5000" rows="3" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md">{{ old('internal_notes', $product->internal_notes) }}</textarea></div>
                        </div>
                    </div>
                    <!-- Media / Images Card -->
                    <div
                        class="bg-surface-container-lowest border border-outline-variant rounded-lg p-stack-lg shadow-[0_1px_2px_rgba(0,0,0,0.02)]">
                        <div
                            class="flex items-center justify-between mb-stack-lg pb-stack-sm border-b border-outline-variant/50">
                            <h3 class="font-title-lg text-title-lg text-on-surface">Product Media</h3>
                            <span class="font-body-md text-body-md text-on-surface-variant">{{ $product->images->count() }} Images</span>
                        </div>
                        <!-- Existing Media Grid -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-stack-md mb-stack-md">
                            <button type="button" data-image-picker="primary" class="relative group rounded-DEFAULT border border-outline-variant overflow-hidden aspect-square cursor-pointer">
                                @if ($product->image_path)
                                    <img id="product-primary-preview" class="h-full w-full object-cover" alt="{{ $product->name }}" src="{{ asset('storage/' . $product->image_path) }}" />
                                    <div id="product-primary-empty" class="hidden"></div>
                                @else
                                    <div id="product-primary-empty" class="flex h-full items-center justify-center text-outline-variant"><span class="material-symbols-outlined text-4xl">add_photo_alternate</span></div>
                                    <img id="product-primary-preview" class="hidden h-full w-full object-cover" alt="Primary image preview" />
                                @endif
                                <span class="absolute inset-x-0 bottom-0 bg-black/55 py-1 text-center text-[10px] font-semibold text-white">Change primary</span>
                            </button>
                            @foreach ($product->images->reject(fn ($galleryImage) => $galleryImage->is_primary) as $galleryImage)
                                <div data-image-picker="gallery" role="button" tabindex="0" class="relative group rounded-DEFAULT border border-outline-variant overflow-hidden aspect-square cursor-pointer">
                                    <img class="h-full w-full object-cover" alt="{{ $galleryImage->caption ?: $product->name }}" src="{{ asset('storage/' . $galleryImage->path) }}" />
                                    <label class="absolute right-2 top-2 rounded bg-white/90 p-1.5" onclick="event.stopPropagation()"><input type="checkbox" name="remove_images[]" value="{{ $galleryImage->id }}" aria-label="Remove image" /></label>
                                </div>
                            @endforeach
                            <button type="button" data-image-picker="gallery" class="rounded-DEFAULT border-2 border-dashed border-outline-variant bg-surface-container-low flex min-h-24 flex-col items-center justify-center p-3 text-center text-outline hover:border-primary hover:text-primary">
                                <span class="material-symbols-outlined">add_photo_alternate</span><span class="text-[10px] font-label-md uppercase">Add Images</span>
                            </button>
                        </div>
                        <div id="product-gallery-preview" class="grid grid-cols-2 md:grid-cols-4 gap-stack-md mb-stack-md"></div>
                        <input id="product-primary-image" name="image" type="file" accept="image/jpeg,image/png,image/webp" class="hidden" />
                        <input id="product-gallery-images" name="images[]" type="file" multiple accept="image/jpeg,image/png,image/webp" class="hidden" />
                        @error('image')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror
                        @error('images.*')<p class="mt-1 text-xs text-error">{{ $message }}</p>@enderror
                        <p class="text-xs text-on-surface-variant">Click the cover or add-image tile to choose files. JPG, PNG, WEBP; maximum 5 MB each.</p>
                    </div>
                </div>
                <!-- Right Column (Pricing & Organization - 4 cols) -->
                <div class="lg:col-span-4 flex flex-col gap-stack-lg">
                    <!-- Pricing Card -->
                    <div
                        class="bg-surface-container-lowest border border-outline-variant rounded-lg p-stack-lg shadow-[0_1px_2px_rgba(0,0,0,0.02)]">
                        <h3
                            class="font-title-lg text-title-lg text-on-surface mb-stack-lg pb-stack-sm border-b border-outline-variant/50">
                            Pricing &amp; Inventory</h3>
                        <div class="space-y-stack-md">
                            <div>
                                <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Base Price ({{ $product->currency }})</label>
                                <div class="relative">
                                    <input name="price" required min="0" step="0.01"
                                        class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all"
                                        type="number" value="{{ old('price', $product->price) }}" />
                                </div>
                            </div>
                            <div>
                                <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Currency</label>
                                <select name="currency" required class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md text-body-md">
                                    <option value="EGP" @selected(old('currency', $product->currency) === 'EGP')>EGP · Egyptian Pound</option>
                                    <option value="USD" @selected(old('currency', $product->currency) === 'USD')>USD · US Dollar</option>
                                </select>
                            </div>
                            <div>
                                <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Internal Cost ({{ $product->currency }})</label>
                                <input name="cost" min="0" step="0.01" value="{{ old('cost', $product->cost) }}" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md text-body-md" type="number" />
                            </div>
                            <div>
                                <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Tax
                                    Rate</label>
                                <input name="tax_rate" required min="0" max="100" step="0.01" value="{{ old('tax_rate', $product->tax_rate) }}" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md text-body-md" type="number" />
                            </div>
                            <div class="pt-stack-sm">
                                <label class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Stock
                                    Level</label>
                                <div class="flex items-center gap-2">
                                    <input name="stock_quantity" required min="0" step="1"
                                        class="w-24 bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all"
                                        type="number" value="{{ old('stock_quantity', $product->stock_quantity) }}" />
                                    <span class="font-body-md text-body-md text-on-surface-variant">units available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Organization Card -->
                    <div
                        class="bg-surface-container-lowest border border-outline-variant rounded-lg p-stack-lg shadow-[0_1px_2px_rgba(0,0,0,0.02)]">
                        <h3
                            class="font-title-lg text-title-lg text-on-surface mb-stack-lg pb-stack-sm border-b border-outline-variant/50">
                            Organization</h3>
                        <div class="space-y-stack-md">
                            <div>
                                <label
                                    class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Status</label>
                                <input type="hidden" name="is_active" value="0" />
                                <select name="is_active" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md text-body-md text-on-surface">
                                    <option value="1" @selected((bool) old('is_active', $product->is_active))>Active (Published)</option>
                                    <option value="0" @selected(!(bool) old('is_active', $product->is_active))>Inactive</option>
                                </select>
                            </div>
                            <div>
                                <label
                                    class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Category</label>
                                <input name="category" maxlength="100" value="{{ old('category', $product->category) }}" class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md text-body-md" />
                            </div>
                            <div>
                                <label
                                    class="font-label-md text-label-md text-on-surface-variant block mb-stack-sm">Tags</label>
                                <div class="flex flex-wrap gap-2 mb-2">
                                    @foreach ($product->tags ?? [] as $tag)
                                        <span class="inline-flex items-center bg-surface-container border border-outline-variant px-2 py-1 rounded-DEFAULT font-label-md text-label-md text-on-surface">{{ $tag }}</span>
                                    @endforeach
                                </div>
                                <input
                                    class="w-full bg-surface border border-outline-variant rounded-DEFAULT px-3 py-2 font-body-md text-body-md text-on-surface placeholder:text-outline focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary/20 transition-all"
                                    name="tags" value="{{ old('tags', implode(', ', $product->tags ?? [])) }}" placeholder="Comma-separated tags" type="text" />
                            </div>
                        </div>
                    </div>
                    <!-- Danger Zone -->
                    <div class="mt-auto pt-stack-lg border-t border-error/20">
                        <button form="product-delete-form" type="submit"
                            class="w-full flex justify-center items-center gap-2 px-4 py-2.5 font-label-md text-label-md text-error bg-error/5 hover:bg-error/10 border border-error/20 rounded-DEFAULT transition-colors group"
                            >
                            <span class="material-symbols-outlined group-hover:scale-110 transition-transform"
                                style="font-size: 18px;">delete_forever</span>
                            Delete Product
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const primaryInput = document.getElementById('product-primary-image');
            const galleryInput = document.getElementById('product-gallery-images');
            const primaryPreview = document.getElementById('product-primary-preview');
            const primaryEmpty = document.getElementById('product-primary-empty');
            const galleryPreview = document.getElementById('product-gallery-preview');
            const galleryFiles = [];

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
                tile.addEventListener('keydown', (event) => {
                    if (event.key === 'Enter' || event.key === ' ') {
                        event.preventDefault();
                        galleryInput.click();
                    }
                });
            });

            primaryInput.addEventListener('change', () => {
                const file = primaryInput.files[0];
                if (!file) return;
                primaryPreview.src = URL.createObjectURL(file);
                primaryPreview.classList.remove('hidden');
                primaryEmpty?.classList.add('hidden');
            });

            galleryInput.addEventListener('change', () => {
                galleryFiles.push(...Array.from(galleryInput.files));
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
            });
        });
    </script>
@endsection