<header
    class="flex justify-between items-center px-6 md:px-10 h-16 bg-white border-b border-slate-200 sticky top-0 z-40">
    <!-- Search Bar -->
    <div class="flex items-center gap-3 flex-1 max-w-xl">
        <button class="md:hidden p-1.5 text-slate-600 rounded-lg hover:bg-slate-100">
            <span class="material-symbols-outlined text-xl">menu</span>
        </button>
        <div
            class="w-full flex items-center bg-slate-50 px-3.5 py-1.5 rounded-lg border border-slate-200 focus-within:border-primary-container focus-within:bg-white focus-within:ring-2 focus-within:ring-blue-100 transition-all">
            <span class="material-symbols-outlined text-slate-400 text-lg mr-2">search</span>
            <input
                class="bg-transparent border-none p-0 focus:ring-0 text-sm placeholder:text-slate-400 w-full outline-none text-slate-800"
                placeholder="Search quotations, products, or customers..." type="text" />
            <kbd
                class="hidden sm:inline-block text-[10px] text-slate-400 bg-white border border-slate-200 rounded px-1.5 py-0.5 font-mono">⌘K</kbd>
        </div>
    </div>
    <!-- Right Side Actions -->
    <div class="flex items-center gap-3 ml-4">
        <button
            class="bg-[#1E3A8A] text-white text-xs font-semibold px-4 py-2 rounded-lg hover:bg-[#172e6d] transition-colors shadow-sm flex items-center gap-1.5">
            <span class="material-symbols-outlined text-base font-semibold">add</span>
            <span>New Quotation</span>
        </button>
        <div class="h-5 w-px bg-slate-200 mx-1"></div>
        <!-- Notification with unread badge -->
        <button class="relative p-2 text-slate-500 hover:text-primary rounded-lg hover:bg-slate-100 transition-colors">
            <span class="material-symbols-outlined text-xl">notifications</span>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-blue-600 rounded-full ring-2 ring-white"></span>
        </button>
        <!-- User profile shortcut -->
        <div class="flex items-center pl-1 cursor-pointer">
            <img alt="User avatar" class="w-8 h-8 rounded-full object-cover border border-slate-200"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdzE9NVKB9tekTx0_i8ajkUpJPnSvMVVrZYSgge8_Dvr-sgRcMK7YO7vv7uSDwoJf4nOy9SleuGQR91hOzYSyCbl68o4-0qClOU5w5x-7vxh0Ckn2kJl49RuHWOTDOEnjAPf-kJsjTfn3T4AnbylTphvOgqUTwkdO1pdbFxTp3XariLiC8etr2b_W0re-GVEK6sbqJllQcAzCUQB2MxSyAmK7fmI3dplzsVQKAqzv8vN8cJd-Dfv-X7Q" />
        </div>
    </div>
</header>
