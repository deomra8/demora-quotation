@section('title', 'MES Dashboard')
@extends('admin.layouts.app')

@section('content')
    <div class="p-6 md:p-10 max-w-[1440px] mx-auto w-full flex flex-col gap-8 flex-grow">
        <!-- Header & Overview Banner -->
        <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 pb-2">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900 tracking-tight">Dashboard Overview</h2>
                <p class="text-sm text-slate-500 mt-1">Welcome back. Here is your operational overview, showroom
                    inventory, and quotation pipeline.</p>
            </div>
            <!-- Secondary Filter & Action Controls -->
            <div class="flex items-center gap-2.5 flex-wrap">
                <div
                    class="inline-flex items-center bg-white border border-slate-200 rounded-lg px-3 py-1.5 text-xs font-medium text-slate-700 shadow-sm">
                    <span class="material-symbols-outlined text-slate-400 text-sm mr-1.5">calendar_today</span>
                    <span>This Month (Oct 2023)</span>
                    <span class="material-symbols-outlined text-slate-400 text-sm ml-2">expand_more</span>
                </div>
                <button
                    class="inline-flex items-center gap-1.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 px-3 py-1.5 rounded-lg text-xs font-medium shadow-sm transition-colors">
                    <span class="material-symbols-outlined text-slate-500 text-sm">refresh</span>
                    <span>Refresh</span>
                </button>
                <button
                    class="inline-flex items-center gap-1.5 bg-white border border-slate-200 text-slate-700 hover:bg-slate-50 px-3 py-1.5 rounded-lg text-xs font-medium shadow-sm transition-colors">
                    <span class="material-symbols-outlined text-slate-500 text-sm">file_download</span>
                    <span>Export</span>
                </button>
            </div>
        </div>
        <!-- 6 Complete Summary Metric Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-4">
            <!-- Metric 1: Total Products -->
            <div
                class="bg-white border border-slate-200/90 rounded-xl p-4 flex flex-col justify-between shadow-sm hover:border-slate-300 transition-colors">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-500">Total
                        Products</span>
                    <div class="w-8 h-8 rounded-lg bg-blue-50 text-[#1E3A8A] flex items-center justify-center">
                        <span class="material-symbols-outlined text-lg">inventory_2</span>
                    </div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-slate-900 tracking-tight">1,240</div>
                    <div class="text-[11px] text-emerald-600 font-medium mt-1 flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs">arrow_upward</span>
                        <span>24 added this month</span>
                    </div>
                </div>
            </div>
            <!-- Metric 2: Active Products -->
            <div
                class="bg-white border border-slate-200/90 rounded-xl p-4 flex flex-col justify-between shadow-sm hover:border-slate-300 transition-colors">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-500">Active
                        Products</span>
                    <div class="w-8 h-8 rounded-lg bg-emerald-50 text-emerald-700 flex items-center justify-center">
                        <span class="material-symbols-outlined text-lg">check_circle</span>
                    </div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-slate-900 tracking-tight">980</div>
                    <div class="text-[11px] text-slate-500 font-medium mt-1">
                        <span>79% in active showroom</span>
                    </div>
                </div>
            </div>
            <!-- Metric 3: Total Categories -->
            <div
                class="bg-white border border-slate-200/90 rounded-xl p-4 flex flex-col justify-between shadow-sm hover:border-slate-300 transition-colors">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-500">Total
                        Categories</span>
                    <div class="w-8 h-8 rounded-lg bg-amber-50 text-amber-700 flex items-center justify-center">
                        <span class="material-symbols-outlined text-lg">category</span>
                    </div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-slate-900 tracking-tight">12</div>
                    <div class="text-[11px] text-slate-500 font-medium mt-1 truncate">
                        <span>Across executive &amp; modular</span>
                    </div>
                </div>
            </div>
            <!-- Metric 4: Quotations This Month -->
            <div
                class="bg-white border border-slate-200/90 rounded-xl p-4 flex flex-col justify-between shadow-sm hover:border-slate-300 transition-colors">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-500">Quotations
                        MTD</span>
                    <div class="w-8 h-8 rounded-lg bg-indigo-50 text-indigo-700 flex items-center justify-center">
                        <span class="material-symbols-outlined text-lg">description</span>
                    </div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-slate-900 tracking-tight">45</div>
                    <div class="text-[11px] text-emerald-600 font-medium mt-1 flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs">trending_up</span>
                        <span>+15% vs prior month</span>
                    </div>
                </div>
            </div>
            <!-- Metric 5: Draft Quotations -->
            <div
                class="bg-white border border-slate-200/90 rounded-xl p-4 flex flex-col justify-between shadow-sm hover:border-slate-300 transition-colors">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold uppercase tracking-wider text-slate-500">Draft Quotes</span>
                    <div class="w-8 h-8 rounded-lg bg-slate-100 text-slate-700 flex items-center justify-center">
                        <span class="material-symbols-outlined text-lg">edit_note</span>
                    </div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-slate-900 tracking-tight">8</div>
                    <div class="text-[11px] text-amber-600 font-medium mt-1 truncate">
                        <span>Pending sales review</span>
                    </div>
                </div>
            </div>
            <!-- Metric 6: Total Quotation Value (MTD) -->
            <div
                class="bg-white border border-slate-200/90 rounded-xl p-4 flex flex-col justify-between shadow-sm hover:border-slate-300 transition-colors bg-gradient-to-br from-white to-blue-50/30">
                <div class="flex items-center justify-between mb-3">
                    <span class="text-xs font-semibold uppercase tracking-wider text-[#1E3A8A]">Quotation
                        Value</span>
                    <div class="w-8 h-8 rounded-lg bg-blue-100 text-[#1E3A8A] flex items-center justify-center">
                        <span class="material-symbols-outlined text-lg">payments</span>
                    </div>
                </div>
                <div>
                    <div class="text-2xl font-bold text-[#1E3A8A] tracking-tight">$125,500</div>
                    <div class="text-[11px] text-emerald-600 font-medium mt-1 flex items-center gap-1">
                        <span class="material-symbols-outlined text-xs">trending_up</span>
                        <span>+18.4% month-to-date</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dedicated 'Quick Actions' Section -->
        <div class="flex flex-col gap-3">
            <div class="flex items-center justify-between">
                <h3 class="text-sm font-bold uppercase tracking-wider text-slate-600">Quick Actions</h3>
                <span class="text-xs text-slate-400">Core operational shortcuts</span>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Action 1: Create New Quotation -->
                <a class="bg-white border border-slate-200 rounded-xl p-4 hover:border-primary-container hover:shadow-sm transition-all group flex items-start gap-3.5 cursor-pointer"
                    href="#">
                    <div
                        class="p-2.5 rounded-lg bg-blue-50 text-[#1E3A8A] group-hover:bg-[#1E3A8A] group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-xl">post_add</span>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-slate-900 group-hover:text-[#1E3A8A] transition-colors">
                            Create New Quotation</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Start a new B2B client proposal</p>
                    </div>
                </a>
                <!-- Action 2: Add Product -->
                <a class="bg-white border border-slate-200 rounded-xl p-4 hover:border-primary-container hover:shadow-sm transition-all group flex items-start gap-3.5 cursor-pointer"
                    href="#">
                    <div
                        class="p-2.5 rounded-lg bg-slate-100 text-slate-700 group-hover:bg-[#1E3A8A] group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-xl">chair</span>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-slate-900 group-hover:text-[#1E3A8A] transition-colors">
                            Add Product</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Register new furniture to showroom</p>
                    </div>
                </a>
                <!-- Action 3: View Products -->
                <a class="bg-white border border-slate-200 rounded-xl p-4 hover:border-primary-container hover:shadow-sm transition-all group flex items-start gap-3.5 cursor-pointer"
                    href="#">
                    <div
                        class="p-2.5 rounded-lg bg-slate-100 text-slate-700 group-hover:bg-[#1E3A8A] group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-xl">inventory_2</span>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-slate-900 group-hover:text-[#1E3A8A] transition-colors">
                            View Products</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Browse and filter catalog</p>
                    </div>
                </a>
                <!-- Action 4: View Quotations -->
                <a class="bg-white border border-slate-200 rounded-xl p-4 hover:border-primary-container hover:shadow-sm transition-all group flex items-start gap-3.5 cursor-pointer"
                    href="#">
                    <div
                        class="p-2.5 rounded-lg bg-slate-100 text-slate-700 group-hover:bg-[#1E3A8A] group-hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-xl">receipt_long</span>
                    </div>
                    <div>
                        <h4 class="text-sm font-semibold text-slate-900 group-hover:text-[#1E3A8A] transition-colors">
                            View Quotations</h4>
                        <p class="text-xs text-slate-500 mt-0.5">Track all active quotes and status</p>
                    </div>
                </a>
            </div>
        </div>
        <!-- Recent Quotations Table Card -->
        <div class="bg-white border border-slate-200 rounded-xl overflow-hidden shadow-sm flex flex-col">
            <!-- Table Header Controls -->
            <div class="p-5 border-b border-slate-100 flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <h3 class="text-base font-bold text-slate-900">Recent Quotations</h3>
                    <span class="bg-slate-100 text-slate-600 text-xs px-2 py-0.5 rounded-full font-medium">5
                        recent</span>
                </div>
                <div class="flex items-center gap-3 flex-wrap">
                    <!-- Filter Pills -->
                    <div class="inline-flex bg-slate-100 p-0.5 rounded-lg text-xs font-medium text-slate-600">
                        <button class="px-2.5 py-1 rounded-md bg-white text-slate-900 shadow-xs font-semibold">All</button>
                        <button class="px-2.5 py-1 rounded-md hover:text-slate-900">Approved</button>
                        <button class="px-2.5 py-1 rounded-md hover:text-slate-900">Sent</button>
                        <button class="px-2.5 py-1 rounded-md hover:text-slate-900">Draft</button>
                    </div>
                    <a class="text-xs font-semibold text-[#1E3A8A] hover:text-blue-900 flex items-center gap-1 ml-1"
                        href="#">
                        <span>View All Quotations</span>
                        <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </a>
                </div>
            </div>
            <!-- Table -->
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr
                            class="bg-slate-50/80 border-b border-slate-200 text-[11px] font-bold text-slate-500 uppercase tracking-wider">
                            <th class="py-3 px-5">Quotation Number</th>
                            <th class="py-3 px-5">Customer</th>
                            <th class="py-3 px-5">Date</th>
                            <th class="py-3 px-5">Items</th>
                            <th class="py-3 px-5">Total</th>
                            <th class="py-3 px-5">Status</th>
                            <th class="py-3 px-5 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-sm divide-y divide-slate-100">
                        <!-- Row 1 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-3.5 px-5 font-semibold text-slate-900 flex items-center gap-2">
                                <span class="material-symbols-outlined text-slate-400 text-base">description</span>
                                QT-2023-094
                            </td>
                            <td class="py-3.5 px-5">
                                <div class="font-medium text-slate-900">Acme Corp HQ</div>
                                <div class="text-xs text-slate-500">Sarah Jenkins (Facilities)</div>
                            </td>
                            <td class="py-3.5 px-5 text-slate-600 text-xs">Oct 27, 2023</td>
                            <td class="py-3.5 px-5 text-slate-600 text-xs">12 Chairs, 4 Desks</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">$45,200.00</td>
                            <td class="py-3.5 px-5">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                    Approved
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <div class="inline-flex items-center gap-1">
                                    <button
                                        class="text-xs font-semibold text-slate-700 hover:text-primary px-2 py-1 rounded hover:bg-slate-100 transition-colors">View</button>
                                    <button
                                        class="text-xs font-semibold text-slate-700 hover:text-primary px-2 py-1 rounded hover:bg-slate-100 transition-colors">Edit</button>
                                    <button class="p-1 text-slate-400 hover:text-slate-600 rounded hover:bg-slate-100">
                                        <span class="material-symbols-outlined text-base">more_vert</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 2 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-3.5 px-5 font-semibold text-slate-900 flex items-center gap-2">
                                <span class="material-symbols-outlined text-slate-400 text-base">description</span>
                                QT-2023-093
                            </td>
                            <td class="py-3.5 px-5">
                                <div class="font-medium text-slate-900">TechFlow Inc.</div>
                                <div class="text-xs text-slate-500">Marcus Chen (Operations)</div>
                            </td>
                            <td class="py-3.5 px-5 text-slate-600 text-xs">Oct 26, 2023</td>
                            <td class="py-3.5 px-5 text-slate-600 text-xs">8 Modular Pods</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">$105,800.00</td>
                            <td class="py-3.5 px-5">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-blue-50 text-blue-700 border border-blue-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                                    Sent
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <div class="inline-flex items-center gap-1">
                                    <button
                                        class="text-xs font-semibold text-slate-700 hover:text-primary px-2 py-1 rounded hover:bg-slate-100 transition-colors">View</button>
                                    <button
                                        class="text-xs font-semibold text-slate-700 hover:text-primary px-2 py-1 rounded hover:bg-slate-100 transition-colors">Edit</button>
                                    <button class="p-1 text-slate-400 hover:text-slate-600 rounded hover:bg-slate-100">
                                        <span class="material-symbols-outlined text-base">more_vert</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-3.5 px-5 font-semibold text-slate-900 flex items-center gap-2">
                                <span class="material-symbols-outlined text-slate-400 text-base">description</span>
                                QT-2023-091
                            </td>
                            <td class="py-3.5 px-5">
                                <div class="font-medium text-slate-900">Global Logistics Corp</div>
                                <div class="text-xs text-slate-500">David Ross (Procurement)</div>
                            </td>
                            <td class="py-3.5 px-5 text-slate-600 text-xs">Oct 24, 2023</td>
                            <td class="py-3.5 px-5 text-slate-600 text-xs">24 Ergonomic Chairs</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">$12,450.00</td>
                            <td class="py-3.5 px-5">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-slate-100 text-slate-700 border border-slate-300">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                                    Draft
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <div class="inline-flex items-center gap-1">
                                    <button
                                        class="text-xs font-semibold text-slate-700 hover:text-primary px-2 py-1 rounded hover:bg-slate-100 transition-colors">View</button>
                                    <button
                                        class="text-xs font-semibold text-slate-700 hover:text-primary px-2 py-1 rounded hover:bg-slate-100 transition-colors">Edit</button>
                                    <button class="p-1 text-slate-400 hover:text-slate-600 rounded hover:bg-slate-100">
                                        <span class="material-symbols-outlined text-base">more_vert</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 4 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-3.5 px-5 font-semibold text-slate-900 flex items-center gap-2">
                                <span class="material-symbols-outlined text-slate-400 text-base">description</span>
                                QT-2023-090
                            </td>
                            <td class="py-3.5 px-5">
                                <div class="font-medium text-slate-900">Initech Studio</div>
                                <div class="text-xs text-slate-500">Peter Gibbons (Office Admin)</div>
                            </td>
                            <td class="py-3.5 px-5 text-slate-600 text-xs">Oct 23, 2023</td>
                            <td class="py-3.5 px-5 text-slate-600 text-xs">Custom Conference Table + 10 Chairs</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">$18,750.00</td>
                            <td class="py-3.5 px-5">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                    Approved
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <div class="inline-flex items-center gap-1">
                                    <button
                                        class="text-xs font-semibold text-slate-700 hover:text-primary px-2 py-1 rounded hover:bg-slate-100 transition-colors">View</button>
                                    <button
                                        class="text-xs font-semibold text-slate-700 hover:text-primary px-2 py-1 rounded hover:bg-slate-100 transition-colors">Edit</button>
                                    <button class="p-1 text-slate-400 hover:text-slate-600 rounded hover:bg-slate-100">
                                        <span class="material-symbols-outlined text-base">more_vert</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <!-- Row 5 -->
                        <tr class="hover:bg-slate-50/60 transition-colors">
                            <td class="py-3.5 px-5 font-semibold text-slate-900 flex items-center gap-2">
                                <span class="material-symbols-outlined text-slate-400 text-base">description</span>
                                QT-2023-089
                            </td>
                            <td class="py-3.5 px-5">
                                <div class="font-medium text-slate-900">Hooli Design Lab</div>
                                <div class="text-xs text-slate-500">Erlich B. (Partner)</div>
                            </td>
                            <td class="py-3.5 px-5 text-slate-600 text-xs">Oct 21, 2023</td>
                            <td class="py-3.5 px-5 text-slate-600 text-xs">Acoustic Panels &amp; Lounge Set</td>
                            <td class="py-3.5 px-5 font-semibold text-slate-900">$9,300.00</td>
                            <td class="py-3.5 px-5">
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-rose-50 text-rose-700 border border-rose-200">
                                    <span class="w-1.5 h-1.5 rounded-full bg-rose-500"></span>
                                    Rejected
                                </span>
                            </td>
                            <td class="py-3.5 px-5 text-right">
                                <div class="inline-flex items-center gap-1">
                                    <button
                                        class="text-xs font-semibold text-slate-700 hover:text-primary px-2 py-1 rounded hover:bg-slate-100 transition-colors">View</button>
                                    <button
                                        class="text-xs font-semibold text-slate-700 hover:text-primary px-2 py-1 rounded hover:bg-slate-100 transition-colors">Edit</button>
                                    <button class="p-1 text-slate-400 hover:text-slate-600 rounded hover:bg-slate-100">
                                        <span class="material-symbols-outlined text-base">more_vert</span>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Table Footer / Pagination preview -->
            <div
                class="p-4 border-t border-slate-100 bg-slate-50/40 flex items-center justify-between text-xs text-slate-500">
                <span>Showing 1 to 5 of 45 quotations</span>
                <div class="flex items-center gap-1">
                    <button
                        class="px-2.5 py-1 rounded border border-slate-200 bg-white text-slate-400 cursor-not-allowed">Previous</button>
                    <button
                        class="px-2.5 py-1 rounded border border-slate-200 bg-white text-slate-700 hover:bg-slate-50">Next</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        // Micro-interaction scripts
        document.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', (e) => {
                // Mock selection logic
                document.querySelectorAll('nav a').forEach(a => {
                    a.className =
                        "flex items-center gap-3 px-4 py-3 text-on-surface-variant hover:text-on-surface hover:bg-surface-container-high transition-colors duration-200";
                });
                link.className =
                    "flex items-center gap-3 px-4 py-3 border-l-4 border-primary text-primary font-bold bg-primary-container/10 transition-all duration-200";
            });
        });

        // Dashboard refresh simulation
        const statsValues = document.querySelectorAll('.text-2xl.font-bold');
        setInterval(() => {
            // Visual subtle flicker to indicate real-time
            const targetIdx = Math.floor(Math.random() * statsValues.length);
            const originalColor = statsValues[targetIdx].style.color;
            statsValues[targetIdx].classList.add('opacity-50');
            setTimeout(() => statsValues[targetIdx].classList.remove('opacity-50'), 100);
        }, 8000);
    </script>
@endsection