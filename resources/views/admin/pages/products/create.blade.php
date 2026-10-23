<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>OfficeLux - Product Catalog - Add Product</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface": "#f9f9ff",
                        "primary-container": "#1e3a8a",
                        "on-background": "#121c2a",
                        "surface-container-highest": "#d9e3f7",
                        "on-secondary-fixed": "#281801",
                        "primary-fixed-dim": "#b6c4ff",
                        "inverse-on-surface": "#ebf1ff",
                        "on-primary": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "primary-fixed": "#dce1ff",
                        "secondary-container": "#fbdbb0",
                        "surface-dim": "#d0daef",
                        "secondary-fixed": "#feddb3",
                        "on-primary-fixed-variant": "#264191",
                        "secondary-fixed-dim": "#e1c299",
                        "secondary": "#725a39",
                        "tertiary-container": "#004a31",
                        "on-surface": "#121c2a",
                        "error": "#ba1a1a",
                        "primary": "#00236f",
                        "on-surface-variant": "#444651",
                        "on-primary-container": "#90a8ff",
                        "surface-tint": "#4059aa",
                        "on-secondary": "#ffffff",
                        "on-tertiary-container": "#27c38a",
                        "inverse-primary": "#b6c4ff",
                        "on-secondary-fixed-variant": "#584324",
                        "on-error-container": "#93000a",
                        "on-tertiary-fixed": "#002113",
                        "surface-bright": "#f9f9ff",
                        "tertiary-fixed-dim": "#4edea3",
                        "inverse-surface": "#273140",
                        "surface-container": "#e6eeff",
                        "outline-variant": "#c5c5d3",
                        "on-secondary-container": "#765f3d",
                        "on-primary-fixed": "#00164e",
                        "error-container": "#ffdad6",
                        "outline": "#757682",
                        "on-tertiary-fixed-variant": "#005236",
                        "surface-container-low": "#eff3ff",
                        "surface-variant": "#d9e3f7",
                        "surface-container-lowest": "#ffffff",
                        "tertiary": "#00311f",
                        "on-error": "#ffffff",
                        "tertiary-fixed": "#6ffbbe",
                        "surface-container-high": "#dee9fd",
                        "background": "#f9f9ff"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "margin-mobile": "16px",
                        "base": "8px",
                        "gutter": "24px",
                        "stack-md": "12px",
                        "stack-lg": "24px",
                        "container-max": "1440px",
                        "margin-desktop": "40px",
                        "stack-sm": "4px"
                    },
                    "fontFamily": {
                        "title-lg": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-lg": ["Inter"],
                        "display-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg-mobile": ["Inter"],
                        "label-md": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "title-lg": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "500"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "display-lg": ["48px", {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "headline-lg-mobile": ["28px", {
                            "lineHeight": "36px",
                            "fontWeight": "600"
                        }],
                        "label-md": ["12px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "600"
                        }],
                        "body-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #FAF9F6;
        }

        .ambient-shadow {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
        }

        .input-focus-glow:focus {
            border-color: #00236f;
            box-shadow: 0 0 0 2px rgba(0, 35, 111, 0.2);
            outline: none;
        }
    </style>
</head>

<body class="flex h-screen overflow-hidden text-on-surface">
    <!-- SideNavBar -->
    <aside
        class="bg-surface-container-lowest h-screen w-64 flex-shrink-0 border-r border-outline-variant flex flex-col h-full py-base hidden md:flex">
        <div class="px-gutter pb-stack-lg pt-base">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">OfficeLux</h1>
            <p class="font-label-md text-label-md text-on-surface-variant uppercase mt-1">Premium Management</p>
        </div>
        <nav class="flex-1 px-base space-y-stack-sm">
            <a class="flex items-center px-4 py-3 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors duration-200 font-body-md text-body-md"
                href="#">
                <span class="material-symbols-outlined mr-3">dashboard</span>
                Dashboard
            </a>
            <a class="flex items-center px-4 py-3 rounded text-primary font-bold border-r-2 border-primary bg-surface-container font-body-md text-body-md"
                href="#">
                <span class="material-symbols-outlined mr-3" style="font-variation-settings: 'FILL' 1;">chair</span>
                Product Catalog
            </a>
            <a class="flex items-center px-4 py-3 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors duration-200 font-body-md text-body-md"
                href="#">
                <span class="material-symbols-outlined mr-3">description</span>
                Quotation Builder
            </a>
            <a class="flex items-center px-4 py-3 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors duration-200 font-body-md text-body-md"
                href="#">
                <span class="material-symbols-outlined mr-3">group</span>
                Customer Management
            </a>
            <a class="flex items-center px-4 py-3 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors duration-200 font-body-md text-body-md"
                href="#">
                <span class="material-symbols-outlined mr-3">inventory_2</span>
                Inventory
            </a>
        </nav>
        <div class="px-gutter py-stack-lg">
            <button
                class="w-full bg-primary-container text-on-primary py-3 rounded font-label-md text-label-md hover:bg-primary transition-colors flex items-center justify-center">
                <span class="material-symbols-outlined mr-2 text-sm">add</span> New Quote
            </button>
        </div>
        <div class="px-base border-t border-outline-variant pt-stack-md mt-auto">
            <a class="flex items-center px-4 py-3 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors duration-200 font-body-md text-body-md"
                href="#">
                <span class="material-symbols-outlined mr-3">settings</span>
                Settings
            </a>
            <a class="flex items-center px-4 py-3 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors duration-200 font-body-md text-body-md"
                href="#">
                <span class="material-symbols-outlined mr-3">help</span>
                Support
            </a>
        </div>
    </aside>
    <!-- Main Content Area -->
    <div class="flex-1 flex flex-col h-screen overflow-hidden bg-[#FAF9F6]">
        <!-- TopAppBar -->
        <header
            class="bg-surface h-16 w-full border-b border-outline-variant shadow-sm flex justify-between items-center px-margin-desktop w-full md:px-margin-desktop px-margin-mobile flex-shrink-0">
            <div class="flex items-center">
                <!-- Mobile Menu Button -->
                <button class="md:hidden mr-4 text-on-surface-variant">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <div class="relative w-64 md:w-96">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 transform -translate-y-1/2 text-outline">search</span>
                    <input
                        class="w-full pl-10 pr-4 py-2 border border-outline-variant rounded bg-surface-container-lowest text-body-md font-body-md input-focus-glow"
                        placeholder="Search..." type="text" />
                </div>
            </div>
            <div class="flex items-center space-x-gutter">
                <button class="text-on-surface-variant hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                <button class="text-on-surface-variant hover:text-primary transition-colors">
                    <span class="material-symbols-outlined">account_circle</span>
                </button>
            </div>
        </header>
        <!-- Scrollable Canvas -->
        <main class="flex-1 overflow-y-auto p-margin-mobile md:p-margin-desktop">
            <div class="max-w-container-max mx-auto w-full">
                <!-- Page Header -->
                <div class="mb-stack-lg flex flex-col md:flex-row md:items-center md:justify-between gap-stack-md">
                    <div>
                        <nav class="flex text-sm text-on-surface-variant mb-2 font-body-md">
                            <a class="hover:text-primary" href="#">Product Catalog</a>
                            <span class="mx-2">/</span>
                            <span class="text-primary font-medium">Add New Product</span>
                        </nav>
                        <h2 class="font-headline-lg text-headline-lg text-on-surface">Add New Product</h2>
                    </div>
                    <div class="flex items-center gap-stack-md">
                        <button
                            class="px-6 py-2 border border-outline-variant text-on-surface-variant rounded hover:bg-surface-container-low transition-colors font-label-md text-label-md">Cancel</button>
                        <button
                            class="px-6 py-2 border border-primary text-primary rounded hover:bg-surface-container-low transition-colors font-label-md text-label-md">Save
                            &amp; Add Another</button>
                        <button
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
                                    <input
                                        class="w-full p-3 border border-outline-variant rounded text-body-lg font-body-lg input-focus-glow"
                                        type="text" value="Executive Mahogany Desk" />
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                                    <div>
                                        <label
                                            class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">SKU
                                            / Product Code</label>
                                        <input
                                            class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                            type="text" value="EMD-784-WAL" />
                                    </div>
                                    <div>
                                        <label
                                            class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Category</label>
                                        <select
                                            class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow appearance-none bg-white">
                                            <option>Desks &amp; Workstations</option>
                                            <option>Seating</option>
                                            <option>Storage</option>
                                            <option>Conference</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                                    <div>
                                        <label
                                            class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Retail
                                            Price ($)</label>
                                        <input
                                            class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                            type="number" value="2499.00" />
                                    </div>
                                    <div>
                                        <label
                                            class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Internal
                                            Cost ($)</label>
                                        <input
                                            class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow text-outline"
                                            type="number" value="1200.00" />
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
                                        <div
                                            class="bg-surface-container-low border-b border-outline-variant p-2 flex gap-2">
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
                                        <textarea class="w-full p-3 border-none resize-y text-body-md font-body-md outline-none" rows="4">A premium executive desk crafted from solid mahogany with a rich walnut finish. Features integrated cable management and dual locking drawers. Designed for spacious modern office environments demanding authoritative presence.</textarea>
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-stack-md">
                                    <div>
                                        <label
                                            class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Width
                                            (in)</label>
                                        <input
                                            class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                            type="number" value="72" />
                                    </div>
                                    <div>
                                        <label
                                            class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Height
                                            (in)</label>
                                        <input
                                            class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                            type="number" value="30" />
                                    </div>
                                    <div>
                                        <label
                                            class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Depth
                                            (in)</label>
                                        <input
                                            class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                            type="number" value="36" />
                                    </div>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-md">
                                    <div>
                                        <label
                                            class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Material</label>
                                        <input
                                            class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                            type="text" value="Solid Mahogany / Steel Base" />
                                    </div>
                                    <div>
                                        <label
                                            class="block font-label-md text-label-md text-on-surface-variant mb-1 uppercase tracking-wider">Color
                                            / Finish</label>
                                        <input
                                            class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                            type="text" value="Dark Walnut" />
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
                                <textarea class="w-full p-3 border border-outline-variant rounded text-body-md font-body-md input-focus-glow"
                                    rows="3">Requires premium white-glove delivery service due to weight (250 lbs).</textarea>
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
                                    <input checked="" class="sr-only peer" type="checkbox" value="" />
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
                                <div
                                    class="w-full h-48 bg-surface-container rounded border border-outline-variant mb-4 overflow-hidden relative group">
                                    <img class="w-full h-full object-cover"
                                        data-alt="A high-quality studio photograph of a premium solid mahogany executive office desk with a rich dark walnut finish. The desk is massive and imposing, featuring clean architectural lines, integrated sleek drawer pulls, and a substantial work surface. It is positioned in a bright, minimalist modern studio setting with soft, diffused white lighting that highlights the wood grain. The aesthetic is corporate luxury and professional elegance."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfsIJCF4MpEf83tE_nzUJWBAjbLwRmjO5oeniYA_LpzDM3Xzy6owBzbUeuyT6b5MyNQ7fNyU3jBoToT5AXepNicYLLcyYQQYydy_5UXaGb7RRx5P1-T0Y49btX2icPRVokck4AAoeR-YjEKS79TGk_--GHFqlyOjl9b-JMk1xBYTO63JdwcW4Fne2HjcGKM1Rlydj-NYP4EHXldCMiPrMxoH65ii8x4W6BvQM3JXaHKypjI1fgjJEoeA" />
                                    <div
                                        class="absolute inset-0 bg-black/40 hidden group-hover:flex items-center justify-center transition-opacity">
                                        <button
                                            class="text-white flex items-center gap-2 font-label-md text-label-md"><span
                                                class="material-symbols-outlined">edit</span> Change Primary</button>
                                    </div>
                                    <div
                                        class="absolute top-2 left-2 bg-surface px-2 py-1 rounded text-xs font-bold text-on-surface border border-outline-variant shadow-sm">
                                        Primary</div>
                                </div>
                                <!-- Thumbnail Grid -->
                                <div class="grid grid-cols-3 gap-2 mb-4">
                                    <div
                                        class="aspect-square bg-surface-container rounded border border-outline-variant overflow-hidden">
                                        <img class="w-full h-full object-cover"
                                            data-alt="A close-up macro studio photograph focusing on the high-end hardware and rich dark walnut wood grain of a luxury mahogany executive office desk. The lighting is soft and directional, emphasizing the premium material quality and precise craftsmanship. Corporate minimalist aesthetic."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZ7f9KQuV8u7O3hOnhp7RcXOexUDX3XoNSkpmmtr1SERSiuH2ZnbbIyC-iZEQg9rkT9PRMpIgfn4aCbm1uWy_YUmXS-F8D7P1oLyBuDTcFfQsyPVdw4O6K1hc-EhOd0qyvhYuvOxBfTdJd8Z0KvGM4FNyVM0syKmOpnJ57lKLRBOFaa9Qb3IfZGcnAynKbjSq6_wHXYB2laxPdPxbNU31mlFRcSSh-eZjp3BRpwO6S8eIophn1U3D7JA" />
                                    </div>
                                    <div
                                        class="aspect-square bg-surface-container rounded border border-outline-variant overflow-hidden">
                                        <img class="w-full h-full object-cover"
                                            data-alt="A detailed studio photograph showing the side profile and drawer configuration of a premium solid mahogany executive office desk. Soft neutral lighting highlights the clean architectural lines and sturdy steel base components. Corporate luxury design."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA06IAwtNDAcJDqj08BHMORopkiul_j2VjdpyQyCQewUPlQr0RcAC8sEUdMbderZh6BYmTr8JggYG0Oh5oQUyb8VhEnhk0RuZX3zkd9mn64dKMGodMXq1aqT9m2uCbSSnqDIeE91HtjDKDOWbwNlRll6bQKrZsut6s6JVy-B4Zh5G1NKuffUib3Wohlo2sGw02H47tv2s0I1IrrVw-L1uBG-EQiYgZ2SNZPfnjZvKWcu9IUgVM7okJS9g" />
                                    </div>
                                    <div
                                        class="aspect-square border-2 border-dashed border-outline-variant rounded flex flex-col items-center justify-center text-outline hover:border-primary hover:text-primary transition-colors cursor-pointer bg-surface-container-low">
                                        <span class="material-symbols-outlined mb-1">add_photo_alternate</span>
                                        <span class="text-[10px] font-label-md uppercase">Add Image</span>
                                    </div>
                                </div>
                                <p class="text-xs text-on-surface-variant font-body-md">Supported formats: JPG, PNG,
                                    WEBP. Max size: 5MB per image.</p>
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
        </main>
    </div>
</body>

</html>
