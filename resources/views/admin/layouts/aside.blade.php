@php
    $active =
        'flex items-center gap-3.5 px-3.5 py-2.5 rounded-lg text-primary font-semibold bg-blue-50/80 border-r-2 border-primary transition-all duration-150';
    $inactive =
        'flex items-center gap-3.5 px-3.5 py-2.5 rounded-lg text-slate-600 hover:text-primary hover:bg-slate-50 font-medium transition-colors';
@endphp
<!-- SideNavBar (Predicted JSON Component) -->
<aside class="fixed left-0 top-0 h-screen w-[260px] bg-surface border-r border-outline-variant flex flex-col py-md z-40">
    <div class="px-md mb-xl">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center text-on-primary">
                <span class="material-symbols-outlined">factory</span>
            </div>
            <div>
                <h1 class="font-headline-sm text-headline-sm font-bold text-primary">IndustrialOS</h1>
                <p class="text-xs text-on-surface-variant font-medium">Plant v1.0.0</p>
            </div>
        </div>
    </div>
    <nav class="flex-1 space-y-1">
        <!-- Dashboard is active -->
        @can('show dashboard')
            <a class="{{ request()->routeIs('admin.dashboard') ? $active : $inactive }}"
                href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-label-md text-label-md">Dashboard</span>
            </a>
        @endcan
        <a class="{{ request()->routeIs('admin.parts.*') ? $active : $inactive }}" href="#">
            <span class="material-symbols-outlined">settings_input_component</span>
            <span class="font-label-md text-label-md">Parts</span>
        </a>
        <a class="{{ request()->routeIs('admin.stock.*') ? $active : $inactive }}" href="#">
            <span class="material-symbols-outlined">inventory_2</span>
            <span class="font-label-md text-label-md">Stock</span>
        </a>
        <a class="{{ request()->routeIs('admin.pos.*') ? $active : $inactive }}" href="#">
            <span class="material-symbols-outlined">receipt_long</span>
            <span class="font-label-md text-label-md">POs</span>
        </a>
        <a class="{{ request()->routeIs('admin.quality.*') ? $active : $inactive }}" href="#">
            <span class="material-symbols-outlined">verified</span>
            <span class="font-label-md text-label-md">Quality</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200"
            href="#">
            <span class="material-symbols-outlined">assessment</span>
            <span class="font-label-md text-label-md">Reports</span>
        </a>
        <a class="flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200"
            href="#">
            <span class="material-symbols-outlined">manage_accounts</span>
            <span class="font-label-md text-label-md">User Management</span>
        </a>
        @can('show roles')
            <a class="{{ request()->routeIs('admin.roles.*') ? $active : $inactive }}"
                href="{{ route('admin.roles.index') }}">
                <span class="material-symbols-outlined">admin_panel_settings</span>
                <span class="font-label-md text-label-md">Roles</span>
            </a>
        @endcan
    </nav>
    <div class="px-md mt-auto pt-md border-t border-outline-variant">
        <div class="flex items-center gap-3 p-2 bg-surface-container-low rounded-xl">
            <img class="w-10 h-10 rounded-full object-cover"
                data-alt="A professional headshot of a plant manager in high-visibility safety gear with a modern factory backdrop. The lighting is bright and clear, reflecting a high-end corporate environment. The image uses professional color grading with subtle blue and gray tones, aligning with an industrial software interface."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD0zBkZlKsG0CcOVDvReoGtT-7X3aTSu01mbU3GadVJIePZQ3M-ANNDFQb_pTUktFP4im1D0nQYF4ykPJZvJVjSisknmvotkoYY2UjK31HiOnCUr7Z2YTAvrW1rq_NQp6YS6s9N-J-k8V7mkKIOmyE4zbgOOwT5zNYIrSDQM8H7H6BqOBx4C47VlayJrcVi83ri5vAAKAAOqA3XsO9GPjPH44lRz6XGy813sr3dzMaxIhf4fZEM3NKw" />
            <div class="overflow-hidden">
                <p class="text-sm font-bold truncate"> {{ auth()->user()->name }} </p>
                <p class="text-xs text-on-surface-variant truncate">Plant Manager</p>
            </div>
            <form method="POST" action="{{ route('admin.logout') }}" class="ml-auto">
                @csrf
                <button type="submit" class="text-on-surface-variant hover:text-primary">
                    <span class="material-symbols-outlined">logout</span>
                </button>
            </form>
        </div>
    </div>
</aside>

<!-- SideNavBar -->
<nav class="hidden md:flex bg-white h-screen w-64 fixed left-0 top-0 border-r border-slate-200 flex-col z-50">
    <!-- Brand / Header -->
    <div class="px-6 py-6 border-b border-slate-100">
        <h1 class="font-headline-md text-[21px] leading-tight font-bold text-primary tracking-tight">OfficeDesign Pro
        </h1>
        <p class="font-label-md text-xs text-slate-500 mt-1 uppercase tracking-wider font-semibold">Admin Console</p>
    </div>
    <!-- Navigation Links -->
    <ul class="flex flex-col gap-1.5 px-3 py-5 flex-grow">
        <!-- Dashboard (Active) -->
        <li>
            <a class="{{ request()->routeIs('admin.dashboard') ? $active : $inactive }}"
                href="{{ route('admin.dashboard') }}">
                <span class="material-symbols-outlined text-primary"
                    style="font-variation-settings: 'FILL' 1;">dashboard</span>
                <span class="text-sm">Dashboard</span>
            </a>
        </li>
        <!-- Products -->
        <li>
            <a class="{{ request()->routeIs('admin.products.*') ? $active : $inactive }}"
                href="{{ route('admin.products.index') }}">
                <span class="material-symbols-outlined text-slate-400 group-hover:text-primary">chair</span>
                <span class="text-sm">Products</span>
            </a>
        </li>
        <!-- Categories -->
        <li>
            <a class="flex items-center gap-3.5 px-3.5 py-2.5 rounded-lg text-slate-600 hover:text-primary hover:bg-slate-50 font-medium transition-colors"
                href="#">
                <span class="material-symbols-outlined text-slate-400">category</span>
                <span class="text-sm">Categories</span>
            </a>
        </li>
        <!-- Quotations -->
        <li>
            <a class="flex items-center gap-3.5 px-3.5 py-2.5 rounded-lg text-slate-600 hover:text-primary hover:bg-slate-50 font-medium transition-colors"
                href="#">
                <span class="material-symbols-outlined text-slate-400">description</span>
                <span class="text-sm">Quotations</span>
            </a>
        </li>
        <!-- Customers -->
        <li>
            <a class="{{ request()->routeIs('admin.companies.*') ? $active : $inactive }}"
                href="{{ route('admin.companies.index') }}">
                <span class="material-symbols-outlined text-slate-400">group</span>
                <span class="text-sm">Companies</span>
            </a>
        </li>
        <!-- Settings -->
        <li class="mt-auto">
            <a class="flex items-center gap-3.5 px-3.5 py-2.5 rounded-lg text-slate-600 hover:text-primary hover:bg-slate-50 font-medium transition-colors"
                href="#">
                <span class="material-symbols-outlined text-slate-400">settings</span>
                <span class="text-sm">Settings</span>
            </a>
        </li>
    </ul>
    <!-- User Profile Avatar area at bottom -->
    <div class="p-4 border-t border-slate-100 flex items-center gap-3 bg-slate-50/50">
        <img alt="User profile" class="w-9 h-9 rounded-full object-cover border border-slate-200 shadow-sm"
            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdzE9NVKB9tekTx0_i8ajkUpJPnSvMVVrZYSgge8_Dvr-sgRcMK7YO7vv7uSDwoJf4nOy9SleuGQR91hOzYSyCbl68o4-0qClOU5w5x-7vxh0Ckn2kJl49RuHWOTDOEnjAPf-kJsjTfn3T4AnbylTphvOgqUTwkdO1pdbFxTp3XariLiC8etr2b_W0re-GVEK6sbqJllQcAzCUQB2MxSyAmK7fmI3dplzsVQKAqzv8vN8cJd-Dfv-X7Q" />
        <div class="flex flex-col min-w-0 flex-1">
            <span class="text-xs font-semibold text-slate-900 truncate">  {{ auth()->user()->name }} </span>
            <span class="text-[11px] text-slate-500 truncate">admin@officedesign.pro</span>
        </div>
        <form method="POST" action="{{ route('admin.logout') }}" class="ml-auto">
            @csrf
            <button type="submit" class="text-on-surface-variant hover:text-primary">
                <span class="material-symbols-outlined">logout</span>
            </button>
        </form>
    </div>
</nav>
