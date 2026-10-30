@extends('admin.layouts.app')

@section('title', 'Edit Category')

@section('content')
    <div class="p-6 md:p-10 max-w-[1440px] mx-auto w-full flex flex-col gap-8 flex-grow">
        <div class="flex flex-col w-full">
            <!-- Interactive View State Controller -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-6">
                <div class="flex flex-col">
                    <nav
                        class="flex items-center space-x-2 text-on-surface-variant font-label-md text-label-md tracking-wider uppercase mb-1">
                        <a class="hover:text-primary transition-colors" href="#">Dashboard</a>
                        <span>/</span>
                        <a class="hover:text-primary transition-colors" href="#">Categories</a>
                        <span>/</span>
                        <span class="text-primary font-bold" id="crumb-state">Edit Category</span>
                    </nav>
                    <div class="flex items-baseline space-x-3">
                        <h1 class="font-headline-lg text-headline-lg text-primary" id="page-heading">Edit Category</h1>
                        <span
                            class="inline-flex items-center px-2 py-0.5 rounded-full font-label-md text-label-md bg-secondary-container text-on-secondary-container">
                            Taxonomy ID: #CAT-8942
                        </span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant mt-1">
                        Define taxonomy details, visual merchandising banners, descriptions, and storefront visibility
                        status.
                    </p>
                </div>
                <!-- Mode Switcher & Top Action Buttons -->
                <div class="flex flex-wrap items-center gap-3">
                    <!-- Mode Toggle Switch (Create vs Edit Demo Mode) -->
                    <div class="bg-surface-container p-1 rounded-full flex items-center shadow-sm mr-2">
                        <button
                            class="px-3 py-1 text-on-surface-variant font-label-md text-label-md rounded-full transition-all"
                            id="mode-create-btn" onclick="setMode('create')">
                            Create Mode
                        </button>
                        <button
                            class="px-3 py-1 bg-surface-container-lowest text-primary font-label-md text-label-md rounded-full shadow-sm transition-all font-bold"
                            id="mode-edit-btn" onclick="setMode('edit')">
                            Edit Mode
                        </button>
                    </div>
                    <button
                        class="px-4 py-2.5 rounded-xl bg-surface-container-high text-on-surface hover:bg-surface-variant font-label-md text-label-md transition-colors flex items-center"
                        type="button">
                        Discard
                    </button>
                    <button
                        class="px-4 py-2.5 rounded-xl bg-surface-container text-primary hover:bg-surface-container-high font-label-md text-label-md transition-colors flex items-center"
                        type="button">
                        <span class="material-symbols-outlined text-base mr-1.5">save</span>
                        Save Draft
                    </button>
                    <button
                        class="px-5 py-2.5 rounded-xl bg-primary-container text-on-primary hover:bg-primary font-label-md text-label-md shadow-sm transition-all flex items-center"
                        type="button">
                        <span class="material-symbols-outlined text-base mr-1.5"
                            style="font-variation-settings: 'FILL' 1;">cloud_done</span>
                        Publish Category
                    </button>
                </div>
            </div>
            <!-- Main 12-Column Responsive Bento Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter w-full">
                <!-- LEFT COLUMN: Main Form, Media & Content (8 cols) -->
                <div class="lg:col-span-8 flex flex-col space-y-gutter">
                    <!-- Basic Taxonomy Info Card -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col">
                        <div class="flex items-center justify-between pb-4 mb-5 border-b border-surface-container">
                            <div class="flex items-center space-x-2">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">account_tree</span>
                                <h2 class="font-title-lg text-title-lg text-on-surface">Category Taxonomy &amp; Structure
                                </h2>
                            </div>
                            <span
                                class="font-label-md text-label-md text-on-surface-variant bg-surface-container-low px-2.5 py-1 rounded">Primary
                                Metadata</span>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg">
                            <!-- Category Name -->
                            <div class="flex flex-col space-y-1.5 md:col-span-2">
                                <label class="font-label-md text-label-md uppercase tracking-wide text-on-surface-variant"
                                    for="cat-name">
                                    Category Name <span class="text-error">*</span>
                                </label>
                                <input
                                    class="w-full px-4 py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md focus:bg-surface-container-lowest input-focus-glow transition-all"
                                    id="cat-name" oninput="updateSlug(this.value)"
                                    placeholder="e.g. Executive Lounge Chairs" type="text"
                                    value="Ergonomic Task Seating" />
                            </div>
                            <!-- URL Slug & Live Preview -->
                            <div class="flex flex-col space-y-1.5 md:col-span-2">
                                <label class="font-label-md text-label-md uppercase tracking-wide text-on-surface-variant"
                                    for="cat-slug">
                                    URL Canonical Slug <span class="text-error">*</span>
                                </label>
                                <div class="flex items-stretch rounded-lg bg-surface-container-low overflow-hidden">
                                    <span
                                        class="inline-flex items-center px-3.5 bg-surface-container text-on-surface-variant font-label-md text-label-md">
                                        {{$_SERVER['HTTP_HOST']}}/categories/
                                    </span>
                                    <input
                                        class="flex-1 px-4 py-2.5 bg-surface-container-low text-primary font-body-md text-body-md input-focus-glow"
                                        id="cat-slug" type="text" value="seating/ergonomic-task-seating" />
                                </div>
                                <p class="font-label-md text-label-md text-on-surface-variant flex items-center mt-1">
                                    <span class="material-symbols-outlined text-xs mr-1 text-primary">link</span>
                                    Canonical Route: <span class="ml-1 text-primary underline"
                                        id="slug-preview">/catalog/seating/ergonomic-task-seating</span>
                                </p>
                            </div>
                            <!-- Parent Category -->
                            <div class="flex flex-col space-y-1.5">
                                <label class="font-label-md text-label-md uppercase tracking-wide text-on-surface-variant"
                                    for="parent-cat">
                                    Parent Hierarchy
                                </label>
                                <div class="relative">
                                    <select
                                        class="w-full px-4 py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md appearance-none pr-10 input-focus-glow"
                                        id="parent-cat">
                                        <option value="root">None (Root Level Category)</option>
                                        <option selected="" value="office-seating">Office Seating (Tier 1)</option>
                                        <option value="desks">Executive Desking (Tier 1)</option>
                                        <option value="acoustic-solutions">Acoustic &amp; Privacy (Tier 1)</option>
                                        <option value="storage">Modular Architectural Storage (Tier 1)</option>
                                    </select>
                                    <span
                                        class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">
                                        expand_more
                                    </span>
                                </div>
                            </div>
                            <!-- Sort Weight -->
                            <div class="flex flex-col space-y-1.5">
                                <div class="flex items-center justify-between">
                                    <label
                                        class="font-label-md text-label-md uppercase tracking-wide text-on-surface-variant"
                                        for="sort-order">
                                        Sort Weight / Display Priority
                                    </label>
                                    <span class="font-label-md text-label-md text-on-surface-variant">0 = Highest
                                        Priority</span>
                                </div>
                                <input
                                    class="w-full px-4 py-2.5 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md input-focus-glow"
                                    id="sort-order" type="number" value="12" />
                            </div>
                        </div>
                    </div>
                    <!-- Category Hero Banner & Merchandising Media Card -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col">
                        <div class="flex items-center justify-between pb-4 mb-5 border-b border-surface-container">
                            <div class="flex items-center space-x-2">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">photo_library</span>
                                <h2 class="font-title-lg text-title-lg text-on-surface">Storefront Hero Banner &amp; Visual
                                    Asset</h2>
                            </div>
                            <span
                                class="font-label-md text-label-md bg-secondary-fixed text-on-secondary-fixed px-2.5 py-0.5 rounded-full font-bold">16:9
                                Display Asset</span>
                        </div>
                        <!-- Media Preview Stage -->
                        <div
                            class="relative w-full rounded-xl overflow-hidden bg-surface-container-low aspect-[16/7] group shadow-inner">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                                data-alt="Modern architectural commercial showroom displaying premium ergonomic high-back mesh task chairs in minimalist graphite finish, ambient warm architectural light, high ceilings, polished concrete floors, and luxury corporate office furniture styling in navy and sand accents."
                                id="banner-image-preview"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuB61cAmbILJUNATyKAqTJd5MDCzolzd9AkAIjvUywNZH0kimbGWIG8j9V_XYshV63xFdoSqsRMl6o390sIyKgLh0oXKimR_mR8CeIoggacQfklMURCIEIn4zXTafmj2mZ5spDmjTLcGSfgbJBU08BY1t_36SEGYy44zYH7WUZOWKpLip6N6AXP6KmuOhXV-KBfj7NMa3S_OwrFdJtMJholbhKgP_YTeI3u6vcvlkQW4" />
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-primary/80 via-primary/20 to-transparent flex flex-col justify-end p-5 text-on-primary">
                                <div class="flex items-end justify-between">
                                    <div>
                                        <p class="font-label-md text-label-md uppercase tracking-wider text-primary-fixed">
                                            Active Storefront Banner</p>
                                        <h3 class="font-headline-md text-headline-md font-bold text-on-primary">Ergonomic
                                            Task Seating Collection</h3>
                                        <p class="font-body-md text-body-md text-primary-fixed-dim text-sm">Target
                                            Resolution: 1920 × 840 px • Optimized WebP</p>
                                    </div>
                                    <div class="flex space-x-2">
                                        <button
                                            class="px-3 py-1.5 bg-surface-container-lowest/90 backdrop-blur-md text-primary hover:bg-surface-container-lowest rounded-lg font-label-md text-label-md flex items-center shadow-sm"
                                            type="button">
                                            <span class="material-symbols-outlined text-sm mr-1">crop</span> Crop Banner
                                        </button>
                                        <button
                                            class="px-3 py-1.5 bg-primary-container text-on-primary hover:bg-primary rounded-lg font-label-md text-label-md flex items-center shadow-sm"
                                            type="button">
                                            <span class="material-symbols-outlined text-sm mr-1">refresh</span> Replace
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Asset Specifications & Alt Text Row -->
                        <div
                            class="grid grid-cols-1 md:grid-cols-3 gap-stack-md mt-4 pt-4 border-t border-surface-container-low">
                            <div class="p-3 bg-surface-container-low rounded-lg flex items-center space-x-3">
                                <span class="material-symbols-outlined text-primary text-xl">image</span>
                                <div class="overflow-hidden">
                                    <p class="font-label-md text-label-md text-on-surface truncate">
                                        ergonomic-hero-banner.jpg</p>
                                    <p class="font-label-md text-label-md text-on-surface-variant">2.4 MB • 1920 × 1080</p>
                                </div>
                            </div>
                            <div class="md:col-span-2 flex flex-col justify-center">
                                <label class="font-label-md text-label-md uppercase text-on-surface-variant mb-1"
                                    for="img-alt-text">Accessibility &amp; SEO Alt Text</label>
                                <input
                                    class="w-full px-3 py-2 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md input-focus-glow"
                                    id="img-alt-text" type="text"
                                    value="Premium ergonomic mesh task chairs for corporate offices and executive workspaces" />
                            </div>
                        </div>
                        <!-- Drag & Drop Secondary Zone -->
                        <div
                            class="mt-4 p-5 rounded-xl border-2 border-dashed border-outline-variant bg-surface-container-lowest hover:bg-surface-container-low transition-colors text-center cursor-pointer flex flex-col items-center justify-center">
                            <span class="material-symbols-outlined text-primary text-3xl mb-1">cloud_upload</span>
                            <p class="font-body-md text-body-md text-on-surface font-medium">Click or drag &amp; drop
                                replacement high-res media</p>
                            <p class="font-label-md text-label-md text-on-surface-variant">SVG, PNG, JPG, or AVIF up to
                                10MB (ICC Profile: Display P3 / sRGB)</p>
                        </div>
                    </div>
                    <!-- Rich Commercial Description & Specifications (WYSIWYG) -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col">
                        <div class="flex items-center justify-between pb-4 mb-4 border-b border-surface-container">
                            <div class="flex items-center space-x-2">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">edit_note</span>
                                <h2 class="font-title-lg text-title-lg text-on-surface">Architectural &amp; Commercial
                                    Description</h2>
                            </div>
                            <div class="flex items-center space-x-1 bg-surface-container-low p-1 rounded-lg">
                                <button
                                    class="px-2.5 py-1 rounded bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm">Visual
                                    Editor</button>
                                <button
                                    class="px-2.5 py-1 rounded text-on-surface-variant hover:text-on-surface font-label-md text-label-md">Markdown</button>
                            </div>
                        </div>
                        <!-- Formatting Controls Bar -->
                        <div class="flex flex-wrap items-center gap-1.5 p-2 bg-surface-container-low rounded-t-lg">
                            <button
                                class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant hover:text-on-surface"
                                type="button"><span class="material-symbols-outlined text-lg">format_bold</span></button>
                            <button
                                class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant hover:text-on-surface"
                                type="button"><span
                                    class="material-symbols-outlined text-lg">format_italic</span></button>
                            <button
                                class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant hover:text-on-surface"
                                type="button"><span
                                    class="material-symbols-outlined text-lg">format_underlined</span></button>
                            <div class="w-px h-5 bg-outline-variant mx-1"></div>
                            <button
                                class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant hover:text-on-surface"
                                type="button"><span
                                    class="material-symbols-outlined text-lg">format_list_bulleted</span></button>
                            <button
                                class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant hover:text-on-surface"
                                type="button"><span
                                    class="material-symbols-outlined text-lg">format_list_numbered</span></button>
                            <div class="w-px h-5 bg-outline-variant mx-1"></div>
                            <button
                                class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant hover:text-on-surface"
                                type="button"><span class="material-symbols-outlined text-lg">title</span></button>
                            <button
                                class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant hover:text-on-surface"
                                type="button"><span
                                    class="material-symbols-outlined text-lg">format_quote</span></button>
                            <button
                                class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant hover:text-on-surface"
                                type="button"><span class="material-symbols-outlined text-lg">table_chart</span></button>
                            <button
                                class="p-1.5 rounded hover:bg-surface-container text-on-surface-variant hover:text-on-surface"
                                type="button"><span class="material-symbols-outlined text-lg">code</span></button>
                            <div
                                class="ml-auto text-on-surface-variant font-label-md text-label-md flex items-center pr-2">
                                <span class="inline-block w-2 h-2 rounded-full bg-on-tertiary-container mr-1.5"></span>
                                Autosaved 2m ago
                            </div>
                        </div>
                        <!-- Editable Area -->
                        <textarea
                            class="w-full p-4 rounded-b-lg bg-surface-container-lowest text-on-surface font-body-md text-body-md input-focus-glow leading-relaxed"
                            rows="5">Engineered for 24/7 corporate workplace comfort with dynamic spinal support, breathable Pellicle weave, and BIFMA Level 3 compliance. Designed to integrate seamlessly into modern architectural workplace schemes while meeting international acoustic and sustainability standards. Compatible with customized fabric grades, polished aluminum bases, and multi-directional 4D kinematic armrests.</textarea>
                        <!-- Compliance & Tag Pills -->
                        <div class="flex flex-wrap items-center gap-2 mt-4 pt-3">
                            <span class="font-label-md text-label-md uppercase text-on-surface-variant mr-1">Compliance
                                Flags:</span>
                            <span
                                class="px-2.5 py-1 rounded bg-surface-container text-primary font-label-md text-label-md">ANSI/BIFMA
                                X5.1-2017</span>
                            <span
                                class="px-2.5 py-1 rounded bg-surface-container text-primary font-label-md text-label-md">GREENGUARD
                                Gold</span>
                            <span
                                class="px-2.5 py-1 rounded bg-surface-container text-primary font-label-md text-label-md">LEED
                                v4 Credit Eligible</span>
                            <button
                                class="px-2.5 py-1 rounded text-on-surface-variant hover:bg-surface-container-low font-label-md text-label-md flex items-center">
                                <span class="material-symbols-outlined text-sm mr-1">add</span> Add Spec
                            </button>
                        </div>
                    </div>
                    <!-- Storefront SEO & Rich Snippet Preview -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col">
                        <div class="flex items-center justify-between pb-4 mb-4 border-b border-surface-container">
                            <div class="flex items-center space-x-2">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">travel_explore</span>
                                <h2 class="font-title-lg text-title-lg text-on-surface">Storefront Search &amp; Social
                                    Preview (SERP)</h2>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input checked="" class="sr-only peer" type="checkbox" />
                                <div
                                    class="w-11 h-6 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-container">
                                </div>
                                <span class="ml-2 font-label-md text-label-md text-on-surface">Featured on Catalog
                                    Home</span>
                            </label>
                        </div>
                        <!-- Google SERP Snippet Preview Box -->
                        <div class="bg-surface p-4 rounded-lg mb-5">
                            <p class="font-label-md text-label-md text-on-surface-variant flex items-center mb-1">
                                <span class="material-symbols-outlined text-sm mr-1 text-primary">public</span>
                                https://officelux.design › catalog › seating › ergonomic-task-seating
                            </p>
                            <a class="font-title-lg text-title-lg text-primary hover:underline block font-semibold"
                                href="#">
                                Ergonomic Task Seating | Corporate Office Furniture Collections | OfficeLux
                            </a>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-1 text-sm line-clamp-2">
                                Explore commercial-grade ergonomic office task chairs engineered for spine support, all-day
                                comfort, and BIFMA compliant endurance. Commercial volume trade pricing available.
                            </p>
                        </div>
                        <div class="space-y-stack-md">
                            <div>
                                <div class="flex items-center justify-between mb-1">
                                    <label class="font-label-md text-label-md uppercase text-on-surface-variant"
                                        for="seo-title">SEO Meta Title</label>
                                    <span class="font-label-md text-label-md text-on-surface-variant">68 / 70
                                        characters</span>
                                </div>
                                <input
                                    class="w-full px-4 py-2 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md input-focus-glow"
                                    id="seo-title" type="text"
                                    value="Ergonomic Task Seating | Corporate Office Furniture Collections | OfficeLux" />
                            </div>
                            <div>
                                <div class="flex items-center justify-between mb-1">
                                    <label class="font-label-md text-label-md uppercase text-on-surface-variant"
                                        for="seo-desc">SEO Meta Description</label>
                                    <span class="font-label-md text-label-md text-on-surface-variant">154 / 160
                                        characters</span>
                                </div>
                                <textarea
                                    class="w-full px-4 py-2 rounded-lg bg-surface-container-low text-on-surface font-body-md text-body-md input-focus-glow"
                                    id="seo-desc" rows="2">Explore commercial-grade ergonomic office task chairs engineered for spine support, all-day comfort, and BIFMA compliant endurance. Commercial volume trade pricing available.</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- RIGHT COLUMN: Publishing Status, Visibility & Danger Zone (4 cols) -->
                <div class="lg:col-span-4 flex flex-col space-y-gutter">
                    <!-- Publishing Status & Schedule Card -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col">
                        <div class="flex items-center justify-between pb-3 mb-4 border-b border-surface-container">
                            <div class="flex items-center space-x-2">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">published_with_changes</span>
                                <h3 class="font-title-lg text-title-lg text-on-surface">Publishing Status</h3>
                            </div>
                            <span
                                class="px-2.5 py-0.5 rounded-full font-label-md text-label-md bg-tertiary-fixed text-on-tertiary-fixed font-bold"
                                id="badge-status">
                                Live
                            </span>
                        </div>
                        <!-- Custom Radio Selectors -->
                        <div class="space-y-2.5">
                            <!-- Active -->
                            <label
                                class="flex items-start p-3 rounded-lg bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                                <input checked="" class="mt-1 text-primary focus:ring-primary h-4 w-4"
                                    name="publish_status"
                                    onchange="updateStatusBadge('Live', 'bg-tertiary-fixed text-on-tertiary-fixed')"
                                    type="radio" value="active" />
                                <div class="ml-3">
                                    <span class="block font-title-lg text-sm font-semibold text-on-surface">Active /
                                        Published</span>
                                    <span class="block font-body-md text-body-md text-on-surface-variant text-xs mt-0.5">
                                        Visible to all storefront clients and sales quotation builders across active
                                        regions.
                                    </span>
                                </div>
                            </label>
                            <!-- Draft -->
                            <label
                                class="flex items-start p-3 rounded-lg bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                                <input class="mt-1 text-primary focus:ring-primary h-4 w-4" name="publish_status"
                                    onchange="updateStatusBadge('Draft', 'bg-surface-container-highest text-on-surface-variant')"
                                    type="radio" value="draft" />
                                <div class="ml-3">
                                    <span class="block font-title-lg text-sm font-semibold text-on-surface">Draft</span>
                                    <span class="block font-body-md text-body-md text-on-surface-variant text-xs mt-0.5">
                                        Visible only to internal catalog managers and merchandising admins.
                                    </span>
                                </div>
                            </label>
                            <!-- Archived -->
                            <label
                                class="flex items-start p-3 rounded-lg bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                                <input class="mt-1 text-primary focus:ring-primary h-4 w-4" name="publish_status"
                                    onchange="updateStatusBadge('Archived', 'bg-error-container text-on-error-container')"
                                    type="radio" value="archived" />
                                <div class="ml-3">
                                    <span class="block font-title-lg text-sm font-semibold text-on-surface">Archived</span>
                                    <span class="block font-body-md text-body-md text-on-surface-variant text-xs mt-0.5">
                                        Hidden from catalog navigation. Preserved strictly for historic quotation logs.
                                    </span>
                                </div>
                            </label>
                        </div>
                        <!-- Publishing Date Timestamp -->
                        <div class="mt-5 pt-4 border-t border-surface-container-low flex flex-col space-y-2">
                            <label class="font-label-md text-label-md uppercase text-on-surface-variant"
                                for="publish-date">Live Schedule Timestamp</label>
                            <div class="flex items-center bg-surface-container-low rounded-lg px-3 py-2">
                                <span
                                    class="material-symbols-outlined text-on-surface-variant text-base mr-2">calendar_today</span>
                                <input
                                    class="bg-transparent font-body-md text-body-md text-on-surface w-full focus:outline-none"
                                    id="publish-date" type="datetime-local" value="2024-10-14T09:00" />
                            </div>
                        </div>
                    </div>
                    <!-- Visibility & B2B Client Tier Access Permissions -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col">
                        <div class="flex items-center space-x-2 pb-3 mb-4 border-b border-surface-container">
                            <span class="material-symbols-outlined text-primary"
                                style="font-variation-settings: 'FILL' 1;">lock_open</span>
                            <h3 class="font-title-lg text-title-lg text-on-surface">Channel &amp; Client Access</h3>
                        </div>
                        <div class="space-y-4">
                            <!-- Toggle 1: Public Storefront -->
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-title-lg text-sm font-medium text-on-surface">Public Retail Catalog</p>
                                    <p class="font-label-md text-label-md text-on-surface-variant">General commercial guest
                                        browsing</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input checked="" class="sr-only peer" type="checkbox" />
                                    <div
                                        class="w-10 h-5 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary-container">
                                    </div>
                                </label>
                            </div>
                            <!-- Toggle 2: B2B Enterprise Portal -->
                            <div class="flex items-center justify-between">
                                <div>
                                    <p class="font-title-lg text-sm font-medium text-on-surface">Contract B2B Portal</p>
                                    <p class="font-label-md text-label-md text-on-surface-variant">Requires authenticated
                                        enterprise login</p>
                                </div>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input checked="" class="sr-only peer" type="checkbox" />
                                    <div
                                        class="w-10 h-5 bg-surface-container-highest peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary-container">
                                    </div>
                                </label>
                            </div>
                            <!-- Tier Multi-selector -->
                            <div class="pt-2">
                                <label
                                    class="font-label-md text-label-md uppercase text-on-surface-variant block mb-1.5">Client
                                    Tier Exclusivity</label>
                                <div class="flex flex-wrap gap-1.5">
                                    <span
                                        class="px-2.5 py-1 rounded-md bg-primary-fixed text-on-primary-fixed font-label-md text-label-md flex items-center">
                                        Enterprise Global <span
                                            class="material-symbols-outlined text-xs ml-1 cursor-pointer">close</span>
                                    </span>
                                    <span
                                        class="px-2.5 py-1 rounded-md bg-primary-fixed text-on-primary-fixed font-label-md text-label-md flex items-center">
                                        Architect &amp; Design Trade <span
                                            class="material-symbols-outlined text-xs ml-1 cursor-pointer">close</span>
                                    </span>
                                    <button
                                        class="px-2.5 py-1 rounded-md bg-surface-container text-on-surface-variant font-label-md text-label-md hover:bg-surface-variant flex items-center">
                                        <span class="material-symbols-outlined text-xs mr-1">add</span> Add Tier
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Assigned Products & Quick Link Card -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col">
                        <div class="flex items-center justify-between pb-3 mb-4 border-b border-surface-container">
                            <div class="flex items-center space-x-2">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">chair</span>
                                <h3 class="font-title-lg text-title-lg text-on-surface">Assigned Products</h3>
                            </div>
                            <span
                                class="px-2.5 py-0.5 rounded-full font-label-md text-label-md bg-surface-container text-primary font-bold">
                                48 SKUs
                            </span>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant text-sm mb-4">
                            Active items utilizing this taxonomy category for dynamic pricing rules and showroom
                            presentation.
                        </p>
                        <!-- Product Thumbnails Grid Stack -->
                        <div class="grid grid-cols-4 gap-2 mb-4">
                            <div
                                class="relative group rounded-lg overflow-hidden aspect-square bg-surface-container-low shadow-sm">
                                <img class="w-full h-full object-cover"
                                    data-alt="Modern high performance black mesh executive office chair with polished aluminum base, professional studio photography against clean neutral background."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC0UuxMyvWSyK_y5QGttZL7avhRw8y7sxaUt5myElNXLxep9XZOLLAMJ8N7kHFq3Bw41faEuKA6GN815DbnqGsALVk6IwkGarFB5NU6wy0WBFeN4b-UJtxu58BQDKWXc0GddSWnzA_WfsmbI0G0c5brP9KO717ovlHp7r160X52sCajuQ1CWj6hC-oa3dzOvSF47dqT2Dt09-9OdcIz__Kz-V9XBFFL1jp592gNLCgC" />
                                <div
                                    class="absolute inset-0 bg-primary/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-on-primary font-label-md text-label-md text-xs">
                                    #TX-401
                                </div>
                            </div>
                            <div
                                class="relative group rounded-lg overflow-hidden aspect-square bg-surface-container-low shadow-sm">
                                <img class="w-full h-full object-cover"
                                    data-alt="Ergonomic architectural white and grey task chair with lumbar adjustment knob, neutral studio background, premium design aesthetics."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZRG7jVVwshZEcXC98TfxBV-_UnE9Gk5GL_0nBKtOkSr1YScLuDZpu5YyGk-1luQSzRmyVptT6atoM_C-lG2wcjReNofOUbFaFOzs2PMkCqQtUWoGt_QVOaHF_GTBs0BlvaaQjrQl7LIONnMZq_57rqqDxuaVCAgTQHDzCPJ3g6DirUAMjhAKE58b9YepHKSJ1TJ3NPWPrgGOycpXEKirpAcnXWl46c7wLWPxwJ1kq" />
                                <div
                                    class="absolute inset-0 bg-primary/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-on-primary font-label-md text-label-md text-xs">
                                    #TX-402
                                </div>
                            </div>
                            <div
                                class="relative group rounded-lg overflow-hidden aspect-square bg-surface-container-low shadow-sm">
                                <img class="w-full h-full object-cover"
                                    data-alt="Luxury blue leather executive desk chair with brushed brass details, minimalist modern office furniture catalog image."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAp1XNzVFc5SgA6ncUTptq9fbQmNf96ROoKV1OEoRrZzeNgqqkkPSx4hQ77DS5_ppq-nPbGeG42ZyX6GEPrBIlIzB5EEje4x83rSq6i95LAuCaVuKhjM-Ki8ZFA0u3yOmUTYyyaZ6SY-d40mA7OpQF_-ZGrwL83iHK9CQixBxTX945VGTamE8v0B86TaMcI2k5pD1cWkUmOLzjeJ1axU-glGhV1uAtUqPRBD5LZaNxv" />
                                <div
                                    class="absolute inset-0 bg-primary/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-on-primary font-label-md text-label-md text-xs">
                                    #TX-510
                                </div>
                            </div>
                            <div
                                class="flex items-center justify-center rounded-lg bg-surface-container font-label-md text-label-md text-primary font-bold aspect-square">
                                +45 More
                            </div>
                        </div>
                        <button
                            class="w-full py-2.5 rounded-lg bg-surface-container-low text-primary hover:bg-surface-container font-label-md text-label-md font-semibold transition-colors flex items-center justify-center"
                            type="button">
                            <span class="material-symbols-outlined text-base mr-1.5">add_circle</span>
                            Manage &amp; Assign Products
                        </button>
                    </div>
                    <!-- Danger Zone Card (Active in Edit Mode) -->
                    <div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm flex flex-col" id="danger-zone-card">
                        <div class="flex items-center space-x-2 text-error pb-3 mb-3 border-b border-error-container/30">
                            <span class="material-symbols-outlined text-xl">warning</span>
                            <h3 class="font-title-lg text-title-lg text-error">Danger Zone</h3>
                        </div>
                        <p class="font-body-md text-body-md text-on-surface-variant text-sm mb-4">
                            Deleting this category immediately uncouples <strong>48 associated products</strong>. You must
                            reassign existing SKUs to another active parent node prior to executing deletion.
                        </p>
                        <button
                            class="w-full py-2.5 rounded-lg bg-error-container text-on-error-container hover:bg-error hover:text-on-error font-label-md text-label-md font-semibold transition-colors flex items-center justify-center"
                            onclick="confirmDelete()" type="button">
                            <span class="material-symbols-outlined text-base mr-1.5">delete_forever</span>
                            Delete Category
                        </button>
                    </div>
                </div>
            </div>
            <!-- Toast Notification Simulator -->
            <div class="fixed bottom-6 right-6 z-50 transform translate-y-24 opacity-0 transition-all duration-300 bg-inverse-surface text-inverse-on-surface px-4 py-3 rounded-lg shadow-xl flex items-center space-x-3"
                id="status-toast">
                <span class="material-symbols-outlined text-tertiary-fixed-dim"
                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                <span class="font-body-md text-body-md text-sm" id="toast-message">Category taxonomy updated.</span>
            </div>
        </div>
    </div>
@section('scripts')
    <script>
        function setMode(mode) {
            const heading = document.getElementById('page-heading');
            const crumb = document.getElementById('crumb-state');
            const createBtn = document.getElementById('mode-create-btn');
            const editBtn = document.getElementById('mode-edit-btn');
            const dangerCard = document.getElementById('danger-zone-card');
            const nameInput = document.getElementById('cat-name');
            const slugInput = document.getElementById('cat-slug');

            if (mode === 'create') {
                heading.innerText = 'Create Category';
                crumb.innerText = 'Create New Category';
                createBtn.className =
                    'px-3 py-1 bg-surface-container-lowest text-primary font-label-md text-label-md rounded-full shadow-sm transition-all font-bold';
                editBtn.className =
                    'px-3 py-1 text-on-surface-variant font-label-md text-label-md rounded-full transition-all';
                dangerCard.classList.add('hidden');
                nameInput.value = '';
                slugInput.value = '';
                updateSlug('');
                showToast('Switched to Create Category mode');
            } else {
                heading.innerText = 'Edit Category';
                crumb.innerText = 'Edit Category';
                editBtn.className =
                    'px-3 py-1 bg-surface-container-lowest text-primary font-label-md text-label-md rounded-full shadow-sm transition-all font-bold';
                createBtn.className =
                    'px-3 py-1 text-on-surface-variant font-label-md text-label-md rounded-full transition-all';
                dangerCard.classList.remove('hidden');
                nameInput.value = 'Ergonomic Task Seating';
                slugInput.value = 'seating/ergonomic-task-seating';
                updateSlug('Ergonomic Task Seating');
                showToast('Switched to Edit Category mode');
            }
        }

        function updateSlug(name) {
            const slugValue = name
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9\s-]/g, '')
                .replace(/\s+/g, '-');
            const fullPath = slugValue ? `/catalog/seating/${slugValue}` : '/catalog/seating/';
            document.getElementById('slug-preview').innerText = fullPath;
            if (document.getElementById('cat-slug')) {
                document.getElementById('cat-slug').value = `seating/${slugValue}`;
            }
        }

        function updateStatusBadge(label, colorClasses) {
            const badge = document.getElementById('badge-status');
            badge.innerText = label;
            badge.className = `px-2.5 py-0.5 rounded-full font-label-md text-label-md font-bold ${colorClasses}`;
            showToast(`Status updated to ${label}`);
        }

        function confirmDelete() {
            if (confirm(
                    'Are you sure you wish to delete "Ergonomic Task Seating"? Existing active quotes might be affected.'
                    )) {
                showToast('Category successfully flagged for deletion review.');
            }
        }

        function showToast(msg) {
            const toast = document.getElementById('status-toast');
            const text = document.getElementById('toast-message');
            text.innerText = msg;
            toast.classList.remove('translate-y-24', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');
            setTimeout(() => {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-24', 'opacity-0');
            }, 2800);
        }
    </script>
@endsection
