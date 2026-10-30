@extends('admin.layouts.app')

@section('title', 'Create New Category')

@section('content')
    <div class="flex-1 overflow-y-auto p-margin-mobile md:p-margin-desktop">
        <!-- Breadcrumb Navigation Bar -->
        <nav aria-label="Breadcrumb"
            class="flex items-center space-x-2 text-on-surface-variant font-label-md text-label-md uppercase tracking-wider mb-stack-md">
            <a class="hover:text-primary transition-colors flex items-center gap-1" href="#">
                <span class="material-symbols-outlined text-sm">home</span>
                Dashboard
            </a>
            <span class="text-outline">/</span>
            <a class="hover:text-primary transition-colors" href="#">Categories</a>
            <span class="text-outline">/</span>
            <span class="text-primary font-bold">New Category</span>
        </nav>
        <!-- Page Header With Metadata Metric Pill -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-base mb-stack-lg">
            <div class="max-w-3xl">
                <div class="flex items-center gap-base mb-1">
                    <span
                        class="px-2.5 py-1 rounded bg-surface-container-high text-primary font-label-md text-label-md uppercase tracking-wider">
                        Taxonomy Node #0482
                    </span>
                    <span class="text-outline-variant">•</span>
                    <span class="text-on-surface-variant font-body-md text-body-md">Commercial Furniture Suite</span>
                </div>
                <h1 class="font-headline-lg text-headline-lg text-primary tracking-tight">Create Category</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant mt-1">
                    Define taxonomy details, visual merchandising banners, descriptions, and storefront visibility for a new
                    catalog department.
                </p>
            </div>
            <!-- Live Preview Pill Badge -->
            <div
                class="flex items-center gap-base self-start md:self-auto bg-surface-container-low px-4 py-2 rounded-xl shadow-sm">
                <div class="w-2.5 h-2.5 rounded-full bg-secondary animate-pulse"></div>
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Status: New
                    Entity (Uncommitted)</span>
            </div>
        </div>
        <!-- Form Layout: Main Editorial Stream (8 cols) + Governance Dock (4 cols) -->
        <form class="grid grid-cols-1 lg:grid-cols-12 gap-gutter items-start" id="categoryForm"
            onsubmit="event.preventDefault();">
            <!-- LEFT & CENTER: Primary Taxonomy & Creative Attributes (8 Columns) -->
            <div class="lg:col-span-8 flex flex-col space-y-stack-lg">
                <!-- SECTION 1: Taxonomy & Core Hierarchy -->
                <section class="bg-surface-container-lowest p-stack-lg rounded-xl shadow-sm flex flex-col space-y-stack-md">
                    <div class="flex items-center justify-between pb-stack-sm">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary p-2 bg-surface-container rounded-lg"
                                style="font-variation-settings: 'FILL' 1;">account_tree</span>
                            <div>
                                <h2 class="font-title-lg text-title-lg text-primary">Category Taxonomy &amp; Identity</h2>
                                <p class="font-body-md text-body-md text-on-surface-variant">Configure naming hierarchy,
                                    public URL routing, and spatial sort indexing.</p>
                            </div>
                        </div>
                        <span class="text-label-md font-label-md text-outline font-mono">01 // IDENTITY</span>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md pt-2">
                        <!-- Category Name -->
                        <div class="md:col-span-2 flex flex-col">
                            <label
                                class="font-label-md text-label-md text-on-surface mb-1 flex items-center justify-between"
                                for="categoryName">
                                <span>Category Title <span class="text-error">*</span></span>
                                <span class="text-outline font-normal text-xs tracking-normal">Mandatory for SEO
                                    mapping</span>
                            </label>
                            <input
                                class="w-full px-4 py-3 bg-surface-container-low text-on-surface rounded font-body-md text-body-md focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary focus:outline-none transition-all placeholder:text-outline"
                                id="categoryName" name="categoryName" oninput="updateSlug(this.value)"
                                placeholder="e.g. Executive &amp; Ergonomic Seating" required="" type="text" />
                        </div>
                        <!-- Canonical URL Slug Preview with Interactive Copy -->
                        <div class="md:col-span-2 flex flex-col">
                            <label class="font-label-md text-label-md text-on-surface mb-1" for="slugPreview">
                                Canonical URL Slug
                            </label>
                            <div class="flex items-center rounded bg-surface-container-low px-4 py-2.5">
                                <span
                                    class="text-outline font-mono text-body-md select-none shrink-0">{{$_SERVER['HTTP_HOST']}}/categories/</span>
                                <input
                                    class="w-full bg-transparent font-mono text-body-md text-primary font-semibold focus:outline-none pl-1"
                                    id="slugPreview" type="text" value="executive-ergonomic-seating" />
                                <button class="ml-2 text-outline hover:text-primary transition-colors flex items-center"
                                    title="Regenerate slug" type="button">
                                    <span class="material-symbols-outlined text-lg">sync</span>
                                </button>
                            </div>
                            <p class="font-body-md text-body-md text-outline-variant text-xs mt-1">Direct URI path for
                                architectural client specification portals.</p>
                        </div>
                        <!-- Parent Category Dropdown -->
                        <div class="flex flex-col">
                            <label class="font-label-md text-label-md text-on-surface mb-1" for="parentCategory">
                                Parent Hierarchy Tier
                            </label>
                            <div class="relative">
                                <select
                                    class="w-full appearance-none px-4 py-3 bg-surface-container-low text-on-surface rounded font-body-md text-body-md focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary focus:outline-none pr-10 cursor-pointer"
                                    id="parentCategory" name="parentCategory">
                                    <option value="none">None (Top Level Root)</option>
                                    <option selected="" value="office-seating">Office Seating (Tier 1 Department)
                                    </option>
                                    <option value="desks">Desks &amp; Executive Workstations</option>
                                    <option value="storage">Modular Architectural Storage Systems</option>
                                    <option value="acoustic">Acoustic Partitioning &amp; Pods</option>
                                    <option value="lounge">Collaborative &amp; Reception Lounges</option>
                                </select>
                                <span
                                    class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-outline">
                                    unfold_more
                                </span>
                            </div>
                        </div>
                        <!-- Sort Priority / Weight -->
                        <div class="flex flex-col">
                            <label class="font-label-md text-label-md text-on-surface mb-1 flex justify-between"
                                for="sortWeight">
                                <span>Display Priority / Sort Weight</span>
                                <span class="text-outline font-normal text-xs tracking-normal">Range: 0 - 999</span>
                            </label>
                            <div class="relative">
                                <input
                                    class="w-full px-4 py-3 bg-surface-container-low text-on-surface rounded font-body-md text-body-md focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary focus:outline-none"
                                    id="sortWeight" max="999" min="0" name="sortWeight" type="number"
                                    value="10" />
                                <span
                                    class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline text-lg pointer-events-none">
                                    low_priority
                                </span>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- SECTION 2: Visual Merchandising Assets & Media -->
                <section class="bg-surface-container-lowest p-stack-lg rounded-xl shadow-sm flex flex-col space-y-stack-md">
                    <div class="flex items-center justify-between pb-stack-sm">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary p-2 bg-surface-container rounded-lg"
                                style="font-variation-settings: 'FILL' 1;">photo_library</span>
                            <div>
                                <h2 class="font-title-lg text-title-lg text-primary">Visual Merchandising &amp; Showroom
                                    Assets</h2>
                                <p class="font-body-md text-body-md text-on-surface-variant">Editorial media used in
                                    customer quotation sheets, PDFs, and client showrooms.</p>
                            </div>
                        </div>
                        <span class="text-label-md font-label-md text-outline font-mono">02 // ASSETS</span>
                    </div>
                    <!-- Hero Banner Dropzone -->
                    <div class="flex flex-col space-y-1">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-on-surface">Storefront Hero Banner (16:9)</span>
                            <span
                                class="px-2 py-0.5 rounded bg-surface-container text-on-primary-fixed-variant font-label-md text-label-md">
                                1920 × 840 px • WebP / PNG • Max 15MB
                            </span>
                        </div>
                        <div
                            class="relative group p-6 rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer flex flex-col items-center justify-center text-center">
                            <div
                                class="w-14 h-14 rounded-full bg-surface-container-lowest flex items-center justify-center text-primary group-hover:scale-105 transition-transform mb-3 shadow-sm">
                                <span class="material-symbols-outlined text-2xl">add_photo_alternate</span>
                            </div>
                            <p class="font-title-lg text-title-lg text-on-surface font-medium">
                                Drop high-resolution banner image here or <span
                                    class="text-primary underline underline-offset-4 decoration-primary/40 font-semibold">Browse
                                    files</span>
                            </p>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-1 max-w-md">
                                High-fidelity editorial photography with soft natural ambient lighting and minimal corporate
                                architectural context.
                            </p>
                            <input accept="image/png, image/webp, image/jpeg"
                                class="absolute inset-0 opacity-0 cursor-pointer" type="file" />
                        </div>
                        <!-- Existing Banner Mock Preview Strip -->
                        <div
                            class="mt-3 relative rounded-lg overflow-hidden h-36 bg-surface-container flex items-center justify-between px-6 shadow-sm">
                            <img class="absolute inset-0 w-full h-full object-cover mix-blend-multiply opacity-75"
                                data-alt="Modern ultra-premium corporate boardroom furniture showcase featuring sculpted ergonomic leather chairs aligned along an expansive solid walnut conference table bathed in warm diffused architectural morning sunlight."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3ilJcTJseZK6DKRd3KN6hAopHuTAKqiCQPjrgToIqSrwM0VoUi54b9tBnseVJ7U4KRGwatzkBgyjiy0LoGe9YWjyH4801ZnfUUWCCTV6nbQ0Yv4UyO-BX3AvnHH51ZFMzje_t6mbBoCpk6E3c-TtzYfcMF_r7ngXR-qtxv93N_pCr5P-_RMMGhpFVN3HtYBt1jA2G1QpzxPC6_vfyb7JjfMItyiZanljLPQj_m_0Q" />
                            <div
                                class="relative z-10 text-on-surface bg-surface-container-lowest/80 backdrop-blur-md px-3.5 py-1.5 rounded-lg flex items-center gap-2">
                                <span class="material-symbols-outlined text-tertiary-container text-lg"
                                    style="font-variation-settings: 'FILL' 1;">check_circle</span>
                                <span class="font-label-md text-label-md">Current Recommended Hero Preset Ready</span>
                            </div>
                            <button
                                class="relative z-10 px-3 py-1.5 bg-surface-container-lowest text-error hover:bg-error-container hover:text-on-error-container rounded font-label-md text-label-md transition-colors flex items-center gap-1 shadow-sm"
                                type="button">
                                <span class="material-symbols-outlined text-sm">delete</span>
                                Replace Media
                            </button>
                        </div>
                    </div>
                    <!-- Secondary Grid Thumbnail -->
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-stack-md pt-2 items-center">
                        <div
                            class="md:col-span-4 h-36 rounded-lg overflow-hidden relative bg-surface-container flex items-center justify-center group shadow-sm">
                            <img class="w-full h-full object-cover"
                                data-alt="Minimalist single studio portrait of an executive leather task chair with brushed aluminum base and lumbar contours against a soft warm stone studio backdrop."
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjG7rcItOqBI3R0Q_I-1LtyzMI1FIAhgf1BzqhVkoyW9OoSmpXaA25G5n-dWgvt9ok8k9wzHQp7SEeSTNKmLjcc3bz9bSaxR5QMEBVF-fGWjFx7pqoRcgMTRvOWNSMG5Uq3zSi0e7Nl4kDjzLjpqXjNmFOFdkJXiC3IY0vekGsDEZVvWVVLYmUPfS1L7JfVq0O45bsn86z4yptbBSagVTy00AZq81Tz_ahW1hfBkVE" />
                            <div
                                class="absolute inset-0 bg-primary/20 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                                <span
                                    class="px-2.5 py-1 rounded bg-surface-container-lowest text-primary font-label-md text-label-md">Change
                                    Photo</span>
                            </div>
                        </div>
                        <div class="md:col-span-8 flex flex-col justify-center">
                            <span class="font-label-md text-label-md text-on-surface mb-1">Catalog Grid Thumbnail Tile (1:1
                                Ratio)</span>
                            <p class="font-body-md text-body-md text-on-surface-variant mb-3">
                                Standardized white or neutral stone backdrop for multi-item comparison grids in B2B proposal
                                decks (800 × 800 px).
                            </p>
                            <div class="flex items-center gap-3">
                                <button
                                    class="px-3.5 py-2 rounded bg-surface-container hover:bg-surface-container-high text-primary font-label-md text-label-md flex items-center gap-1.5 transition-colors"
                                    type="button">
                                    <span class="material-symbols-outlined text-sm">cloud_upload</span>
                                    Upload 1:1 Asset
                                </button>
                                <button
                                    class="px-3.5 py-2 rounded bg-surface-container-low hover:bg-surface-container text-on-surface-variant font-label-md text-label-md transition-colors"
                                    type="button">
                                    Select from Brand Vault
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- SECTION 3: Merchandising Description & Rich Copy -->
                <section
                    class="bg-surface-container-lowest p-stack-lg rounded-xl shadow-sm flex flex-col space-y-stack-md">
                    <div class="flex items-center justify-between pb-stack-sm">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary p-2 bg-surface-container rounded-lg"
                                style="font-variation-settings: 'FILL' 1;">edit_note</span>
                            <div>
                                <h2 class="font-title-lg text-title-lg text-primary">Merchandising Description &amp;
                                    Taxonomy Chips</h2>
                                <p class="font-body-md text-body-md text-on-surface-variant">Articulate ergonomic
                                    certifications, materials, and department subdivisions.</p>
                            </div>
                        </div>
                        <span class="text-label-md font-label-md text-outline font-mono">03 // COPY &amp; TAGS</span>
                    </div>
                    <!-- Merchandising Copy Field -->
                    <div class="flex flex-col">
                        <div class="flex items-center justify-between mb-1.5">
                            <label class="font-label-md text-label-md text-on-surface" for="merchandisingDesc">
                                Curated Commercial Description
                            </label>
                            <div class="flex items-center gap-1 text-outline">
                                <button class="p-1 hover:text-primary transition-colors" title="Bold"
                                    type="button"><span
                                        class="material-symbols-outlined text-base">format_bold</span></button>
                                <button class="p-1 hover:text-primary transition-colors" title="Italic"
                                    type="button"><span
                                        class="material-symbols-outlined text-base">format_italic</span></button>
                                <button class="p-1 hover:text-primary transition-colors" title="Bulleted list"
                                    type="button"><span
                                        class="material-symbols-outlined text-base">format_list_bulleted</span></button>
                                <button class="p-1 hover:text-primary transition-colors" title="Hyperlink"
                                    type="button"><span class="material-symbols-outlined text-base">link</span></button>
                            </div>
                        </div>
                        <textarea
                            class="w-full px-4 py-3 bg-surface-container-low text-on-surface rounded font-body-md text-body-md focus:bg-surface-container-lowest focus:ring-2 focus:ring-primary focus:outline-none transition-all placeholder:text-outline leading-relaxed"
                            id="merchandisingDesc" name="merchandisingDesc"
                            placeholder="Enter rich commercial merchandising description, key ergonomic highlights, and target workplace applications..."
                            rows="5">Precision-engineered seating systems crafted for executive suites and agile commercial workspaces. Featuring continuous sync-tilt geometry, BIFMA Level 3 environmental standards, and tactile aniline leather tailoring.</textarea>
                        <div class="flex justify-between items-center text-xs text-outline mt-1 px-1">
                            <span>Markdown formatting supported</span>
                            <span>224 / 2,000 characters</span>
                        </div>
                    </div>
                    <!-- Subcategory Tag Chips -->
                    <div class="flex flex-col pt-2">
                        <label class="font-label-md text-label-md text-on-surface mb-1">
                            Departmental Subcategories &amp; Facet Tags
                        </label>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-2.5">
                            Active filters instantly available inside the Quotation Builder for specifiers:
                        </p>
                        <div class="flex flex-wrap items-center gap-2 p-3 bg-surface-container-low rounded-lg"
                            id="chipsContainer">
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-surface-container-lowest text-primary rounded-full text-xs font-semibold shadow-sm">
                                <span>Task Chairs</span>
                                <button class="hover:text-error transition-colors flex items-center"
                                    onclick="this.parentElement.remove()" type="button">
                                    <span class="material-symbols-outlined text-sm">close</span>
                                </button>
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-surface-container-lowest text-primary rounded-full text-xs font-semibold shadow-sm">
                                <span>Executive Leather</span>
                                <button class="hover:text-error transition-colors flex items-center"
                                    onclick="this.parentElement.remove()" type="button">
                                    <span class="material-symbols-outlined text-sm">close</span>
                                </button>
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-surface-container-lowest text-primary rounded-full text-xs font-semibold shadow-sm">
                                <span>Conference Seating</span>
                                <button class="hover:text-error transition-colors flex items-center"
                                    onclick="this.parentElement.remove()" type="button">
                                    <span class="material-symbols-outlined text-sm">close</span>
                                </button>
                            </span>
                            <span
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-surface-container-lowest text-primary rounded-full text-xs font-semibold shadow-sm">
                                <span>BIFMA Certified</span>
                                <button class="hover:text-error transition-colors flex items-center"
                                    onclick="this.parentElement.remove()" type="button">
                                    <span class="material-symbols-outlined text-sm">close</span>
                                </button>
                            </span>
                            <div class="inline-flex items-center gap-1">
                                <input
                                    class="bg-transparent text-xs font-medium text-on-surface focus:outline-none px-2 py-1 placeholder:text-outline w-44"
                                    id="newTagInput" onkeydown="handleTagKeydown(event)"
                                    placeholder="+ Add subcategory tag..." type="text" />
                                <button
                                    class="text-xs bg-surface-container-high text-primary px-2.5 py-1 rounded hover:bg-primary hover:text-on-primary transition-colors"
                                    onclick="addTagFromInput()" type="button">
                                    Add
                                </button>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- RIGHT: Publishing Governance & Multi-Channel Access Controls (4 Columns) -->
            <div class="lg:col-span-4 flex flex-col space-y-stack-lg">
                <!-- Governance Status Card -->
                <section
                    class="bg-surface-container-lowest p-stack-lg rounded-xl shadow-sm flex flex-col space-y-stack-md">
                    <div class="flex items-center justify-between pb-stack-sm">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-xl">verified</span>
                            <h2 class="font-title-lg text-title-lg text-primary">Publishing Status</h2>
                        </div>
                        <span class="text-label-md font-label-md text-outline font-mono">STEP 01</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Controls global lifecycle and procurement indexing across European and North American channels.
                    </p>
                    <!-- Radio Options -->
                    <div class="flex flex-col space-y-2 pt-1">
                        <!-- Draft (Default) -->
                        <label
                            class="flex items-start p-3 rounded-lg bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                            <input checked="" class="mt-1 text-primary focus:ring-primary h-4 w-4"
                                name="publishStatus" type="radio" value="draft" />
                            <div class="ml-3 flex flex-col">
                                <div class="flex items-center gap-2">
                                    <span class="font-label-md text-label-md text-on-surface">Draft</span>
                                    <span
                                        class="px-2 py-0.2 rounded-full bg-surface-container-high text-outline text-xs font-bold">Default</span>
                                </div>
                                <span class="font-body-md text-body-md text-on-surface-variant text-xs">
                                    Visible strictly to product managers &amp; administrators. Not included in client decks.
                                </span>
                            </div>
                        </label>
                        <!-- Active / Published -->
                        <label
                            class="flex items-start p-3 rounded-lg bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                            <input class="mt-1 text-primary focus:ring-primary h-4 w-4" name="publishStatus"
                                type="radio" value="active" />
                            <div class="ml-3 flex flex-col">
                                <div class="flex items-center gap-2">
                                    <span class="font-label-md text-label-md text-on-surface">Active / Published</span>
                                    <span
                                        class="px-2 py-0.2 rounded-full bg-secondary-container text-on-secondary-container text-xs font-bold">Live</span>
                                </div>
                                <span class="font-body-md text-body-md text-on-surface-variant text-xs">
                                    Broadband deployment across all enabled commercial portals and dynamic price books.
                                </span>
                            </div>
                        </label>
                        <!-- Archived / Hidden -->
                        <label
                            class="flex items-start p-3 rounded-lg bg-surface-container-low hover:bg-surface-container cursor-pointer transition-colors">
                            <input class="mt-1 text-primary focus:ring-primary h-4 w-4" name="publishStatus"
                                type="radio" value="archived" />
                            <div class="ml-3 flex flex-col">
                                <div class="flex items-center gap-2">
                                    <span class="font-label-md text-label-md text-on-surface">Archived / Hidden</span>
                                    <span
                                        class="px-2 py-0.2 rounded-full bg-surface-dim text-on-surface-variant text-xs font-bold">Inactive</span>
                                </div>
                                <span class="font-body-md text-body-md text-on-surface-variant text-xs">
                                    De-indexed from storefront navigation. Historic quotations retain archival reference.
                                </span>
                            </div>
                        </label>
                    </div>
                </section>
                <!-- Channel & Client Access Toggles -->
                <section
                    class="bg-surface-container-lowest p-stack-lg rounded-xl shadow-sm flex flex-col space-y-stack-md">
                    <div class="flex items-center justify-between pb-stack-sm">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-xl">hub</span>
                            <h2 class="font-title-lg text-title-lg text-primary">Channel &amp; Client Access</h2>
                        </div>
                        <span class="text-label-md font-label-md text-outline font-mono">STEP 02</span>
                    </div>
                    <div class="divide-y divide-surface-container flex flex-col">
                        <!-- Toggle 1: Public Commercial Catalog -->
                        <div class="py-3 flex items-center justify-between">
                            <div class="flex flex-col pr-4">
                                <span class="font-label-md text-label-md text-on-surface">Public Commercial Catalog</span>
                                <span class="font-body-md text-body-md text-on-surface-variant text-xs">Public
                                    unauthenticated showcase &amp; specs</span>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input checked="" class="sr-only peer" type="checkbox" />
                                <div
                                    class="w-11 h-6 bg-surface-container-high peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-container">
                                </div>
                            </label>
                        </div>
                        <!-- Toggle 2: Contract B2B Portal -->
                        <div class="py-3 flex items-center justify-between">
                            <div class="flex flex-col pr-4">
                                <span class="font-label-md text-label-md text-on-surface">Contract B2B Portal</span>
                                <span class="font-body-md text-body-md text-on-surface-variant text-xs">Enables
                                    tier-discount corporate logins</span>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input checked="" class="sr-only peer" type="checkbox" />
                                <div
                                    class="w-11 h-6 bg-surface-container-high peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-container">
                                </div>
                            </label>
                        </div>
                        <!-- Toggle 3: Quotation Builder inclusion -->
                        <div class="py-3 flex items-center justify-between">
                            <div class="flex flex-col pr-4">
                                <span class="font-label-md text-label-md text-on-surface">Quotation Builder
                                    Integration</span>
                                <span class="font-body-md text-body-md text-on-surface-variant text-xs">Direct component
                                    picking for sales reps</span>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input checked="" class="sr-only peer" type="checkbox" />
                                <div
                                    class="w-11 h-6 bg-surface-container-high peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary-container">
                                </div>
                            </label>
                        </div>
                    </div>
                </section>
                <!-- Department Performance Snapshot (Visual Widget) -->
                <section class="bg-surface-container-low p-stack-lg rounded-xl shadow-sm flex flex-col space-y-stack-sm">
                    <div class="flex items-center justify-between">
                        <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Taxonomy
                            Health Metric</span>
                        <span class="material-symbols-outlined text-primary text-base">insights</span>
                    </div>
                    <p class="font-headline-md text-headline-md font-bold text-primary">94<span
                            class="text-sm font-normal text-on-surface-variant">/100</span></p>
                    <p class="font-body-md text-body-md text-on-surface-variant text-xs">
                        High completeness score. Hero imagery, canonical pathing, and metadata are ready for indexing.
                    </p>
                    <!-- Inline Vector Representation of Category Tree Balance -->
                    <div class="w-full bg-surface-container-lowest h-2 rounded-full overflow-hidden mt-2">
                        <div class="bg-primary-container h-full rounded-full" style="width: 94%;"></div>
                    </div>
                </section>
            </div>
            <!-- ACTION FOOTER: Sticky Governance Controls (12 Columns) -->
            <div
                class="lg:col-span-12 sticky bottom-0 bg-surface-container-lowest/90 backdrop-blur-md p-stack-md rounded-xl shadow-md flex flex-col sm:flex-row items-center justify-between gap-base mt-stack-lg z-20">
                <div class="flex items-center gap-2 text-on-surface-variant font-body-md text-body-md">
                    <span class="material-symbols-outlined text-outline text-lg">history_toggle_off</span>
                    <span>Auto-saved to local memory 2 minutes ago</span>
                </div>
                <div class="flex items-center gap-base w-full sm:w-auto justify-end">
                    <!-- Discard Button -->
                    <button
                        class="px-5 py-2.5 rounded bg-surface-container-low hover:bg-surface-container text-on-surface-variant font-label-md text-label-md transition-colors"
                        onclick="discardChanges()" type="button">
                        Discard
                    </button>
                    <!-- Save as Draft Button -->
                    <button
                        class="px-5 py-2.5 rounded bg-surface-container hover:bg-surface-container-high text-primary font-label-md text-label-md transition-colors"
                        onclick="saveDraftNotification()" type="button">
                        Save as Draft
                    </button>
                    <!-- Primary Submit Button -->
                    <button
                        class="px-6 py-2.5 rounded bg-primary-container hover:bg-primary text-on-primary font-label-md text-label-md transition-colors flex items-center justify-center gap-2 shadow-sm"
                        onclick="publishCategory()" type="submit">
                        <span class="material-symbols-outlined text-sm">cloud_done</span>
                        <span>Create &amp; Publish Category</span>
                    </button>
                </div>
            </div>
        </form>
        <!-- Interactive Feedback Toast (DOM Injected upon actions) -->
        <div class="fixed bottom-6 right-6 bg-primary text-on-primary px-5 py-3 rounded-lg shadow-xl flex items-center gap-3 transform translate-y-24 opacity-0 transition-all duration-300 z-50"
            id="toastNotification">
            <span class="material-symbols-outlined text-tertiary-fixed" id="toastIcon">check_circle</span>
            <span class="font-body-md text-body-md" id="toastMessage">Category draft committed successfully.</span>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function updateSlug(val) {
            const slug = val
                .toLowerCase()
                .trim()
                .replace(/[^\w\s-]/g, '')
                .replace(/[\s_-]+/g, '-')
                .replace(/^-+|-+$/g, '');
            document.getElementById('slugPreview').value = slug || 'new-category';
        }

        function handleTagKeydown(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                addTagFromInput();
            }
        }

        function addTagFromInput() {
            const input = document.getElementById('newTagInput');
            const val = input.value.trim();
            if (!val) return;

            const container = document.getElementById('chipsContainer');
            const tagElem = document.createElement('span');
            tagElem.className =
                "inline-flex items-center gap-1.5 px-3 py-1.5 bg-surface-container-lowest text-primary rounded-full text-xs font-semibold shadow-sm";
            tagElem.innerHTML = `
      <span>${val}</span>
      <button type="button" class="hover:text-error transition-colors flex items-center" onclick="this.parentElement.remove()">
        <span class="material-symbols-outlined text-sm">close</span>
      </button>
    `;
            container.insertBefore(tagElem, input.parentElement);
            input.value = '';
        }

        function showToast(message, icon = 'check_circle') {
            const toast = document.getElementById('toastNotification');
            const msgElem = document.getElementById('toastMessage');
            const iconElem = document.getElementById('toastIcon');
            msgElem.textContent = message;
            iconElem.textContent = icon;
            toast.classList.remove('translate-y-24', 'opacity-0');
            toast.classList.add('translate-y-0', 'opacity-100');
            setTimeout(() => {
                toast.classList.remove('translate-y-0', 'opacity-100');
                toast.classList.add('translate-y-24', 'opacity-0');
            }, 3200);
        }

        function saveDraftNotification() {
            showToast('Saved category draft to catalog database.', 'save');
        }

        function publishCategory() {
            const nameInput = document.getElementById('categoryName').value.trim();
            if (!nameInput) {
                document.getElementById('categoryName').focus();
                showToast('Please provide a Category Name before publishing.', 'warning');
                return;
            }
            showToast(`"${nameInput}" successfully created & published!`, 'cloud_done');
        }

        function discardChanges() {
            if (confirm('Discard changes for this new category? All uncommitted taxonomy fields will reset.')) {
                document.getElementById('categoryForm').reset();
                showToast('Form fields reset to showroom defaults.', 'refresh');
            }
        }
    </script>
@endsection
