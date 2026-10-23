<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Create Company - OfficeDesign Pro Admin Console</title>
    <!-- Tailwind CSS CDN with Forms and Container Queries -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f4ff',
                            100: '#e0eaff',
                            200: '#c7d9fe',
                            500: '#3b82f6',
                            600: '#2563eb',
                            700: '#1d4ed8',
                            800: '#1e3a8a',
                            900: '#172554',
                        }
                    }
                }
            }
        }
    </script>
    <meta content="web_dashboard" name="shell-type" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
</head>

<body class="bg-[#f8fafc] text-slate-800 font-sans antialiased min-h-screen flex">
    <!-- BEGIN: LeftSidebar -->
    <aside
        class="w-64 bg-white border-r border-slate-200 flex flex-col shrink-0 min-h-screen sticky top-0 h-screen justify-between z-20">
        <!-- Brand and Top Navigation -->
        <div>
            <!-- Brand Logo Header -->
            <div class="h-16 px-6 flex flex-col justify-center border-b border-slate-100">
                <h1 class="text-xl font-bold tracking-tight text-slate-900 leading-tight">OfficeDesign <span
                        class="text-blue-900">Pro</span></h1>
                <span class="text-[10px] font-semibold tracking-widest text-slate-400 uppercase">Admin Console</span>
            </div>
            <!-- Main Navigation Links -->
            <nav class="p-3 space-y-1">
                <!-- Dashboard -->
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors"
                    href="#">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path
                            d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    Dashboard
                </a>
                <!-- Products -->
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors"
                    href="#">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    Products
                </a>
                <!-- Categories -->
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors"
                    href="#">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    Categories
                </a>
                <!-- Quotations -->
                <a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors"
                    href="#">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    Quotations
                </a>
                <!-- Customers (Active Highlighted) -->
                <a class="flex items-center justify-between px-3 py-2.5 rounded-lg bg-blue-50 text-blue-900 font-semibold text-sm border-r-4 border-blue-900 shadow-sm"
                    href="#">
                    <div class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-blue-900" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                            <path
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        </svg>
                        Customers
                    </div>
                    <span class="w-1.5 h-1.5 rounded-full bg-blue-900"></span>
                </a>
            </nav>
        </div>
        <!-- Bottom Actions and Profile -->
        <div>
            <div class="p-3 border-t border-slate-100">
                <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-50 font-medium text-sm transition-colors"
                    href="#">
                    <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                        <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2"></path>
                    </svg>
                    Settings
                </a>
            </div>
            <!-- User Info Card -->
            <div class="p-3 border-t border-slate-100 flex items-center justify-between">
                <div class="flex items-center gap-3 min-w-0">
                    <div
                        class="w-9 h-9 rounded-full bg-slate-200 border border-slate-300 flex items-center justify-center font-semibold text-slate-700 text-xs shrink-0">
                        AD
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-semibold text-slate-900 truncate">Admin User</p>
                        <p class="text-[11px] text-slate-500 truncate">admin@officedesign.pro</p>
                    </div>
                </div>
                <button class="text-slate-400 hover:text-slate-600 p-1" title="Sign Out" type="button">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </button>
            </div>
        </div>
    </aside>
    <!-- END: LeftSidebar -->
    <!-- BEGIN: MainContentWrapper -->
    <div class="flex-1 flex flex-col min-w-0">
        <!-- BEGIN: TopBar -->
        <header
            class="h-16 bg-white border-b border-slate-200 px-8 flex items-center justify-between sticky top-0 z-10">
            <!-- Search Input Container -->
            <div class="w-full max-w-lg relative">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none">
                    <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                </div>
                <input
                    class="w-full pl-10 pr-12 py-2 bg-slate-50 border border-slate-200 rounded-lg text-sm text-slate-800 focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-800 focus:border-transparent transition-all placeholder:text-slate-400"
                    placeholder="Search companies, contacts, tax ID..." type="text" />
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                    <kbd
                        class="text-[10px] bg-white border border-slate-300 text-slate-400 font-medium px-1.5 py-0.5 rounded shadow-xs">⌘K</kbd>
                </div>
            </div>
            <!-- Header Right Utilities -->
            <div class="flex items-center gap-4">
                <!-- Notification Button -->
                <button
                    class="relative p-2 text-slate-500 hover:text-slate-800 hover:bg-slate-100 rounded-full transition-colors"
                    type="button">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                        <path
                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                    </svg>
                    <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-blue-600 rounded-full ring-2 ring-white"></span>
                </button>
                <!-- Divider -->
                <div class="h-6 w-px bg-slate-200"></div>
                <!-- User Quick Avatar -->
                <div class="flex items-center gap-2 cursor-pointer">
                    <div
                        class="w-8 h-8 rounded-full bg-slate-800 text-white flex items-center justify-center font-bold text-xs ring-2 ring-slate-100">
                        AU
                    </div>
                </div>
            </div>
        </header>
        <!-- END: TopBar -->
        <!-- BEGIN: MainContentArea -->
        <main class="flex-1 p-8 max-w-7xl mx-auto w-full">
            <div class="flex flex-col w-full">
                <!-- BREADCRUMBS & TOP BAR ACTIONS -->
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 pb-6">
                    <div class="flex flex-wrap items-center gap-2">
                        <nav
                            class="flex items-center gap-2 text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">
                            <a class="hover:text-primary transition-colors" href="#">Products</a>
                            <span
                                class="material-symbols-outlined text-outline-variant text-[16px]">chevron_right</span>
                            <a class="hover:text-primary transition-colors" href="#">Seating</a>
                            <span
                                class="material-symbols-outlined text-outline-variant text-[16px]">chevron_right</span>
                            <span class="text-on-surface font-semibold">CH-882-EX</span>
                        </nav>
                        <div class="hidden sm:inline-block w-1.5 h-1.5 rounded-full bg-outline-variant mx-1"></div>
                        <div
                            class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-md text-label-md">
                            <span class="w-2 h-2 rounded-full bg-on-tertiary-container animate-pulse"></span>
                            Active / Published
                        </div>
                    </div>
                    <!-- Quick action button bar -->
                    <div class="flex items-center flex-wrap gap-2.5">
                        <a class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-colors shadow-sm"
                            href="#">
                            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                            Back to Products
                        </a>
                        <button
                            class="inline-flex items-center gap-2 px-3.5 py-2 rounded-xl bg-surface-container-highest hover:bg-surface-variant text-on-surface font-label-md text-label-md transition-colors"
                            type="button">
                            <span class="material-symbols-outlined text-[18px]">content_copy</span>
                            Duplicate
                        </button>
                        <a class="inline-flex items-center gap-1.5 px-3.5 py-2 rounded-xl bg-surface-container-highest hover:bg-surface-variant text-on-surface font-label-md text-label-md transition-colors"
                            href="#" target="_blank">
                            <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                            Storefront Preview
                        </a>
                        <button
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md transition-all shadow-sm"
                            type="button">
                            <span class="material-symbols-outlined text-[18px]">add_shopping_cart</span>
                            Add to Quotation
                        </button>
                        <button
                            class="inline-flex items-center gap-2 px-4 py-2 rounded-xl bg-primary-container hover:bg-primary text-on-primary font-label-md text-label-md transition-all shadow-sm"
                            type="button">
                            <span class="material-symbols-outlined text-[18px]">edit</span>
                            Edit Product
                        </button>
                    </div>
                </div>
                <!-- PRODUCT HERO HEADER / IDENTIFIER STRIP -->
                <div class="relative bg-surface-container-lowest rounded-xl shadow-sm p-6 lg:p-8 mb-6 overflow-hidden">
                    <div
                        class="absolute -right-16 -top-16 w-64 h-64 bg-surface-container-low rounded-full blur-3xl pointer-events-none">
                    </div>
                    <div class="relative flex flex-col xl:flex-row xl:items-end justify-between gap-6">
                        <div class="space-y-3 max-w-4xl">
                            <div class="flex items-center gap-2.5">
                                <span
                                    class="px-2.5 py-0.5 rounded-full bg-surface-container-high text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">Herman
                                    Miller Authorized</span>
                                <span
                                    class="px-2.5 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-md text-label-md">Executive
                                    Class</span>
                            </div>
                            <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
                                Aeron Executive Ergonomic Chair
                            </h1>
                            <!-- Metadata strip -->
                            <div
                                class="flex flex-wrap items-center gap-y-2 gap-x-6 text-on-surface-variant font-body-md text-body-md">
                                <div class="flex items-center gap-1.5">
                                    <span class="font-label-md text-label-md uppercase text-outline">SKU:</span>
                                    <span class="font-medium text-on-surface">CH-882-EX</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="font-label-md text-label-md uppercase text-outline">UPC:</span>
                                    <span class="font-medium text-on-surface">849201948201</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="font-label-md text-label-md uppercase text-outline">Category:</span>
                                    <span class="font-medium text-on-surface">Ergonomic Task Seating</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="font-label-md text-label-md uppercase text-outline">Supplier:</span>
                                    <span class="font-medium text-primary">Herman Miller Inc.</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span
                                        class="material-symbols-outlined text-tertiary-fixed-variant text-[16px]">bolt</span>
                                    <span class="font-medium text-tertiary">2-3 Business Days (Quick Ship)</span>
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
                                <p class="font-body-md text-body-md text-on-surface font-medium">Sarah Jenkins • Jan
                                    14, 2024</p>
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
                                    <span
                                        class="material-symbols-outlined text-primary text-[22px]">photo_library</span>
                                    <h2 class="font-title-lg text-title-lg text-on-surface">Media &amp; CAD Assets</h2>
                                </div>
                                <span
                                    class="font-label-md text-label-md text-on-surface-variant bg-surface-container px-2.5 py-1 rounded-full">
                                    4 Photos • 2 CAD • 1 Spec Sheet
                                </span>
                            </div>
                            <!-- Main Hero Image Preview -->
                            <div
                                class="relative w-full h-[400px] lg:h-[460px] rounded-xl overflow-hidden bg-surface-container-low group flex items-center justify-center">
                                <img alt="Herman Miller Aeron Executive Ergonomic Chair"
                                    class="w-full h-full object-contain p-8 transition-transform duration-500 group-hover:scale-105"
                                    data-alt="Photorealistic studio shot of an authentic Herman Miller Aeron executive chair in polished mineral aluminum finish, showcasing the intricate breathable 8Z pellicle mesh, harmonic tilt spine, and posturefit lumbar pads on a soft pristine neutral architectural backdrop with gentle diffused commercial photography lighting."
                                    id="main-product-image"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDPiF8S0J1m9sUt4EVP9xVA_aUN1emSOiZNKxZdyZJ2MH88BEhfgq1oX4l5ai0r1q--CyvXyM8hqrLLRYtVHQdd2XV6DL_IlVr7eEOgxr7vrIKQLUCag1KfqH7BjBrHh8X8z1FjiZt3NVfLgOEFWqM5VfCAgQiSkTvx4qqiGU6efdNlHH2R_HA5vireA6q0gZqLCPBJsfa3PUj_uk6e9V-9rVPVDVkGu7V-29ALcgC5IcEZYDsCyMOesQ" />
                                <div
                                    class="absolute bottom-4 left-4 bg-surface-container-lowest/90 backdrop-blur-md px-3.5 py-1.5 rounded-lg text-on-surface font-label-md text-label-md flex items-center gap-2 shadow-sm">
                                    <span class="material-symbols-outlined text-[16px] text-primary">360</span>
                                    Primary View • High-Res 4000x3000
                                </div>
                                <button
                                    class="absolute top-4 right-4 w-9 h-9 rounded-lg bg-surface-container-lowest/90 backdrop-blur-md hover:bg-surface-container-lowest text-on-surface flex items-center justify-center transition-colors shadow-sm"
                                    type="button">
                                    <span class="material-symbols-outlined text-[20px]">fullscreen</span>
                                </button>
                            </div>
                            <!-- Thumbnail Strip -->
                            <div class="grid grid-cols-4 gap-3">
                                <button
                                    class="relative h-24 rounded-lg overflow-hidden bg-surface-container-low p-2 ring-2 ring-primary transition-all"
                                    type="button">
                                    <img alt="Front view" class="w-full h-full object-contain"
                                        data-alt="Front angled hero view of Aeron Executive chair showing symmetric posturefit lumbar structure and clean armrests in mineral grey pellicle mesh."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBAFMFlUT-ixb6A6OarghPzSbQ-epAGNVwsnt-GOw-eeM187sG9OYIZWn5TIVi3ZZp-TjgbgfBD60VkDPNRNJOeDPtFF3lOnUcWoNFvNYRNB_ooSZErpaFr1AiVB9ClPpuGVZh-9pupsq82cO1rTRc4vCPt_5itr4D1QcivjrRQ_P18UjSdarIir4CaQFaSK4K0wFAP-B57e0f4j7kkHT5zRhAXrvnNB74jcNBeyXx8D53iBQO5Wi8MA" />
                                    <span
                                        class="absolute bottom-1 right-1 font-label-md text-[10px] bg-surface-container-lowest/90 px-1.5 py-0.5 rounded text-on-surface">Front</span>
                                </button>
                                <button
                                    class="relative h-24 rounded-lg overflow-hidden bg-surface-container-low p-2 hover:bg-surface-container transition-all"
                                    type="button">
                                    <img alt="Side profile" class="w-full h-full object-contain"
                                        data-alt="Side profile perspective of ergonomic task chair illustrating dynamic harmonic tilt spine curvature and die-cast aluminum tilt housing mechanism."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQ3nqAiJR3amfYAAwHOBQ4eDt_k_e5z7qk1Ex0TYi-B2V_lI0ZOLVhBRMiAGL6l3wJlD4wLRewn87vqS7WQq3NePWUD_Qy9CFkyDxxSunoec2O6aZHnLtJynkWdYA0yg3FYyl31QKJ02IcZ222Cy7kO747SKGVjQ1VGyayVxxM3b0Qywey0gth1qyp5EIn2MbVNwS26axCJbU9fwjB36n-S-M7zwgKuWY0CRfZJ1mVCs2zJoo5JTMRaA" />
                                    <span
                                        class="absolute bottom-1 right-1 font-label-md text-[10px] bg-surface-container-lowest/90 px-1.5 py-0.5 rounded text-on-surface">Profile</span>
                                </button>
                                <button
                                    class="relative h-24 rounded-lg overflow-hidden bg-surface-container-low p-2 hover:bg-surface-container transition-all"
                                    type="button">
                                    <img alt="Lumbar detail" class="w-full h-full object-contain"
                                        data-alt="Close-up macro detail of Herman Miller PostureFit SL dual lumbar adjustment dials and tension cables with tactile industrial textures."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBaQz3oB6GEyDpm2UCLdu_moLIGnPYnoVtwhOZVoqWCaCIk_bQEIz42XwsToVcNgSNH6_So5iwd52_3AxkUF0rH4qAxtU_1KA11fYTL2C0uokvCOz7y7Kz2qEKcvgjeI9Ve08J5TJH0jq3oYhjQleapiWfICtLbEyFeT9ZEHOnU0eogWpbB1YSbM7NZ5S4ORoYKQzL-TKB0I8B6VM9Syzhw8lIEJdt1hJeJHc_01GUCC8TLtWdc4dT6Og" />
                                    <span
                                        class="absolute bottom-1 right-1 font-label-md text-[10px] bg-surface-container-lowest/90 px-1.5 py-0.5 rounded text-on-surface">Lumbar</span>
                                </button>
                                <button
                                    class="relative h-24 rounded-lg overflow-hidden bg-surface-container-low p-2 hover:bg-surface-container transition-all"
                                    type="button">
                                    <img alt="Base castors" class="w-full h-full object-contain"
                                        data-alt="Low-angle view of five-star polished aluminum castor base with durable hard-floor architectural glides and pneumatics."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAJ19KDZAARAHKNlGK6O4NytJp09UJuHxfkJnaN7YIRp4KFUbrj8Fst5gtz_QtxrenoAreWXglVTA-AxR7CySYSt-KPU_KMxP1WdnGGux2F5ETAEUTDUBXKJvQZLhNHDHPytQkuhBjl7eeE8VBViM7fPCpT4RpieWgyWPunWX_XWTuf2lkgPiJgn6bTCRC1S6DClaMl0PsvV2DBH6BVah9vnQ4Qk3bm6bZYjxtcqiBDOsmSJzS81gRPDQ" />
                                    <span
                                        class="absolute bottom-1 right-1 font-label-md text-[10px] bg-surface-container-lowest/90 px-1.5 py-0.5 rounded text-on-surface">Base</span>
                                </button>
                            </div>
                            <!-- Downloadable Technical BIM/CAD & Spec Files -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 pt-2">
                                <div
                                    class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-primary-fixed flex items-center justify-center text-primary shrink-0">
                                        <span class="material-symbols-outlined text-[20px]">view_in_ar</span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="font-body-md text-body-md font-semibold text-on-surface truncate">
                                            Aeron_Rev_24.rfa</p>
                                        <p class="font-label-md text-label-md text-outline">Revit 2023 BIM • 14 MB</p>
                                    </div>
                                    <span
                                        class="material-symbols-outlined text-outline-variant hover:text-primary text-[20px]">download</span>
                                </div>
                                <div
                                    class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-secondary-container flex items-center justify-center text-on-secondary-container shrink-0">
                                        <span class="material-symbols-outlined text-[20px]">architecture</span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="font-body-md text-body-md font-semibold text-on-surface truncate">
                                            Aeron_Plan_3D.dwg</p>
                                        <p class="font-label-md text-label-md text-outline">AutoCAD 3D • 8.2 MB</p>
                                    </div>
                                    <span
                                        class="material-symbols-outlined text-outline-variant hover:text-primary text-[20px]">download</span>
                                </div>
                                <div
                                    class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer">
                                    <div
                                        class="w-10 h-10 rounded-lg bg-error-container flex items-center justify-center text-error shrink-0">
                                        <span class="material-symbols-outlined text-[20px]">description</span>
                                    </div>
                                    <div class="min-w-0 flex-1">
                                        <p class="font-body-md text-body-md font-semibold text-on-surface truncate">
                                            CutSheet_2024.pdf</p>
                                        <p class="font-label-md text-label-md text-outline">Spec Sheet • 2.4 MB</p>
                                    </div>
                                    <span
                                        class="material-symbols-outlined text-outline-variant hover:text-primary text-[20px]">download</span>
                                </div>
                            </div>
                        </div>
                        <!-- CORE PRODUCT OVERVIEW & SPECIFICATIONS -->
                        <div class="bg-surface-container-lowest rounded-xl shadow-sm p-6 lg:p-7 space-y-6">
                            <div>
                                <h2 class="font-title-lg text-title-lg text-on-surface pb-3">Product Architectural
                                    Overview</h2>
                                <p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
                                    The Aeron Executive Ergonomic Chair remains the benchmark for commercial workplace
                                    ergonomics. Engineered with an intelligent 8Z Pellicle elastomeric weave across
                                    eight distinct zones of graduated tension, it relieves pressure points and promotes
                                    optimal thermal comfort during long design and operational shifts. The innovative
                                    PostureFit SL system stabilizes the sacrum and lumbar region simultaneously,
                                    actively engaging the spine's natural forward tilt for sustained muscular support.
                                </p>
                            </div>
                            <!-- Technical Specs Table -->
                            <div class="space-y-3">
                                <div class="flex items-center justify-between">
                                    <h3 class="font-label-md text-label-md uppercase tracking-wider text-outline">
                                        Architectural &amp; Engineering Specifications</h3>
                                    <span
                                        class="text-tertiary font-label-md text-label-md flex items-center gap-1 font-semibold">
                                        <span class="material-symbols-outlined text-[16px]">verified</span> BIFMA
                                        Certified
                                    </span>
                                </div>
                                <div class="overflow-x-auto">
                                    <table class="w-full text-left font-body-md text-body-md">
                                        <tbody class="divide-y-0">
                                            <tr class="bg-surface-container-low">
                                                <td class="py-3 px-4 font-semibold text-on-surface w-1/3">Frame &amp;
                                                    Base Construction</td>
                                                <td class="py-3 px-4 text-on-surface-variant">Die-cast recycled
                                                    aluminum chassis and structural polyamide components</td>
                                            </tr>
                                            <tr class="bg-surface-container-lowest">
                                                <td class="py-3 px-4 font-semibold text-on-surface">Mesh Suspension
                                                </td>
                                                <td class="py-3 px-4 text-on-surface-variant">Breathable 8Z Mineral
                                                    pellicle elastomeric weave (zero sag under cyclic stress)</td>
                                            </tr>
                                            <tr class="bg-surface-container-low">
                                                <td class="py-3 px-4 font-semibold text-on-surface">Overall Dimensions
                                                </td>
                                                <td class="py-3 px-4 text-on-surface-variant">41" – 45" H × 27" W ×
                                                    16.75" – 18.5" D</td>
                                            </tr>
                                            <tr class="bg-surface-container-lowest">
                                                <td class="py-3 px-4 font-semibold text-on-surface">Rated Load Capacity
                                                </td>
                                                <td class="py-3 px-4 text-on-surface-variant">350 lbs (BIFMA rated for
                                                    24/7 continuous multi-shift use)</td>
                                            </tr>
                                            <tr class="bg-surface-container-low">
                                                <td class="py-3 px-4 font-semibold text-on-surface">Kinematic Tilt
                                                    Range</td>
                                                <td class="py-3 px-4 text-on-surface-variant">90° upright to 120° full
                                                    recline with 5° forward active engagement lock</td>
                                            </tr>
                                            <tr class="bg-surface-container-lowest">
                                                <td class="py-3 px-4 font-semibold text-on-surface">Spinal Ergonomics
                                                </td>
                                                <td class="py-3 px-4 text-on-surface-variant">Dual PostureFit SL
                                                    individual adjustable sacral and lumbar pads</td>
                                            </tr>
                                            <tr class="bg-surface-container-low">
                                                <td class="py-3 px-4 font-semibold text-on-surface">Environmental
                                                    Standards</td>
                                                <td class="py-3 px-4 text-on-surface-variant">ANSI/BIFMA X5.11, LEED
                                                    v4.1 credit eligible, Cradle to Cradle Certified™ Silver</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
                                        <tr class="hover:bg-surface-container-low transition-colors">
                                            <td class="py-3.5 px-4 font-semibold text-on-surface">CH-882-EX-B-MIN</td>
                                            <td class="py-3.5 px-4"><span
                                                    class="px-2 py-0.5 rounded bg-surface-container text-xs font-semibold">Size
                                                    B (Std)</span></td>
                                            <td class="py-3.5 px-4 text-on-surface-variant">Mineral / Polished Aluminum
                                            </td>
                                            <td class="py-3.5 px-4 text-on-surface-variant">Hard Floor / Carpet (2.5")
                                            </td>
                                            <td class="py-3.5 px-4">
                                                <span
                                                    class="inline-flex items-center gap-1.5 text-tertiary font-semibold text-xs">
                                                    <span class="w-2 h-2 rounded-full bg-tertiary"></span> 82 units
                                                </span>
                                            </td>
                                            <td class="py-3.5 px-4 text-right font-medium text-on-surface">$850.00</td>
                                        </tr>
                                        <tr
                                            class="bg-surface-container-lowest hover:bg-surface-container-low transition-colors">
                                            <td class="py-3.5 px-4 font-semibold text-on-surface">CH-882-EX-C-MIN</td>
                                            <td class="py-3.5 px-4"><span
                                                    class="px-2 py-0.5 rounded bg-surface-container text-xs font-semibold">Size
                                                    C (Large)</span></td>
                                            <td class="py-3.5 px-4 text-on-surface-variant">Mineral / Polished Aluminum
                                            </td>
                                            <td class="py-3.5 px-4 text-on-surface-variant">Quiet Roll Glides</td>
                                            <td class="py-3.5 px-4">
                                                <span
                                                    class="inline-flex items-center gap-1.5 text-tertiary font-semibold text-xs">
                                                    <span class="w-2 h-2 rounded-full bg-tertiary"></span> 34 units
                                                </span>
                                            </td>
                                            <td class="py-3.5 px-4 text-right font-medium text-on-surface">$890.00</td>
                                        </tr>
                                        <tr class="hover:bg-surface-container-low transition-colors">
                                            <td class="py-3.5 px-4 font-semibold text-on-surface">CH-882-EX-B-CAR</td>
                                            <td class="py-3.5 px-4"><span
                                                    class="px-2 py-0.5 rounded bg-surface-container text-xs font-semibold">Size
                                                    B (Std)</span></td>
                                            <td class="py-3.5 px-4 text-on-surface-variant">Carbon Matte Black</td>
                                            <td class="py-3.5 px-4 text-on-surface-variant">Standard Dual Wheel</td>
                                            <td class="py-3.5 px-4">
                                                <span
                                                    class="inline-flex items-center gap-1.5 text-tertiary font-semibold text-xs">
                                                    <span class="w-2 h-2 rounded-full bg-tertiary"></span> 26 units
                                                </span>
                                            </td>
                                            <td class="py-3.5 px-4 text-right font-medium text-on-surface">$810.00</td>
                                        </tr>
                                        <tr
                                            class="bg-surface-container-lowest hover:bg-surface-container-low transition-colors">
                                            <td class="py-3.5 px-4 font-semibold text-on-surface">CH-882-EX-A-GRA</td>
                                            <td class="py-3.5 px-4"><span
                                                    class="px-2 py-0.5 rounded bg-surface-container text-xs font-semibold">Size
                                                    A (Small)</span></td>
                                            <td class="py-3.5 px-4 text-on-surface-variant">Graphite Grey</td>
                                            <td class="py-3.5 px-4 text-on-surface-variant">Multi-surface Casters</td>
                                            <td class="py-3.5 px-4">
                                                <span
                                                    class="inline-flex items-center gap-1.5 text-secondary font-semibold text-xs">
                                                    <span class="w-2 h-2 rounded-full bg-secondary"></span> 0 units
                                                    (Backorder)
                                                </span>
                                            </td>
                                            <td class="py-3.5 px-4 text-right font-medium text-on-surface">$790.00</td>
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
                                    <span
                                        class="font-headline-md text-headline-md font-bold text-on-surface">$850.00</span>
                                </div>
                                <div class="flex items-center justify-between pt-2">
                                    <span class="font-body-md text-body-md text-on-surface-variant">Base Wholesale /
                                        Partner</span>
                                    <span class="font-body-md text-body-md font-bold text-primary">$765.00 <span
                                            class="font-normal text-xs text-outline">(-10%)</span></span>
                                </div>
                            </div>
                            <!-- Volume Tier Table -->
                            <div class="space-y-2">
                                <p class="font-label-md text-label-md uppercase tracking-wider text-outline">Contract
                                    Volume Tiers</p>
                                <div class="space-y-1.5">
                                    <div
                                        class="flex items-center justify-between p-2.5 rounded-lg bg-surface-container hover:bg-surface-container-high transition-colors text-xs font-medium">
                                        <span class="text-on-surface">Tier 1 (10 – 49 units)</span>
                                        <div class="text-right">
                                            <span class="font-bold text-on-surface">$710.00</span>
                                            <span class="text-tertiary ml-1 font-semibold">16.5% disc</span>
                                        </div>
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-2.5 rounded-lg bg-surface-container hover:bg-surface-container-high transition-colors text-xs font-medium">
                                        <span class="text-on-surface">Tier 2 (50+ units Enterprise)</span>
                                        <div class="text-right">
                                            <span class="font-bold text-on-surface">$650.00</span>
                                            <span class="text-tertiary ml-1 font-semibold">23.5% disc</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Unit Cost & COGS Data -->
                            <div class="p-4 rounded-xl bg-secondary-fixed/40 space-y-2">
                                <div class="flex items-center justify-between text-xs">
                                    <span
                                        class="font-label-md text-label-md uppercase text-on-secondary-fixed-variant">Unit
                                        Landed Cost (COGS)</span>
                                    <span class="font-bold text-on-secondary-fixed">$420.00</span>
                                </div>
                                <div class="flex items-center justify-between text-xs">
                                    <span class="text-on-secondary-fixed-variant">Gross Margin Realized</span>
                                    <span class="font-bold text-tertiary flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[14px]">trending_up</span> 45.1%
                                        ($345.00)
                                    </span>
                                </div>
                                <!-- Margin Visual Bar -->
                                <div class="w-full h-1.5 rounded-full bg-secondary-fixed overflow-hidden mt-1">
                                    <div class="h-full bg-tertiary rounded-full" style="width: 45.1%;"></div>
                                </div>
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
                                    class="px-2.5 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed font-label-md text-label-md font-semibold">In
                                    Stock</span>
                            </div>
                            <div class="flex items-baseline justify-between p-4 rounded-xl bg-surface-container-low">
                                <div>
                                    <span
                                        class="font-headline-lg text-headline-lg font-bold text-on-surface">142</span>
                                    <span class="text-outline text-xs block font-label-md uppercase">Total Physical
                                        Stock</span>
                                </div>
                                <div class="text-right">
                                    <span class="font-body-md text-body-md font-semibold text-tertiary">+80 Inbound
                                        PO</span>
                                    <span class="text-outline text-xs block">ETA: Nov 15, 2024</span>
                                </div>
                            </div>
                            <!-- Warehouse Distribution Hubs -->
                            <div class="space-y-3">
                                <p class="font-label-md text-label-md uppercase tracking-wider text-outline">
                                    Distribution Centers</p>
                                <div class="space-y-2">
                                    <div class="space-y-1">
                                        <div class="flex justify-between text-xs font-medium">
                                            <span class="text-on-surface">Chicago Central DC (Primary)</span>
                                            <span class="font-bold text-on-surface">94 units</span>
                                        </div>
                                        <div class="w-full bg-surface-container h-2 rounded-full overflow-hidden">
                                            <div class="bg-primary h-full rounded-full" style="width: 66%;"></div>
                                        </div>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="flex justify-between text-xs font-medium">
                                            <span class="text-on-surface">Reno West DC Hub</span>
                                            <span class="font-bold text-on-surface">36 units</span>
                                        </div>
                                        <div class="w-full bg-surface-container h-2 rounded-full overflow-hidden">
                                            <div class="bg-primary-fixed-dim h-full rounded-full" style="width: 25%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="flex justify-between text-xs font-medium">
                                            <span class="text-on-surface">Newark East DC Facility</span>
                                            <span class="font-bold text-on-surface">12 units</span>
                                        </div>
                                        <div class="w-full bg-surface-container h-2 rounded-full overflow-hidden">
                                            <div class="bg-secondary-fixed-dim h-full rounded-full"
                                                style="width: 9%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Warehouse Bin Location info -->
                            <div
                                class="flex items-center justify-between pt-3 border-t-0 bg-surface-container-low p-3.5 rounded-lg text-xs">
                                <div class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-outline text-[18px]">location_on</span>
                                    <span class="text-on-surface-variant font-medium">Bay Location</span>
                                </div>
                                <span
                                    class="font-mono font-bold text-on-surface bg-surface-container-lowest px-2 py-1 rounded">Bay
                                    14-C • Rack 02</span>
                            </div>
                        </div>
                        <!-- QUOTATION & SALES PIPELINE SNAPSHOT -->
                        <div class="bg-surface-container-lowest rounded-xl shadow-sm p-6 space-y-5">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2">
                                    <span
                                        class="material-symbols-outlined text-primary text-[22px]">request_quote</span>
                                    <h3 class="font-title-lg text-title-lg text-on-surface">Quotation Pipeline</h3>
                                </div>
                                <span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
                            </div>
                            <div class="p-4 rounded-xl bg-surface-container-low space-y-1">
                                <p class="font-label-md text-label-md uppercase text-outline">Active Proposals Value
                                </p>
                                <p class="font-headline-md text-headline-md font-bold text-primary">$154,200.00</p>
                                <p class="font-body-md text-xs text-on-surface-variant">Featured in <span
                                        class="font-semibold text-on-surface">18 pending client proposals</span></p>
                            </div>
                            <!-- Recent Enterprise Deals / Contracts -->
                            <div class="space-y-3">
                                <p class="font-label-md text-label-md uppercase tracking-wider text-outline">Recent
                                    Major Requisitions</p>
                                <div class="space-y-2.5">
                                    <div
                                        class="flex items-center justify-between p-3 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors">
                                        <div class="min-w-0">
                                            <p
                                                class="font-body-md text-body-md font-semibold text-on-surface truncate">
                                                Acme Corp HQ Campus</p>
                                            <p class="font-label-md text-label-md text-outline">PO-2024-884 • 64 units
                                            </p>
                                        </div>
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-tertiary-fixed text-on-tertiary-fixed text-[11px] font-bold">Approved</span>
                                    </div>
                                    <div
                                        class="flex items-center justify-between p-3 rounded-lg bg-surface-container-low hover:bg-surface-container transition-colors">
                                        <div class="min-w-0">
                                            <p
                                                class="font-body-md text-body-md font-semibold text-on-surface truncate">
                                                TechFlow Inc. Expansion</p>
                                            <p class="font-label-md text-label-md text-outline">QT-9021 • 28 units</p>
                                        </div>
                                        <span
                                            class="px-2 py-0.5 rounded-full bg-primary-fixed text-on-primary-fixed text-[11px] font-bold">Sent
                                            / Review</span>
                                    </div>
                                </div>
                            </div>
                            <a class="w-full inline-flex items-center justify-center gap-1.5 py-2.5 rounded-xl bg-surface-container-high hover:bg-surface-variant text-primary font-label-md text-label-md transition-colors font-semibold"
                                href="#">
                                View all 18 Quotations
                                <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                            </a>
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
        </main>
        <!-- END: MainContentArea -->
    </div>
    <!-- END: MainContentWrapper -->
</body>

</html>
