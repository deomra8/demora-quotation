@extends('admin.layouts.app')

@section('title', 'Product Catalog')

@section('content')
    <div class="p-6 md:p-10 max-w-[1440px] mx-auto w-full flex flex-col gap-8 flex-grow">
        <div class="flex flex-col w-full">
            <!-- Dynamic Notification / Top Pill Anchor -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-stack-lg">
                <div>
                    <div class="flex items-center gap-2 mb-1">
                        <span class="font-label-md text-label-md uppercase tracking-wider text-primary font-semibold">Catalog
                            Architecture</span>
                        <span class="inline-block w-1 h-1 rounded-full bg-outline-variant"></span>
                        <span class="font-label-md text-label-md text-on-surface-variant">Taxonomy Tier 1 &amp; 2</span>
                    </div>
                    <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Categories Management
                    </h1>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-3xl mt-1">
                        Organize, curate, and configure product taxonomies for internal enterprise catalog and client
                        storefront.
                    </p>
                </div>
                <div class="flex items-center gap-3 shrink-0">
                    <button
                        class="inline-flex items-center justify-center px-4 py-2.5 rounded bg-surface-container-lowest text-primary font-label-md text-label-md shadow-sm hover:bg-surface-container-low transition-all"
                        type="button">
                        <span class="material-symbols-outlined text-base mr-2">download</span>
                        Export Taxonomies
                    </button>
                    <button
                        class="inline-flex items-center justify-center px-5 py-2.5 rounded bg-primary-container text-on-primary font-label-md text-label-md shadow-sm hover:bg-primary transition-all"
                        onclick="document.getElementById('newCategoryDrawer').classList.toggle('hidden')" type="button">
                        <span class="material-symbols-outlined text-base mr-2">add</span>
                        + Add New Category
                    </button>
                </div>
            </div>
            <!-- Metric Bento Overview Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-stack-lg">
                <div
                    class="bg-surface-container-lowest p-5 rounded-xl shadow-sm relative overflow-hidden flex flex-col justify-between">
                    <div class="flex items-start justify-between">
                        <div>
                            <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Total
                                Categories</span>
                            <div class="font-headline-lg text-headline-lg font-bold text-on-surface mt-1">18</div>
                        </div>
                        <div class="p-2.5 rounded bg-surface-container text-primary">
                            <span class="material-symbols-outlined text-xl">folder_managed</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-3 pt-3 gap-2">
                        <span class="inline-flex items-center text-xs font-semibold text-tertiary-container">
                            <span class="material-symbols-outlined text-sm mr-0.5">arrow_upward</span>+2
                        </span>
                        <span class="font-label-md text-label-md text-on-surface-variant">added this quarter</span>
                    </div>
                    <div class="absolute -right-6 -bottom-6 w-20 h-20 rounded-full bg-primary/5 pointer-events-none">
                    </div>
                </div>
                <div
                    class="bg-surface-container-lowest p-5 rounded-xl shadow-sm relative overflow-hidden flex flex-col justify-between">
                    <div class="flex items-start justify-between">
                        <div>
                            <span
                                class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Active
                                on Storefront</span>
                            <div class="font-headline-lg text-headline-lg font-bold text-on-surface mt-1">14</div>
                        </div>
                        <div class="p-2.5 rounded bg-surface-container-low text-tertiary-container">
                            <span class="material-symbols-outlined text-xl"
                                style="font-variation-settings: 'FILL' 1;">visibility</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-3 pt-3 gap-2">
                        <span class="w-2 h-2 rounded-full bg-on-tertiary-container animate-pulse"></span>
                        <span class="font-label-md text-label-md text-on-surface-variant">77.7% sync rate</span>
                    </div>
                    <div
                        class="absolute -right-6 -bottom-6 w-20 h-20 rounded-full bg-tertiary-container/5 pointer-events-none">
                    </div>
                </div>
                <div
                    class="bg-surface-container-lowest p-5 rounded-xl shadow-sm relative overflow-hidden flex flex-col justify-between">
                    <div class="flex items-start justify-between">
                        <div>
                            <span
                                class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Drafts
                                / Hidden</span>
                            <div class="font-headline-lg text-headline-lg font-bold text-on-surface mt-1">4</div>
                        </div>
                        <div class="p-2.5 rounded bg-secondary-container/40 text-secondary">
                            <span class="material-symbols-outlined text-xl">unpublished</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-3 pt-3 gap-2">
                        <span class="font-label-md text-label-md text-on-surface-variant">3 staged for Fall 2025
                            release</span>
                    </div>
                    <div
                        class="absolute -right-6 -bottom-6 w-20 h-20 rounded-full bg-secondary-container/10 pointer-events-none">
                    </div>
                </div>
                <div
                    class="bg-surface-container-lowest p-5 rounded-xl shadow-sm relative overflow-hidden flex flex-col justify-between">
                    <div class="flex items-start justify-between">
                        <div>
                            <span class="font-label-md text-label-md uppercase tracking-wider text-on-surface-variant">Total
                                Products Mapped</span>
                            <div class="font-headline-lg text-headline-lg font-bold text-on-surface mt-1">342</div>
                        </div>
                        <div class="p-2.5 rounded bg-surface-container-high text-primary">
                            <span class="material-symbols-outlined text-xl">layers</span>
                        </div>
                    </div>
                    <div class="flex items-center mt-3 pt-3 gap-2">
                        <span class="font-label-md text-label-md text-on-surface-variant">99.4% SKUs assigned
                            properly</span>
                    </div>
                    <div
                        class="absolute -right-6 -bottom-6 w-20 h-20 rounded-full bg-surface-container-high/40 pointer-events-none">
                    </div>
                </div>
            </div>
            <!-- Control & Filter Toolbar -->
            <div class="bg-surface-container-lowest p-4 rounded-xl shadow-sm mb-4">
                <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                    <!-- Search Input -->
                    <div class="relative flex-1 min-w-[280px]">
                        <span
                            class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-lg">search</span>
                        <input
                            class="w-full pl-10 pr-4 py-2.5 rounded bg-surface-container-low text-on-surface font-body-md text-body-md placeholder:text-outline focus:bg-surface-container-lowest input-focus-glow transition-all"
                            id="categoryFilterInput" placeholder="Search by category name, slug or description..."
                            type="text" />
                    </div>
                    <!-- Filters & Actions Stack -->
                    <div class="flex flex-wrap items-center gap-3">
                        <!-- Status Dropdown -->
                        <div class="flex items-center bg-surface-container-low px-3 py-2 rounded">
                            <span class="material-symbols-outlined text-sm text-outline mr-2">filter_alt</span>
                            <select
                                class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer pr-4">
                                <option value="all">Status: All (18)</option>
                                <option value="active">Active Only (14)</option>
                                <option value="draft">Drafts (3)</option>
                                <option value="archived">Archived (1)</option>
                            </select>
                        </div>
                        <!-- Sort Dropdown -->
                        <div class="flex items-center bg-surface-container-low px-3 py-2 rounded">
                            <span class="material-symbols-outlined text-sm text-outline mr-2">sort</span>
                            <select
                                class="bg-transparent font-label-md text-label-md text-on-surface focus:outline-none cursor-pointer pr-4">
                                <option value="products-desc">Most Products</option>
                                <option value="name-asc">Name (A-Z)</option>
                                <option value="date-desc">Recently Modified</option>
                                <option value="slug-asc">Slug Path</option>
                            </select>
                        </div>
                        <!-- View Mode Switcher -->
                        <div class="flex items-center bg-surface-container-low p-1 rounded gap-1">
                            <button class="p-1.5 rounded bg-surface-container-lowest text-primary shadow-sm"
                                title="Table View" type="button">
                                <span class="material-symbols-outlined text-lg">view_list</span>
                            </button>
                            <button class="p-1.5 rounded text-on-surface-variant hover:text-primary transition-colors"
                                title="Bento Grid View" type="button">
                                <span class="material-symbols-outlined text-lg">grid_view</span>
                            </button>
                        </div>
                        <!-- Bulk Action Dropdown -->
                        <div class="relative">
                            <button
                                class="px-3.5 py-2 rounded bg-surface-container-low text-on-surface-variant font-label-md text-label-md hover:text-primary flex items-center transition-all"
                                id="bulkActionsBtn"
                                onclick="document.getElementById('bulkActionsMenu').classList.toggle('hidden')"
                                type="button">
                                <span class="material-symbols-outlined text-base mr-1.5">checklist</span>
                                Bulk Options
                                <span class="material-symbols-outlined text-sm ml-1">expand_more</span>
                            </button>
                            <div class="hidden absolute right-0 mt-2 w-48 bg-surface-container-lowest rounded-lg shadow-xl z-20 py-1"
                                id="bulkActionsMenu">
                                <button
                                    class="w-full text-left px-4 py-2 text-body-md font-body-md text-on-surface hover:bg-surface-container-low flex items-center">
                                    <span
                                        class="material-symbols-outlined text-sm mr-2 text-tertiary-container">publish</span>
                                    Mark as Active
                                </button>
                                <button
                                    class="w-full text-left px-4 py-2 text-body-md font-body-md text-on-surface hover:bg-surface-container-low flex items-center">
                                    <span
                                        class="material-symbols-outlined text-sm mr-2 text-secondary">visibility_off</span>
                                    Set as Draft
                                </button>
                                <div class="h-[1px] bg-surface-container my-1"></div>
                                <button
                                    class="w-full text-left px-4 py-2 text-body-md font-body-md text-error hover:bg-error-container/20 flex items-center"
                                    onclick="openDeleteModal('Selected 3 Categories', 47)">
                                    <span class="material-symbols-outlined text-sm mr-2">delete</span> Delete Selected
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Active Filter Badges Bar -->
                <div class="flex items-center gap-2 mt-3 pt-3 flex-wrap">
                    <span class="font-label-md text-label-md text-on-surface-variant">Active parameters:</span>
                    <span
                        class="inline-flex items-center gap-1.5 bg-surface-container px-2.5 py-1 rounded text-primary font-label-md text-label-md">
                        Showing all collections
                        <span class="material-symbols-outlined text-sm cursor-pointer hover:text-error">close</span>
                    </span>
                    <span
                        class="inline-flex items-center gap-1.5 bg-surface-container px-2.5 py-1 rounded text-primary font-label-md text-label-md">
                        Display: Architectural View
                    </span>
                    <span class="text-xs text-outline ml-auto">Showing 6 of 18 records</span>
                </div>
            </div>
            <!-- Primary Categories Data Table -->
            <div class="bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden mb-stack-lg">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr
                                class="bg-surface-container-low text-on-surface-variant font-label-md text-label-md uppercase tracking-wider">
                                <th class="py-3.5 px-4 w-12 text-center">
                                    <input class="rounded text-primary focus:ring-0 cursor-pointer" type="checkbox" />
                                </th>
                                <th class="py-3.5 px-4 min-w-[280px]">Category &amp; Taxonomy</th>
                                <th class="py-3.5 px-4 min-w-[260px]">Description &amp; Scope</th>
                                <th class="py-3.5 px-4 w-36">Storefront Status</th>
                                <th class="py-3.5 px-4 w-32 text-center">Products</th>
                                <th class="py-3.5 px-4 min-w-[160px]">Last Modified</th>
                                <th class="py-3.5 px-4 w-40 text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-surface-container-low text-on-surface font-body-md text-body-md">
                            <!-- Row 1: Ergonomic Task Seating -->
                            <tr class="hover:bg-surface-container-low/60 transition-colors group">
                                <td class="py-4 px-4 text-center">
                                    <input class="rounded text-primary focus:ring-0 cursor-pointer" type="checkbox" />
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-3.5">
                                        <img class="w-14 h-14 rounded-lg object-cover bg-surface-container shrink-0 shadow-sm"
                                            data-alt="Modern architectural ergonomic office task chair upholstered in deep sapphire blue wool textile with matte black aluminum swivel base in bright showroom daylight."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAz7Uc7oghBM2uz5k1GJeS09m0kPcfbFPM4XisGfVjlc_nVrFgXv1tphVXzJTLkk6jHqOMtcV95bdgpUCws1gi3FoYOM9Mc9uclJQoQsFEF_ttAhGpAGGVYSq-YpCIhRPdAij7NIyw0gkv2ejvd40Qq-svROs6vWZMc8m8D0tct7lJxlvZXmUoVng-a_1fYNZh68VVMBxHbA9BP8kl-1PZBQhwmla3C737PGj7RBvTi" />
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="font-title-lg text-title-lg font-semibold text-primary group-hover:text-primary-container transition-colors">Ergonomic
                                                    Task Seating</span>
                                                <span
                                                    class="bg-surface-container-high px-2 py-0.5 rounded text-xs text-primary font-medium">8
                                                    Subcats</span>
                                            </div>
                                            <div class="flex items-center gap-1.5 text-xs text-outline mt-0.5 font-mono">
                                                <span class="material-symbols-outlined text-xs">link</span>
                                                /seating/ergonomic-task
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-4">
                                    <p class="text-on-surface-variant line-clamp-2 text-sm leading-relaxed">
                                        High-performance office chairs, mesh synchro-tilt mechanisms, and adjustable
                                        lumbar solutions designed for 24/7 commercial desk environments.
                                    </p>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-2">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input checked="" class="sr-only peer" type="checkbox" />
                                            <div
                                                class="w-9 h-5 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-tertiary-container">
                                            </div>
                                        </label>
                                        <span
                                            class="px-2 py-0.5 rounded-full text-xs font-semibold bg-tertiary-fixed text-on-tertiary-fixed-variant">Active</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <a class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-surface-container text-primary font-semibold text-xs hover:bg-surface-container-high transition-colors"
                                        href="#">
                                        <span>94 Items</span>
                                        <span class="material-symbols-outlined text-xs">arrow_forward</span>
                                    </a>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="text-xs text-on-surface font-medium">Oct 24, 2024</div>
                                    <div class="text-xs text-outline">by Elena Rostova</div>
                                </td>
                                <td class="py-4 px-4 text-right">
                                    <div class="inline-flex items-center gap-1">
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors"
                                            title="Edit Taxonomy" type="button">
                                            <span class="material-symbols-outlined text-lg">edit</span>
                                        </button>
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors"
                                            title="View in Catalog" type="button">
                                            <span class="material-symbols-outlined text-lg">open_in_new</span>
                                        </button>
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-error hover:bg-error-container/20 transition-colors"
                                            onclick="openDeleteModal('Ergonomic Task Seating', 94)"
                                            title="Delete Category" type="button">
                                            <span class="material-symbols-outlined text-lg">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 2: Executive & Standing Desks -->
                            <tr class="hover:bg-surface-container-low/60 transition-colors group">
                                <td class="py-4 px-4 text-center">
                                    <input class="rounded text-primary focus:ring-0 cursor-pointer" type="checkbox" />
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-3.5">
                                        <img class="w-14 h-14 rounded-lg object-cover bg-surface-container shrink-0 shadow-sm"
                                            data-alt="Luxury executive standing desk made of dark European oak wood with integrated cable management and matte steel legs in an executive corner suite."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBTgN738UUyMsTGUiG0N4HJ32g9JeeJVz_r87i6nXhXopz2GyxGqWnxTialoV_7MVn0sRl8lUqIy2l6N0ycOfm6IojR0gmYXq237Ezv-8otBZUah4aU2KejOL0VVnr9v3SEQgZrl4bAIvnxcfunOhbGhrvyb9-SloXopKUYiQ5bk9nWMj_RjbuL8nfqo6s5qYaIIJuCuQYReS8b4hrYISM1C3nKM1WJS6K4EMaCLvD3" />
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="font-title-lg text-title-lg font-semibold text-primary group-hover:text-primary-container transition-colors">Executive
                                                    &amp; Standing Desks</span>
                                                <span
                                                    class="bg-surface-container-high px-2 py-0.5 rounded text-xs text-primary font-medium">5
                                                    Subcats</span>
                                            </div>
                                            <div class="flex items-center gap-1.5 text-xs text-outline mt-0.5 font-mono">
                                                <span class="material-symbols-outlined text-xs">link</span>
                                                /desks/executive-standing
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-4">
                                    <p class="text-on-surface-variant line-clamp-2 text-sm leading-relaxed">
                                        Height-adjustable motorized dual-motor workstations, walnut veneer statement
                                        credenzas, and integrated power distribution hubs.
                                    </p>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-2">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input checked="" class="sr-only peer" type="checkbox" />
                                            <div
                                                class="w-9 h-5 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-tertiary-container">
                                            </div>
                                        </label>
                                        <span
                                            class="px-2 py-0.5 rounded-full text-xs font-semibold bg-tertiary-fixed text-on-tertiary-fixed-variant">Active</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <a class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-surface-container text-primary font-semibold text-xs hover:bg-surface-container-high transition-colors"
                                        href="#">
                                        <span>68 Items</span>
                                        <span class="material-symbols-outlined text-xs">arrow_forward</span>
                                    </a>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="text-xs text-on-surface font-medium">Oct 19, 2024</div>
                                    <div class="text-xs text-outline">by Marcus Vance</div>
                                </td>
                                <td class="py-4 px-4 text-right">
                                    <div class="inline-flex items-center gap-1">
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors"
                                            title="Edit Taxonomy" type="button">
                                            <span class="material-symbols-outlined text-lg">edit</span>
                                        </button>
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors"
                                            title="View in Catalog" type="button">
                                            <span class="material-symbols-outlined text-lg">open_in_new</span>
                                        </button>
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-error hover:bg-error-container/20 transition-colors"
                                            onclick="openDeleteModal('Executive &amp; Standing Desks', 68)"
                                            title="Delete Category" type="button">
                                            <span class="material-symbols-outlined text-lg">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 3: Conference & Boardroom Tables -->
                            <tr class="hover:bg-surface-container-low/60 transition-colors group">
                                <td class="py-4 px-4 text-center">
                                    <input class="rounded text-primary focus:ring-0 cursor-pointer" type="checkbox" />
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-3.5">
                                        <img class="w-14 h-14 rounded-lg object-cover bg-surface-container shrink-0 shadow-sm"
                                            data-alt="Massive 16-person minimalist boardroom conference table in white statuario marble with brushed brass wire troughs and ambient soft room lighting."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQojYHXRMJ5ntMgZngHV11qdUBpEnkMSnZfoZVtg7hLOHGRuSqvUul02tlGfZF3eonOcAEFDzwsmPygHCafKRjXIGXkf20p1BjwO2LFDlYNznvVjEg6PqCLPFlrfzpJILJqDIfOru9DbgUxO_0_X8LhSCczL9UC-nehtajCdPD7fG78ehKtfFxow2KaOp6wtIiLA88TxY0TJLzx73xcubdPNsd_MyYqcv50GP-dGEK" />
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="font-title-lg text-title-lg font-semibold text-primary group-hover:text-primary-container transition-colors">Conference
                                                    &amp; Boardroom Tables</span>
                                                <span
                                                    class="bg-surface-container-high px-2 py-0.5 rounded text-xs text-primary font-medium">4
                                                    Subcats</span>
                                            </div>
                                            <div class="flex items-center gap-1.5 text-xs text-outline mt-0.5 font-mono">
                                                <span class="material-symbols-outlined text-xs">link</span>
                                                /tables/boardroom-conference
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-4">
                                    <p class="text-on-surface-variant line-clamp-2 text-sm leading-relaxed">
                                        Bespoke solid timber and stone slab conference systems with integrated AV
                                        pass-through and modular expansion joints.
                                    </p>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-2">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input checked="" class="sr-only peer" type="checkbox" />
                                            <div
                                                class="w-9 h-5 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-tertiary-container">
                                            </div>
                                        </label>
                                        <span
                                            class="px-2 py-0.5 rounded-full text-xs font-semibold bg-tertiary-fixed text-on-tertiary-fixed-variant">Active</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <a class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-surface-container text-primary font-semibold text-xs hover:bg-surface-container-high transition-colors"
                                        href="#">
                                        <span>42 Items</span>
                                        <span class="material-symbols-outlined text-xs">arrow_forward</span>
                                    </a>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="text-xs text-on-surface font-medium">Oct 12, 2024</div>
                                    <div class="text-xs text-outline">by Elena Rostova</div>
                                </td>
                                <td class="py-4 px-4 text-right">
                                    <div class="inline-flex items-center gap-1">
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors"
                                            title="Edit Taxonomy" type="button">
                                            <span class="material-symbols-outlined text-lg">edit</span>
                                        </button>
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors"
                                            title="View in Catalog" type="button">
                                            <span class="material-symbols-outlined text-lg">open_in_new</span>
                                        </button>
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-error hover:bg-error-container/20 transition-colors"
                                            onclick="openDeleteModal('Conference &amp; Boardroom Tables', 42)"
                                            title="Delete Category" type="button">
                                            <span class="material-symbols-outlined text-lg">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 4: Acoustic Work Pods -->
                            <tr class="hover:bg-surface-container-low/60 transition-colors group">
                                <td class="py-4 px-4 text-center">
                                    <input class="rounded text-primary focus:ring-0 cursor-pointer" type="checkbox" />
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-3.5">
                                        <img class="w-14 h-14 rounded-lg object-cover bg-surface-container shrink-0 shadow-sm"
                                            data-alt="Soundproof architectural acoustic office phone booth pod with tempered glass door, warm natural birch wood interior, and integrated LED task lighting."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWDjxavGkGJDtPitYDskImoCQz3ffH0Y7FItkEZMueRGBHBdhSKCvXdUcTCbBgywWqEZL1LnnMQ5nUYXU--Lc1t6PeO3kvjc41ab4nU2KlggslQXUUr0cwDGNiKf3xznNLFLrvOIICoJQ_NV38bchmhypHGXiuImU8DfzQR378c7fg26-66Axa8yJP8G5QpriRYKxbkLt7lKrQ_Nk_kMO4Abj8IB_dDhHHKE6B69mY" />
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="font-title-lg text-title-lg font-semibold text-primary group-hover:text-primary-container transition-colors">Acoustic
                                                    Work Pods</span>
                                                <span
                                                    class="bg-surface-container-high px-2 py-0.5 rounded text-xs text-primary font-medium">3
                                                    Subcats</span>
                                            </div>
                                            <div class="flex items-center gap-1.5 text-xs text-outline mt-0.5 font-mono">
                                                <span class="material-symbols-outlined text-xs">link</span>
                                                /spaces/acoustic-pods
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-4">
                                    <p class="text-on-surface-variant line-clamp-2 text-sm leading-relaxed">
                                        Micro-architectural phone booths, 4-person collaborative meeting pods, and
                                        high-attenuation felt spatial dividers.
                                    </p>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-2">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input class="sr-only peer" type="checkbox" />
                                            <div
                                                class="w-9 h-5 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-secondary">
                                            </div>
                                        </label>
                                        <span
                                            class="px-2 py-0.5 rounded-full text-xs font-semibold bg-secondary-container text-on-secondary-container">Draft</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <a class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-surface-container text-primary font-semibold text-xs hover:bg-surface-container-high transition-colors"
                                        href="#">
                                        <span>27 Items</span>
                                        <span class="material-symbols-outlined text-xs">arrow_forward</span>
                                    </a>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="text-xs text-on-surface font-medium">Sep 30, 2024</div>
                                    <div class="text-xs text-outline">by David Chen</div>
                                </td>
                                <td class="py-4 px-4 text-right">
                                    <div class="inline-flex items-center gap-1">
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors"
                                            title="Edit Taxonomy" type="button">
                                            <span class="material-symbols-outlined text-lg">edit</span>
                                        </button>
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors"
                                            title="View in Catalog" type="button">
                                            <span class="material-symbols-outlined text-lg">open_in_new</span>
                                        </button>
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-error hover:bg-error-container/20 transition-colors"
                                            onclick="openDeleteModal('Acoustic Work Pods', 27)" title="Delete Category"
                                            type="button">
                                            <span class="material-symbols-outlined text-lg">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 5: Modular Storage & Filing -->
                            <tr class="hover:bg-surface-container-low/60 transition-colors group">
                                <td class="py-4 px-4 text-center">
                                    <input class="rounded text-primary focus:ring-0 cursor-pointer" type="checkbox" />
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-3.5">
                                        <img class="w-14 h-14 rounded-lg object-cover bg-surface-container shrink-0 shadow-sm"
                                            data-alt="Modular minimalist architectural office metal and wood open shelving system holding design books and indoor plants in an open loft office."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDq6aXr0F9ZGyLv3OVCsKl4UX75VlOtuL-CAUQKuV1gqOM98hHQnRaU-APa3s511RFX_BGpz3V6rBMYzEBSb6cjO3mY-0ix9PF7yNjvqYCVJNkKInbT7BWPr1hHjevi-uZBCFaEiaWOrZvOsttKBOmKVv-1cvdXo9fW2RU17a_lUkCizE9jgP_3daYiPGYmzKSleIWeWG0KT1ORbumk9yIm97YWNWmg5noXkP4tHT6s" />
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="font-title-lg text-title-lg font-semibold text-primary group-hover:text-primary-container transition-colors">Modular
                                                    Storage &amp; Filing</span>
                                                <span
                                                    class="bg-surface-container-high px-2 py-0.5 rounded text-xs text-primary font-medium">6
                                                    Subcats</span>
                                            </div>
                                            <div class="flex items-center gap-1.5 text-xs text-outline mt-0.5 font-mono">
                                                <span class="material-symbols-outlined text-xs">link</span>
                                                /storage/modular-filing
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-4">
                                    <p class="text-on-surface-variant line-clamp-2 text-sm leading-relaxed">
                                        Grid-based open shelving systems, locked personal pedestals, and architectural
                                        partition planters with powder-coat finishes.
                                    </p>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-2">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input checked="" class="sr-only peer" type="checkbox" />
                                            <div
                                                class="w-9 h-5 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-tertiary-container">
                                            </div>
                                        </label>
                                        <span
                                            class="px-2 py-0.5 rounded-full text-xs font-semibold bg-tertiary-fixed text-on-tertiary-fixed-variant">Active</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <a class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-surface-container text-primary font-semibold text-xs hover:bg-surface-container-high transition-colors"
                                        href="#">
                                        <span>73 Items</span>
                                        <span class="material-symbols-outlined text-xs">arrow_forward</span>
                                    </a>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="text-xs text-on-surface font-medium">Aug 14, 2024</div>
                                    <div class="text-xs text-outline">by Marcus Vance</div>
                                </td>
                                <td class="py-4 px-4 text-right">
                                    <div class="inline-flex items-center gap-1">
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors"
                                            title="Edit Taxonomy" type="button">
                                            <span class="material-symbols-outlined text-lg">edit</span>
                                        </button>
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors"
                                            title="View in Catalog" type="button">
                                            <span class="material-symbols-outlined text-lg">open_in_new</span>
                                        </button>
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-error hover:bg-error-container/20 transition-colors"
                                            onclick="openDeleteModal('Modular Storage &amp; Filing', 73)"
                                            title="Delete Category" type="button">
                                            <span class="material-symbols-outlined text-lg">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 6: Architectural Lighting -->
                            <tr class="hover:bg-surface-container-low/60 transition-colors group">
                                <td class="py-4 px-4 text-center">
                                    <input class="rounded text-primary focus:ring-0 cursor-pointer" type="checkbox" />
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-3.5">
                                        <img class="w-14 h-14 rounded-lg object-cover bg-surface-container shrink-0 shadow-sm"
                                            data-alt="Suspended linear architectural office pendant luminaire fixture emitting warm 3000K diffuse illumination over an open collaborative desk."
                                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAT24UDpqKwSIcSpYdKOgLd6tG9AvDsBvMsFPkrvZp8EofO9Fu75Dj36wWklh9UyDDyKbPKPbK1fjREOmSfcccAyVQ_Zo3eSlVgZxw5utp5V4hKwcJ06H2gfN0whTgl3xVJXIgoE-0KT3NgIFlfFxx5Tf8C-xgaGFaoHjpXXQOVf8JOnlHypjMiEHhjXH9lObiPkGnD_ni-0NZWfp-4sFBWimt0L6-u0FjAoWZ_zD-w" />
                                        <div>
                                            <div class="flex items-center gap-2">
                                                <span
                                                    class="font-title-lg text-title-lg font-semibold text-primary group-hover:text-primary-container transition-colors">Architectural
                                                    Lighting</span>
                                                <span
                                                    class="bg-surface-container-high px-2 py-0.5 rounded text-xs text-primary font-medium">4
                                                    Subcats</span>
                                            </div>
                                            <div class="flex items-center gap-1.5 text-xs text-outline mt-0.5 font-mono">
                                                <span class="material-symbols-outlined text-xs">link</span>
                                                /lighting/architectural-linear
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-4 px-4">
                                    <p class="text-on-surface-variant line-clamp-2 text-sm leading-relaxed">
                                        Linear suspended profiles, glare-free ambient acoustic luminaires, and
                                        DALI-addressable workstation task lamps.
                                    </p>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="flex items-center gap-2">
                                        <label class="relative inline-flex items-center cursor-pointer">
                                            <input class="sr-only peer" type="checkbox" />
                                            <div
                                                class="w-9 h-5 bg-outline-variant peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-outline">
                                            </div>
                                        </label>
                                        <span
                                            class="px-2 py-0.5 rounded-full text-xs font-semibold bg-surface-container text-outline">Archived</span>
                                    </div>
                                </td>
                                <td class="py-4 px-4 text-center">
                                    <a class="inline-flex items-center gap-1 px-2.5 py-1 rounded bg-surface-container text-primary font-semibold text-xs hover:bg-surface-container-high transition-colors"
                                        href="#">
                                        <span>38 Items</span>
                                        <span class="material-symbols-outlined text-xs">arrow_forward</span>
                                    </a>
                                </td>
                                <td class="py-4 px-4">
                                    <div class="text-xs text-on-surface font-medium">Jul 02, 2024</div>
                                    <div class="text-xs text-outline">by Elena Rostova</div>
                                </td>
                                <td class="py-4 px-4 text-right">
                                    <div class="inline-flex items-center gap-1">
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors"
                                            title="Edit Taxonomy" type="button">
                                            <span class="material-symbols-outlined text-lg">edit</span>
                                        </button>
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors"
                                            title="View in Catalog" type="button">
                                            <span class="material-symbols-outlined text-lg">open_in_new</span>
                                        </button>
                                        <button
                                            class="p-2 rounded text-on-surface-variant hover:text-error hover:bg-error-container/20 transition-colors"
                                            onclick="openDeleteModal('Architectural Lighting', 38)"
                                            title="Delete Category" type="button">
                                            <span class="material-symbols-outlined text-lg">delete</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Table Footer / Pagination -->
                <div class="p-4 bg-surface-container-lowest flex flex-col sm:flex-row items-center justify-between gap-4">
                    <div class="flex items-center gap-3 text-xs text-on-surface-variant">
                        <span>Rows per page:</span>
                        <select
                            class="bg-surface-container-low px-2 py-1 rounded text-on-surface font-medium focus:outline-none">
                            <option>6</option>
                            <option>12</option>
                            <option>24</option>
                        </select>
                        <span>Showing 1 - 6 of 18 categories</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <button
                            class="p-2 rounded text-outline hover:text-primary hover:bg-surface-container-low transition-colors disabled:opacity-40"
                            disabled="" type="button">
                            <span class="material-symbols-outlined text-base">first_page</span>
                        </button>
                        <button
                            class="p-2 rounded text-outline hover:text-primary hover:bg-surface-container-low transition-colors disabled:opacity-40"
                            disabled="" type="button">
                            <span class="material-symbols-outlined text-base">chevron_left</span>
                        </button>
                        <button class="px-3 py-1.5 rounded bg-primary text-on-primary font-semibold text-xs shadow-sm"
                            type="button">1</button>
                        <button
                            class="px-3 py-1.5 rounded text-on-surface-variant hover:bg-surface-container-low font-medium text-xs transition-colors"
                            type="button">2</button>
                        <button
                            class="px-3 py-1.5 rounded text-on-surface-variant hover:bg-surface-container-low font-medium text-xs transition-colors"
                            type="button">3</button>
                        <button
                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors"
                            type="button">
                            <span class="material-symbols-outlined text-base">chevron_right</span>
                        </button>
                        <button
                            class="p-2 rounded text-on-surface-variant hover:text-primary hover:bg-surface-container-low transition-colors"
                            type="button">
                            <span class="material-symbols-outlined text-base">last_page</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Interactive Safeguard Delete Modal Overlay -->
            <div class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-on-background/40 backdrop-blur-sm transition-all duration-300"
                id="deleteConfirmModal">
                <div
                    class="bg-surface-container-lowest max-w-lg w-full rounded-xl shadow-2xl p-6 relative animate-in fade-in zoom-in-95">
                    <div class="flex items-start gap-4">
                        <div
                            class="w-12 h-12 rounded-full bg-error-container/40 text-error flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined text-2xl">warning</span>
                        </div>
                        <div class="flex-1">
                            <h2 class="font-headline-md text-headline-md font-bold text-on-surface">Delete Category?
                            </h2>
                            <p class="font-body-md text-body-md text-on-surface-variant mt-1.5">
                                You are initiating the removal of <span class="font-semibold text-primary"
                                    id="modalCategoryTarget">"Executive &amp; Standing Desks"</span> from OfficeLux
                                active catalog.
                            </p>
                        </div>
                    </div>
                    <!-- Impact Breakdown Notice -->
                    <div class="mt-4 p-4 rounded-lg bg-surface-container-low">
                        <div class="flex items-center justify-between text-xs font-semibold text-on-surface mb-2">
                            <span>Assigned Inventory Impact</span>
                            <span class="text-error font-bold" id="modalProductCount">68 Products Linked</span>
                        </div>
                        <p class="text-xs text-on-surface-variant leading-relaxed mb-3">
                            Deleting this category will orphan all associated SKUs. Choose a fallback taxonomy
                            destination to reassign active stock:
                        </p>
                        <div class="flex items-center gap-2">
                            <label class="text-xs text-on-surface-variant font-medium shrink-0">Reassign to:</label>
                            <select
                                class="w-full bg-surface-container-lowest px-3 py-1.5 rounded text-xs font-medium text-on-surface focus:outline-none shadow-sm">
                                <option>Uncategorized / Pending Taxonomy</option>
                                <option>Archived Collections</option>
                                <option>Ergonomic Task Seating</option>
                            </select>
                        </div>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex items-center justify-end gap-3 mt-6 pt-3">
                        <button
                            class="px-4 py-2 rounded bg-surface-container-low text-on-surface font-label-md text-label-md hover:bg-surface-container transition-colors"
                            onclick="closeDeleteModal()" type="button">
                            Cancel &amp; Retain
                        </button>
                        <button
                            class="px-5 py-2 rounded bg-error text-on-error font-label-md text-label-md shadow hover:bg-error/90 transition-all flex items-center"
                            onclick="executeMockDelete()" type="button">
                            <span class="material-symbols-outlined text-base mr-1.5">delete_forever</span>
                            Confirm Delete
                        </button>
                    </div>
                    <button class="absolute top-4 right-4 text-outline hover:text-on-surface p-1 rounded transition-colors"
                        onclick="closeDeleteModal()" type="button">
                        <span class="material-symbols-outlined text-lg">close</span>
                    </button>
                </div>
            </div>
            <!-- Offcanvas Drawer Preview for Quick Category Creation -->
            <div class="hidden fixed inset-y-0 right-0 w-full sm:w-[460px] bg-surface-container-lowest shadow-2xl z-40 p-6 flex flex-col justify-between overflow-y-auto"
                id="newCategoryDrawer">
                <div>
                    <div class="flex items-center justify-between pb-4">
                        <div>
                            <span class="font-label-md text-label-md uppercase text-primary font-semibold">New
                                Entry</span>
                            <h2 class="font-headline-md text-headline-md font-bold text-on-surface">Create Category
                            </h2>
                        </div>
                        <button class="p-1 rounded text-outline hover:text-on-surface"
                            onclick="document.getElementById('newCategoryDrawer').classList.add('hidden')">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>
                    <div class="space-y-4 mt-4">
                        <div>
                            <label
                                class="block font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-1">Category
                                Name *</label>
                            <input
                                class="w-full px-3.5 py-2.5 rounded bg-surface-container-low text-on-surface font-body-md text-body-md input-focus-glow"
                                placeholder="e.g., Lounge &amp; Soft Seating" type="text" />
                        </div>
                        <div>
                            <label
                                class="block font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-1">Slug
                                URL Identifier</label>
                            <div class="flex items-center bg-surface-container-low rounded px-3 py-2">
                                <span class="text-xs text-outline font-mono mr-1">/catalog/</span>
                                <input class="bg-transparent text-xs font-mono text-on-surface w-full focus:outline-none"
                                    placeholder="lounge-soft-seating" type="text" />
                            </div>
                        </div>
                        <div>
                            <label
                                class="block font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-1">Scope
                                Description</label>
                            <textarea
                                class="w-full px-3.5 py-2.5 rounded bg-surface-container-low text-on-surface font-body-md text-body-md input-focus-glow"
                                placeholder="Provide curated architectural scope for this furniture family..." rows="3"></textarea>
                        </div>
                        <div>
                            <label
                                class="block font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-1">Taxonomy
                                Banner Asset</label>
                            <div
                                class="p-6 rounded-lg bg-surface-container-low flex flex-col items-center justify-center text-center cursor-pointer hover:bg-surface-container transition-colors">
                                <span class="material-symbols-outlined text-3xl text-primary mb-2">cloud_upload</span>
                                <span class="font-label-md text-label-md text-on-surface">Drop high-res editorial photo
                                    here</span>
                                <span class="text-xs text-outline mt-0.5">PNG, WEBP or JPG up to 10MB (2400x1200
                                    recommended)</span>
                            </div>
                        </div>
                        <div>
                            <label
                                class="block font-label-md text-label-md text-on-surface-variant uppercase tracking-wider mb-1">Initial
                                Visibility</label>
                            <div class="grid grid-cols-2 gap-2">
                                <label
                                    class="flex items-center p-3 rounded bg-surface-container-low cursor-pointer hover:bg-surface-container">
                                    <input checked="" class="text-primary focus:ring-0 mr-2" name="init_status"
                                        type="radio" />
                                    <span class="font-label-md text-label-md text-on-surface">Active Live</span>
                                </label>
                                <label
                                    class="flex items-center p-3 rounded bg-surface-container-low cursor-pointer hover:bg-surface-container">
                                    <input class="text-primary focus:ring-0 mr-2" name="init_status" type="radio" />
                                    <span class="font-label-md text-label-md text-on-surface">Draft Staged</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-6 flex items-center justify-end gap-3">
                    <button
                        class="px-4 py-2 rounded bg-surface-container-low text-on-surface font-label-md text-label-md hover:bg-surface-container"
                        onclick="document.getElementById('newCategoryDrawer').classList.add('hidden')">
                        Cancel
                    </button>
                    <button
                        class="px-5 py-2 rounded bg-primary text-on-primary font-label-md text-label-md shadow hover:bg-primary-container"
                        onclick="document.getElementById('newCategoryDrawer').classList.add('hidden')">
                        Publish Category
                    </button>
                </div>
            </div>
            <script>
                function openDeleteModal(categoryName, productCount) {
                    document.getElementById('modalCategoryTarget').innerText = '"' + categoryName + '"';
                    document.getElementById('modalProductCount').innerText = productCount + ' Products Linked';
                    document.getElementById('deleteConfirmModal').classList.remove('hidden');
                }

                function closeDeleteModal() {
                    document.getElementById('deleteConfirmModal').classList.add('hidden');
                }

                function executeMockDelete() {
                    const modal = document.getElementById('deleteConfirmModal');
                    modal.classList.add('hidden');
                    alert('Selected Category safely unlinked and decommissioned.');
                }

                // Instant local filter for category rows
                document.getElementById('categoryFilterInput')?.addEventListener('input', function(e) {
                    const term = e.target.value.toLowerCase();
                    const rows = document.querySelectorAll('tbody tr');
                    rows.forEach(row => {
                        const text = row.innerText.toLowerCase();
                        row.style.display = text.includes(term) ? '' : 'none';
                    });
                });
            </script>
        </div>
    </div>
@endsection
