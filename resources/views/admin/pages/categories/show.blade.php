@extends('admin.layouts.app')

@section('title', $product->name)

@section('content')
    @php
        $marginPercent =
            $product->cost !== null && (float) $product->price > 0
                ? round((((float) $product->price - (float) $product->cost) / (float) $product->price) * 100, 1)
                : null;
    @endphp
    <div class="p-6 md:p-10 max-w-[1440px] mx-auto w-full flex flex-col gap-8 flex-grow">
        <div class="flex flex-col w-full">
            <!-- BREADCRUMBS & TOP BAR ACTIONS -->
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6">
                <div class="flex flex-wrap items-center gap-2">
                    <tbody class="divide-y-0">
                        <tr class="bg-surface-container-low hover:bg-surface-container transition-colors">
                            <td class="py-3.5 px-4 font-semibold text-on-surface">{{ $product->sku }}</td>
                            <td class="py-3.5 px-4 text-on-surface-variant">{{ $product->category ?: 'Uncategorized' }}</td>
                            <td class="py-3.5 px-4 text-on-surface-variant">{{ $product->finish ?: 'Not specified' }}</td>
                            <td class="py-3.5 px-4 text-on-surface-variant">{{ $product->material ?: 'Not specified' }}</td>
                            <td class="py-3.5 px-4"><span
                                    class="inline-flex items-center gap-1.5 font-semibold text-xs {{ $product->stock_quantity > 0 ? 'text-tertiary' : 'text-error' }}"><span
                                        class="w-2 h-2 rounded-full {{ $product->stock_quantity > 0 ? 'bg-tertiary' : 'bg-error' }}"></span>{{ number_format($product->stock_quantity) }}
                                    units</span></td>
                            <td class="py-3.5 px-4 text-right font-medium text-on-surface">
                                ${{ number_format((float) $product->price, 2) }}</td>
                        </tr>
                    </tbody>
                </div>
                <div class="flex items-center gap-1.5">
                    <span class="font-label-md text-label-md uppercase text-outline">UPC:</span>
                    <span class="font-medium text-on-surface">{{ $product->upc ?: 'Not provided' }}</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <span class="font-label-md text-label-md uppercase text-outline">Category:</span>
                    <span class="font-medium text-on-surface">{{ $product->category ?: 'Not categorized' }}</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <span class="font-label-md text-label-md uppercase text-outline">Supplier:</span>
                    <span
                        class="font-medium text-primary">{{ $product->supplier ?: ($product->brand ?: 'Not provided') }}</span>
                </div>
                @if ($product->brand)
                    <div class="flex items-center gap-1.5"><span
                            class="font-label-md text-label-md uppercase text-outline">Brand:</span><span
                            class="font-medium text-on-surface">{{ $product->brand }}</span></div>
                @endif
                <div class="flex items-center gap-1.5">
                    <span class="material-symbols-outlined text-tertiary-fixed-variant text-[16px]">bolt</span>
                    <span class="font-medium text-tertiary">{{ $product->lead_time ?: 'Lead time not specified' }}</span>
                </div>
            </div>
        </div>
        <div class="flex items-center gap-4 bg-surface-container-low px-4 py-3 rounded-xl shrink-0">
            <div
                class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center text-primary font-bold text-xs">
                SJ
            </div>
            <div class="text-left">
                <p class="font-label-md text-label-md text-outline uppercase tracking-wider">Catalog
                    Entry</p>
                <p class="font-body-md text-body-md text-on-surface font-medium">Added
                    {{ $product->created_at->format('M j, Y') }}</p>
            </div>
        </div>
    </div>
    </div>
    <!-- MAIN 2-COLUMN GRID (65% / 35%) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
        <!-- LEFT COLUMN (~65% -> 8 cols) -->
        <div class="lg:col-span-8 space-y-6">
            <!-- GALLERY & ASSET SHOWCASE -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm p-6 lg:p-7 space-y-5">
                <div class="flex items-center justify-between pb-2">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[22px]">photo_library</span>
                        <h2 class="font-title-lg text-title-lg text-on-surface">Media &amp; CAD Assets</h2>
                    </div>
                    <span
                        class="font-label-md text-label-md text-on-surface-variant bg-surface-container px-2.5 py-1 rounded-full">{{ $product->images->count() }}
                        Photos</span>
                </div>
                <!-- Main Hero Image Preview -->
                <div
                    class="relative w-full h-[400px] lg:h-[460px] rounded-xl overflow-hidden bg-surface-container-low group flex items-center justify-center">
                    @if ($product->image_path)
                        <img alt="{{ $product->name }}"
                            class="w-full h-full object-contain p-8 transition-transform duration-500 group-hover:scale-105"
                            id="main-product-image" src="{{ asset('storage/' . $product->image_path) }}" />
                    @else
                        <div class="flex h-full w-full items-center justify-center text-outline-variant"><span
                                class="material-symbols-outlined text-7xl">image</span></div>
                    @endif
                    <div
                        class="absolute bottom-4 left-4 bg-surface-container-lowest/90 backdrop-blur-md px-3.5 py-1.5 rounded-lg text-on-surface font-label-md text-label-md flex items-center gap-2 shadow-sm">
                        <span class="material-symbols-outlined text-[16px] text-primary">360</span>
                        {{ $product->image_path ? 'Primary Product Image' : 'No primary image uploaded' }}
                    </div>
                    <button
                        class="absolute top-4 right-4 w-9 h-9 rounded-lg bg-surface-container-lowest/90 backdrop-blur-md hover:bg-surface-container-lowest text-on-surface flex items-center justify-center transition-colors shadow-sm"
                        type="button">
                        <span class="material-symbols-outlined text-[20px]">fullscreen</span>
                    </button>
                </div>
                <!-- Thumbnail Strip -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                    @forelse ($product->images as $image)
                        <div class="relative h-24 rounded-lg overflow-hidden bg-surface-container-low p-2">
                            <img alt="{{ $image->caption ?: $product->name }}" class="w-full h-full object-contain"
                                src="{{ asset('storage/' . $image->path) }}" />
                            @if ($image->caption)
                                <span
                                    class="absolute bottom-1 right-1 font-label-md text-[10px] bg-surface-container-lowest/90 px-1.5 py-0.5 rounded text-on-surface">{{ $image->caption }}</span>
                            @endif
                        </div>
                    @empty
                        <p class="col-span-full text-sm text-on-surface-variant">No additional product images.</p>
                    @endforelse
                </div>
                <div
                    class="rounded-lg border border-dashed border-outline-variant bg-surface-container-low p-4 text-sm text-on-surface-variant">
                    Technical files are not attached to this product.
                </div>
            </div>
            <!-- CORE PRODUCT OVERVIEW & SPECIFICATIONS -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm p-6 lg:p-7 space-y-6">
                <div>
                    <h2 class="font-title-lg text-title-lg text-on-surface pb-3">Product Architectural
                        Overview</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                        {{ $product->description ?: 'No product description has been added.' }}</p>
                </div>
                <!-- Technical Specs Table -->
                <div class="space-y-3">
                    <div class="flex items-center justify-between">
                        <h3 class="font-label-md text-label-md uppercase tracking-wider text-outline">
                            Architectural &amp; Engineering Specifications</h3>
                        <span class="text-tertiary font-label-md text-label-md flex items-center gap-1 font-semibold"><span
                                class="material-symbols-outlined text-[16px]">verified</span>{{ $product->category ?: 'Product Specifications' }}</span>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left font-body-md text-body-md">
                            <tbody class="divide-y-0">
                                <tr class="bg-surface-container-low">
                                    <td class="py-3 px-4 font-semibold text-on-surface w-1/3">Material</td>
                                    <td class="py-3 px-4 text-on-surface-variant">
                                        {{ $product->material ?: 'Not specified' }}</td>
                                </tr>
                                <tr class="bg-surface-container-lowest">
                                    <td class="py-3 px-4 font-semibold text-on-surface">Color / Finish</td>
                                    <td class="py-3 px-4 text-on-surface-variant">{{ $product->finish ?: 'Not specified' }}
                                    </td>
                                </tr>
                                <tr class="bg-surface-container-low">
                                    <td class="py-3 px-4 font-semibold text-on-surface">Overall Dimensions
                                    </td>
                                    <td class="py-3 px-4 text-on-surface-variant">
                                        {{ $product->width ? number_format((float) $product->width, 2) . ' in W' : '—' }} ×
                                        {{ $product->height ? number_format((float) $product->height, 2) . ' in H' : '—' }}
                                        × {{ $product->depth ? number_format((float) $product->depth, 2) . ' in D' : '—' }}
                                    </td>
                                </tr>
                                <tr class="bg-surface-container-lowest">
                                    <td class="py-3 px-4 font-semibold text-on-surface">Available Stock</td>
                                    <td class="py-3 px-4 text-on-surface-variant">
                                        {{ number_format($product->stock_quantity) }} units</td>
                                </tr>
                                <tr class="bg-surface-container-low">
                                    <td class="py-3 px-4 font-semibold text-on-surface">Kinematic Tilt
                                        Range</td>
                                    <td class="py-3 px-4 text-on-surface-variant">
                                        {{ $product->lead_time ?: 'Not specified' }}</td>
                                </tr>
                                <tr class="bg-surface-container-lowest">
                                    <td class="py-3 px-4 font-semibold text-on-surface">Supplier</td>
                                    <td class="py-3 px-4 text-on-surface-variant">
                                        {{ $product->supplier ?: 'Not specified' }}</td>
                                </tr>
                                <tr class="bg-surface-container-low">
                                    <td class="py-3 px-4 font-semibold text-on-surface">Environmental
                                        Standards</td>
                                    <td class="py-3 px-4 text-on-surface-variant">UPC:
                                        {{ $product->upc ?: 'Not provided' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @if ($product->internal_notes)
                <section class="rounded-lg border border-amber-200 bg-amber-50 p-5">
                    <div class="flex items-center gap-2"><span class="material-symbols-outlined text-amber-800">lock</span>
                        <h2 class="font-semibold text-amber-950">Internal Notes</h2>
                    </div>
                    <p class="mt-3 whitespace-pre-line text-sm leading-6 text-amber-950">{{ $product->internal_notes }}</p>
                </section>
            @endif
            <!-- AVAILABLE CONFIGURATIONS & SKU VARIANTS -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm p-6 lg:p-7 space-y-5">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                    <div>
                        <h2 class="font-title-lg text-title-lg text-on-surface">SKU Breakdown &amp; Catalog
                            Variants</h2>
                        <p class="font-body-md text-body-md text-on-surface-variant">Available frame
                            combinations and sizing matrix</p>
                    </div>
                    <button
                        class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-surface-container-high hover:bg-surface-variant text-primary font-label-md text-label-md transition-colors"
                        type="button">
                        <span class="material-symbols-outlined text-[16px]">tune</span>
                        Manage Matrix
                    </button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left font-body-md text-body-md">
                        <thead>
                            <tr
                                class="bg-surface-container text-on-surface font-label-md text-label-md uppercase tracking-wider">
                                <th class="py-3 px-4">Variant SKU</th>
                                <th class="py-3 px-4">Size</th>
                                <th class="py-3 px-4">Frame / Mesh Finish</th>
                                <th class="py-3 px-4">Castor Type</th>
                                <th class="py-3 px-4">Available</th>
                                <th class="py-3 px-4 text-right">MSRP</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y-0">
                            <tr class="bg-surface-container-low hover:bg-surface-container transition-colors">
                                <td class="py-3.5 px-4 font-semibold text-on-surface">{{ $product->sku }}</td>
                                <td class="py-3.5 px-4 text-on-surface-variant">{{ $product->width ?: '—' }} ×
                                    {{ $product->height ?: '—' }} × {{ $product->depth ?: '—' }} in</td>
                                <td class="py-3.5 px-4 text-on-surface-variant">{{ $product->finish ?: 'Not specified' }}
                                </td>
                                <td class="py-3.5 px-4 text-on-surface-variant">
                                    {{ $product->material ?: 'Not specified' }}</td>
                                <td class="py-3.5 px-4"><span
                                        class="inline-flex items-center gap-1.5 font-semibold text-xs {{ $product->stock_quantity > 0 ? 'text-tertiary' : 'text-error' }}"><span
                                            class="w-2 h-2 rounded-full {{ $product->stock_quantity > 0 ? 'bg-tertiary' : 'bg-error' }}"></span>{{ number_format($product->stock_quantity) }}
                                        units</span></td>
                                <td class="py-3.5 px-4 text-right font-medium text-on-surface">
                                    ${{ number_format((float) $product->price, 2) }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- RIGHT COLUMN (~35% -> 4 cols) -->
        <div class="lg:col-span-4 space-y-6">
            <!-- PRICING & TIERED MARGIN BREAKDOWN CARD -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm p-6 space-y-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[22px]">payments</span>
                        <h3 class="font-title-lg text-title-lg text-on-surface">Commercial Pricing</h3>
                    </div>
                    <span
                        class="px-2 py-0.5 rounded bg-primary-fixed text-on-primary-fixed font-label-md text-[11px] font-bold">USD</span>
                </div>
                <div class="p-4 rounded-xl bg-surface-container-low space-y-3">
                    <div class="flex items-baseline justify-between">
                        <span class="font-label-md text-label-md uppercase text-outline">List MSRP
                            (Single)</span>
                        <span class="font-headline-md text-headline-md font-bold text-on-surface">{{ $product->currency }}
                            {{ number_format((float) $product->price, 2) }}</span>
                    </div>
                </div>
                <div class="p-4 rounded-xl bg-secondary-fixed/40 space-y-2">
                    @if ($product->cost !== null)
                        <div class="flex items-center justify-between text-xs"><span
                                class="font-label-md text-label-md uppercase text-on-secondary-fixed-variant">Unit
                                Cost</span><span class="font-bold text-on-secondary-fixed">{{ $product->currency }}
                                {{ number_format((float) $product->cost, 2) }}</span></div>
                        @if ($marginPercent !== null)
                            <div class="flex items-center justify-between text-xs"><span
                                    class="text-on-secondary-fixed-variant">Gross Margin</span><span
                                    class="font-bold text-tertiary">{{ number_format($marginPercent, 1) }}%
                                    ({{ $product->currency }}
                                    {{ number_format((float) $product->price - (float) $product->cost, 2) }})</span></div>
                            <div class="w-full h-1.5 rounded-full bg-secondary-fixed overflow-hidden mt-1">
                                <div class="h-full bg-tertiary rounded-full"
                                    style="width: {{ min(max($marginPercent, 0), 100) }}%;"></div>
                            </div>
                        @endif
                    @else
                        <p class="text-xs text-on-secondary-fixed-variant">Add an internal cost to calculate gross margin.
                        </p>
                    @endif
                </div>
            </div>
            <!-- INVENTORY & REGIONAL LOGISTICS CARD -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm p-6 space-y-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[22px]">warehouse</span>
                        <h3 class="font-title-lg text-title-lg text-on-surface">Inventory &amp; Fulfillment
                        </h3>
                    </div>
                    <span
                        class="px-2.5 py-0.5 rounded-full font-label-md text-label-md font-semibold {{ $product->stock_quantity > 0 ? 'bg-tertiary-fixed text-on-tertiary-fixed' : 'bg-error-container text-error' }}">{{ $product->stock_quantity > 0 ? 'In Stock' : 'Out of Stock' }}</span>
                </div>
                <div class="flex items-baseline justify-between p-4 rounded-xl bg-surface-container-low">
                    <div>
                        <span
                            class="font-headline-lg text-headline-lg font-bold text-on-surface">{{ number_format($product->stock_quantity) }}</span>
                        <span class="text-outline text-xs block font-label-md uppercase">Total Physical
                            Stock</span>
                    </div>
                    <div class="text-right"><span
                            class="font-body-md text-body-md font-semibold text-on-surface">SKU</span><span
                            class="text-outline text-xs block">{{ $product->sku }}</span></div>
                </div>
                <div
                    class="rounded-lg border border-dashed border-outline-variant bg-surface-container-low p-4 text-sm text-on-surface-variant">
                    Stock is tracked as a product total. Warehouse locations are not configured.
                </div>
            </div>
            <!-- QUOTATION & SALES PIPELINE SNAPSHOT -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm p-6 space-y-5">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[22px]">request_quote</span>
                        <h3 class="font-title-lg text-title-lg text-on-surface">Quotation Pipeline</h3>
                    </div>
                    <span class="text-xs text-on-surface-variant">Not connected</span>
                </div>
                <div
                    class="rounded-xl border border-dashed border-outline-variant bg-surface-container-low p-4 text-sm text-on-surface-variant">
                    Product quotations will appear here when quotation management is connected.
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        // Simple micro-interaction for thumbnail gallery preview swapping
        document.addEventListener('DOMContentLoaded', () => {
            const thumbs = document.querySelectorAll('.grid-cols-4 button');
            const mainImg = document.getElementById('main-product-image');

            thumbs.forEach(button => {
                button.addEventListener('click', () => {
                    thumbs.forEach(b => {
                        b.classList.remove('ring-2', 'ring-primary');
                        b.classList.add('hover:bg-surface-container');
                    });
                    button.classList.add('ring-2', 'ring-primary');
                    button.classList.remove('hover:bg-surface-container');

                    const childImg = button.querySelector('img');
                    if (childImg && mainImg) {
                        mainImg.setAttribute('data-alt', childImg.getAttribute('data-alt') || '');
                    }
                });
            });
        });
    </script>
    </div>
@endsection
