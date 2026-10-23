

<body class="bg-surface text-on-surface font-body-md min-h-screen overflow-x-hidden">
    <!-- SideNavBar (Desktop Only based on layout logic, though hidden md:block is usually standard, following strict instruction: fixed left-0 top-0) -->
    <nav
        class="hidden md:flex bg-surface h-screen w-64 fixed left-0 top-0 border-r border-outline-variant flex-col py-base z-50">
        <!-- Brand Area -->
        <div class="px-6 py-6 mb-4">
            <h1 class="font-headline-md text-headline-md font-bold text-primary tracking-tight">OfficeDesign Pro</h1>
            <p class="font-label-md text-label-md text-on-surface-variant mt-1">Admin Console</p>
        </div>
        <!-- Navigation Links -->
        <div class="flex-1 overflow-y-auto px-4 space-y-2">
            <a class="flex items-center gap-3 px-4 py-3 rounded-DEFAULT text-on-surface-variant hover:bg-surface-container-low transition-all duration-200 ease-in-out font-label-md text-label-md"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                Dashboard
            </a>
            <!-- ACTIVE TAB: Products -->
            <a class="flex items-center gap-3 px-4 py-3 rounded-DEFAULT text-primary font-bold border-r-2 border-primary bg-surface-container-high transition-all duration-200 ease-in-out font-label-md text-label-md"
                href="#">
                <span class="material-symbols-outlined" data-icon="chair" data-weight="fill">chair</span>
                Products
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-DEFAULT text-on-surface-variant hover:bg-surface-container-low transition-all duration-200 ease-in-out font-label-md text-label-md"
                href="#">
                <span class="material-symbols-outlined" data-icon="category">category</span>
                Categories
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-DEFAULT text-on-surface-variant hover:bg-surface-container-low transition-all duration-200 ease-in-out font-label-md text-label-md"
                href="#">
                <span class="material-symbols-outlined" data-icon="description">description</span>
                Quotations
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-DEFAULT text-on-surface-variant hover:bg-surface-container-low transition-all duration-200 ease-in-out font-label-md text-label-md"
                href="#">
                <span class="material-symbols-outlined" data-icon="group">group</span>
                Customers
            </a>
            <a class="flex items-center gap-3 px-4 py-3 rounded-DEFAULT text-on-surface-variant hover:bg-surface-container-low transition-all duration-200 ease-in-out font-label-md text-label-md"
                href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                Settings
            </a>
        </div>
        <!-- User Profile Area at Bottom -->
        <div class="mt-auto p-4 border-t border-outline-variant/50">
            <div class="flex items-center gap-3 px-2 py-2">
                <img alt="User profile" class="w-10 h-10 rounded-full object-cover border border-outline-variant"
                    data-alt="A professional headshot of an interior designer or corporate admin, smiling slightly in a bright, modern office setting with natural light, clean minimal background, corporate modern luxury style."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAU6hyRx6Y3KUSGO3lm5Mpr0kJ2VWsILXEEpeb6e4E6PCB7uWuQ3ymXRBuSmjk_wsAAegC4JqekIsyJP6I_HjKfnUly9dHA1EMTM8QOF6sHHCfB8NtXhhslcLJDZQVeemCQxeR-tsSK8OZSA0KaNnzV1-Xr3FaTFBPDq-vY9FrN94yn-LMqYwGQkrM15AfkYk-z4gPY11MvzAnV-AEldqTg4NiCwYW70RvuX37cteMRaEwtsp0UexqldA" />
                <div>
                    <p class="font-label-md text-label-md text-on-surface">Jane Doe</p>
                    <p class="text-[10px] text-on-surface-variant">Admin</p>
                </div>
            </div>
        </div>
    </nav>
    <!-- TopNavBar -->
    <header
        class="hidden md:flex justify-between items-center px-margin-desktop h-20 ml-64 bg-surface-container-lowest docked full-width top-0 z-40 shadow-sm border-b border-outline-variant">
        <!-- Left: Search (from JSON config) -->
        <div class="flex-1 max-w-md relative">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">search</span>
            <input
                class="w-full pl-10 pr-4 py-2 bg-surface border border-outline-variant rounded-DEFAULT focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary/20 font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant transition-all"
                placeholder="Search products, SKUs..." type="text" />
        </div>
        <!-- Right: Actions -->
        <div class="flex items-center gap-6">
            <!-- Trailing Primary Action -->
            <button
                class="bg-primary text-on-primary font-label-md text-label-md px-4 py-2 rounded-DEFAULT hover:bg-primary/90 transition-colors shadow-sm flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px]">add</span>
                New Quotation
            </button>
            <!-- Trailing Icon Actions -->
            <div class="flex items-center gap-4 text-on-surface-variant">
                <button class="hover:text-primary transition-colors relative">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                    <span class="absolute top-0 right-0 w-2 h-2 bg-error rounded-full"></span>
                </button>
                <button class="hover:text-primary transition-colors">
                    <span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
                </button>
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="md:ml-64 pt-20 md:pt-6 p-margin-mobile md:p-margin-desktop max-w-container-max mx-auto transition-all">
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
            <div class="flex flex-wrap items-center gap-3">
                <!-- Filter Selects -->
                <div class="relative">
                    <select
                        class="appearance-none bg-surface-container-lowest border border-outline-variant rounded-DEFAULT px-4 py-2 pr-10 font-label-md text-label-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary cursor-pointer hover:bg-surface-container-low transition-colors">
                        <option value="">All Categories</option>
                        <option value="executive">Executive Chairs</option>
                        <option value="workstations">Workstations</option>
                        <option value="storage">Storage Solutions</option>
                        <option value="lounge">Lounge &amp; Reception</option>
                    </select>
                    <span
                        class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant text-sm">expand_more</span>
                </div>
                <div class="relative">
                    <select
                        class="appearance-none bg-surface-container-lowest border border-outline-variant rounded-DEFAULT px-4 py-2 pr-10 font-label-md text-label-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary cursor-pointer hover:bg-surface-container-low transition-colors">
                        <option value="">Status: All</option>
                        <option value="in_stock">In Stock</option>
                        <option value="low_stock">Low Stock</option>
                        <option value="out_of_stock">Out of Stock</option>
                    </select>
                    <span
                        class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant text-sm">expand_more</span>
                </div>
                <!-- View Toggle -->
                <div class="flex bg-surface-container-low rounded-DEFAULT p-1 border border-outline-variant">
                    <button class="p-1 rounded-sm bg-surface shadow-sm text-primary transition-all">
                        <span class="material-symbols-outlined text-[20px]">grid_view</span>
                    </button>
                    <button class="p-1 rounded-sm text-on-surface-variant hover:text-primary transition-all">
                        <span class="material-symbols-outlined text-[20px]">view_list</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Product Grid (Bento/Card Style) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-gutter">
            <!-- Product Card 1 -->
            <div
                class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-primary/50 hover:shadow-[0_4px_12px_rgba(30,58,138,0.05)] transition-all duration-300">
                <div class="relative aspect-[4/3] bg-surface-container-low overflow-hidden">
                    <img alt="Aeron Executive Chair"
                        class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                        data-alt="A high-end, ergonomic executive office chair with black mesh backing and polished aluminum base, standing alone in a bright, minimalist studio setting with soft studio lighting, showcasing corporate modern luxury style."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBhcP2dN2CO8rb95aEQcMB9v_ZBwZv9WVfPSgm03jAAsv70L8kD3H9mmgCb70Hxm1VWNe6oVQrRa7JAqVNHEwsUJCFDxesyQ7_3dJTAMrxCZKViRoPb4MW1C1scLp9tnEpunhKNkJQyTwyi5D8oclO97EQXHoMJmcg8j-J75SkqlURCUlDPHvKmty1fPb39R7f09saklozmTU3oIxFhtIo0OvN_D2wdcp2-8zNdEvM2b9pMwKGBSsL7ag" />
                    <div class="absolute top-3 left-3">
                        <span
                            class="inline-flex items-center px-2 py-1 rounded-full bg-surface/90 backdrop-blur-sm border border-outline-variant text-[10px] font-semibold text-primary uppercase tracking-wider shadow-sm">
                            In Stock
                        </span>
                    </div>
                </div>
                <div class="p-stack-md flex flex-col flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="font-title-lg text-title-lg text-on-surface truncate pr-2">Aeron Executive Chair
                        </h3>
                        <p class="font-title-lg text-title-lg text-primary">$850</p>
                    </div>
                    <p class="font-label-md text-label-md text-outline mb-4">SKU: CH-882</p>
                    <div class="mt-auto flex items-center gap-2 pt-2 border-t border-outline-variant/30">
                        <button
                            class="flex-1 bg-surface-container-low hover:bg-primary hover:text-on-primary text-primary border border-primary/20 font-label-md text-label-md py-2 rounded-DEFAULT transition-colors flex justify-center items-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
                            Add to Quotation
                        </button>
                        <button
                            class="p-2 text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-DEFAULT border border-transparent hover:border-outline-variant transition-all">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product Card 2 -->
            <div
                class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-primary/50 hover:shadow-[0_4px_12px_rgba(30,58,138,0.05)] transition-all duration-300">
                <div class="relative aspect-[4/3] bg-surface-container-low overflow-hidden">
                    <img alt="Elevate Sit-Stand Desk"
                        class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                        data-alt="A sleek, modern motorized sit-stand desk in natural oak wood finish with white metal legs, placed in a minimalist, bright office environment, highly detailed, corporate modern aesthetic."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDSdxaukUT-v6sHCcae2jngLltOQFVc2eSw_W74fRatqI-hYj13_7_csAV9XOXj4vIk5DipmCcLSPI2NZSE79Dpgd9kJNjSJB28BStkYx5xo8u8hpa0u4LKwZ9q3iOSo-KDDg4v0_usLm8ycRODXE4NKb-dpdyzwtLlsCL7uN1IZkA0etFLhdPJAJX9juQXjtVv0RRYBv9wiOimyrSu7ibM392CEiccloTgaAGByHdPnR9t5Rr6giScfA" />
                    <div class="absolute top-3 left-3">
                        <span
                            class="inline-flex items-center px-2 py-1 rounded-full bg-surface/90 backdrop-blur-sm border border-outline-variant text-[10px] font-semibold text-primary uppercase tracking-wider shadow-sm">
                            In Stock
                        </span>
                    </div>
                </div>
                <div class="p-stack-md flex flex-col flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="font-title-lg text-title-lg text-on-surface truncate pr-2">Elevate Standing Desk
                        </h3>
                        <p class="font-title-lg text-title-lg text-primary">$1,200</p>
                    </div>
                    <p class="font-label-md text-label-md text-outline mb-4">SKU: DK-104</p>
                    <div class="mt-auto flex items-center gap-2 pt-2 border-t border-outline-variant/30">
                        <button
                            class="flex-1 bg-surface-container-low hover:bg-primary hover:text-on-primary text-primary border border-primary/20 font-label-md text-label-md py-2 rounded-DEFAULT transition-colors flex justify-center items-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
                            Add to Quotation
                        </button>
                        <button
                            class="p-2 text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-DEFAULT border border-transparent hover:border-outline-variant transition-all">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product Card 3 (Out of Stock variant) -->
            <div
                class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-outline hover:shadow-[0_4px_12px_rgba(0,0,0,0.05)] transition-all duration-300 opacity-80">
                <div class="relative aspect-[4/3] bg-surface-container-low overflow-hidden grayscale-[0.3]">
                    <img alt="Modular Credenza"
                        class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                        data-alt="A premium modular credenza storage unit in dark walnut with matte black handles, photographed in a well-lit minimal corporate setting, highlighting material quality and clean lines."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCXziBU0wFLhn0QqRq6K777aYA9NrkRDqm_KSbM8mK1pu_bRfpKR6pQhRjnwyQN2wuWxXwVSJ7oSeNLPvwUBLiV4P2hL34b5SCOhO0YnspNlLG1mr_Xy9Xq2gFuAEhABCM0QUP7rS7Cd1l_hmRICv_nBhP6y9zJVp4cLjgW8m3MK2WVsU5SVfGWDZ_5Yd-1hOMGqQVThxOn_wT7TYa9hnYLoM6Ac2eFdQwMUeOaQnI6o6aI51gSFt-URA" />
                    <div class="absolute inset-0 bg-surface/20"></div>
                    <div class="absolute top-3 left-3">
                        <span
                            class="inline-flex items-center px-2 py-1 rounded-full bg-error/10 border border-error/20 text-[10px] font-semibold text-error uppercase tracking-wider backdrop-blur-sm shadow-sm">
                            Out of Stock
                        </span>
                    </div>
                </div>
                <div class="p-stack-md flex flex-col flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="font-title-lg text-title-lg text-on-surface truncate pr-2">Walnut Credenza</h3>
                        <p class="font-title-lg text-title-lg text-on-surface-variant">$1,450</p>
                    </div>
                    <p class="font-label-md text-label-md text-outline mb-4">SKU: ST-330</p>
                    <div class="mt-auto flex items-center gap-2 pt-2 border-t border-outline-variant/30">
                        <button
                            class="flex-1 bg-surface-container border border-outline-variant/50 text-outline font-label-md text-label-md py-2 rounded-DEFAULT cursor-not-allowed flex justify-center items-center gap-2"
                            disabled="">
                            <span class="material-symbols-outlined text-[16px]">notifications</span>
                            Notify Me
                        </button>
                        <button
                            class="p-2 text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-DEFAULT border border-transparent hover:border-outline-variant transition-all">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Product Card 4 (Low Stock variant) -->
            <div
                class="group bg-surface-container-lowest border border-outline-variant rounded-lg overflow-hidden flex flex-col hover:border-primary/50 hover:shadow-[0_4px_12px_rgba(30,58,138,0.05)] transition-all duration-300">
                <div class="relative aspect-[4/3] bg-surface-container-low overflow-hidden">
                    <img alt="Collaborative Pod"
                        class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-500"
                        data-alt="A modern collaborative workstation pod featuring acoustic privacy screens in a soft grey felt, accompanied by two minimalist stools, set in a bright open-plan office space, luxury corporate aesthetic."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcY8mgCUQH7dV5M6XLkrNluzsc8boL6Qq8KR1RjjkoIHjuTUbsB6BIhmaWku76anYaOXK6GzhirWN71JhY9OZBpaaQgsOu47CVvHdJb7YrMrmHfvcc4iG8ErNxrOQBi33XN8EpuRNdnjQnLsiqFy_Ymt5_mZKEf2OAPo_uSNVm9oCKbqRPtWpXt1jCgP3OdRLCdyzNfSg1-ZJimvOojgvE71VrvdcX8pRN80NzdRpLT2ZX6N_i6Xfj2g" />
                    <div class="absolute top-3 left-3">
                        <span
                            class="inline-flex items-center px-2 py-1 rounded-full bg-secondary-container border border-secondary/20 text-[10px] font-semibold text-secondary-fixed-variant uppercase tracking-wider backdrop-blur-sm shadow-sm">
                            Low Stock (2)
                        </span>
                    </div>
                </div>
                <div class="p-stack-md flex flex-col flex-1">
                    <div class="flex justify-between items-start mb-1">
                        <h3 class="font-title-lg text-title-lg text-on-surface truncate pr-2">Focus Pod Beta</h3>
                        <p class="font-title-lg text-title-lg text-primary">$3,200</p>
                    </div>
                    <p class="font-label-md text-label-md text-outline mb-4">SKU: WS-901</p>
                    <div class="mt-auto flex items-center gap-2 pt-2 border-t border-outline-variant/30">
                        <button
                            class="flex-1 bg-surface-container-low hover:bg-primary hover:text-on-primary text-primary border border-primary/20 font-label-md text-label-md py-2 rounded-DEFAULT transition-colors flex justify-center items-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
                            Add to Quotation
                        </button>
                        <button
                            class="p-2 text-on-surface-variant hover:text-primary hover:bg-surface-container-low rounded-DEFAULT border border-transparent hover:border-outline-variant transition-all">
                            <span class="material-symbols-outlined">more_vert</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
