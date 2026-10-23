@section('title', 'MES Dashboard')
@extends('admin.layouts.app')

@section('content')
    <div class="p-6 md:p-10 max-w-[1440px] mx-auto w-full flex flex-col gap-8 flex-grow">
        <section class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <nav class="flex items-center gap-2 text-xs font-medium text-slate-500 mb-1.5">
                    <a class="hover:text-blue-900 transition-colors" href="#">Customers</a>
                    <svg class="w-3.5 h-3.5 text-slate-400" fill="currentColor" viewbox="0 0 20 20">
                        <path clip-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            fill-rule="evenodd"></path>
                    </svg>
                    <a class="hover:text-blue-900 transition-colors" href="#">Companies</a>
                    <svg class="w-3.5 h-3.5 text-slate-400" fill="currentColor" viewbox="0 0 20 20">
                        <path clip-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            fill-rule="evenodd"></path>
                    </svg>
                    <span class="text-slate-800 font-semibold">Add New Company</span>
                </nav>
                <h2 class="text-2xl font-bold tracking-tight text-slate-900">Create Company</h2>
                <p class="text-sm text-slate-500 mt-0.5">Register a new corporate account, procurement department, and
                    commercial billing details for quotation dispatch.</p>
            </div>
            <!-- Action Buttons -->
            <div class="flex items-center gap-3 shrink-0">
                <a href="{{ route('admin.companies.index') }}"
                    class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 transition shadow-sm">
                    Cancel
                </a>
                <button
                    class="px-4 py-2 text-sm font-medium text-blue-900 bg-white border border-blue-900 rounded-lg hover:bg-blue-50 transition shadow-sm"
                    type="submit" form="company-form">
                    Save &amp; Create Quotation
                </button>
                <button
                    class="px-5 py-2 text-sm font-medium text-white bg-blue-900 rounded-lg hover:bg-blue-950 transition shadow-sm"
                    type="submit" form="company-form">
                    Save Company
                </button>
            </div>
        </section>
        <!-- Form Grid (8 cols Main + 4 cols Side) -->
        <form id="company-form" class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start" action="{{ route('admin.companies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- BEGIN: LeftFormColumn (8 cols) -->
            <div class="lg:col-span-8 space-y-6">
                <!-- Card 1: Company Profile & Identification -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
                    <div class="p-6 border-b border-slate-100">
                        <h3 class="text-base font-semibold text-slate-900">Company Profile &amp; Identification</h3>
                        <p class="text-xs text-slate-500 mt-0.5">Primary business name, industry classification, and public
                            details.</p>
                    </div>
                    <div class="p-6 space-y-5">
                        <!-- Legal Name & DBA -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    Company Legal Name
                                </label>
                                <input
                                    class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                    placeholder="e.g. Nile Design Solutions" type="text" name="name" value="{{ old('name', 'Nile Design Solutions') }}" />
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    DBA / Trade Name
                                </label>
                                <input
                                    class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                    placeholder="e.g. Nile Design" type="text" name="dba" value="{{ old('dba', 'Nile Design') }}" />
                            </div>
                        </div>
                        <!-- Industry & Website -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    Industry / Sector
                                </label>
                                <select
                                    class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-800 focus:ring-2 focus:ring-blue-900 focus:border-transparent bg-white transition" name="industry">
                                    <option value="">Select industry classification</option>
                                    <option value="arch" {{ old('industry', 'arch') == 'arch' ? 'selected' : '' }}>Architecture &amp; Real Estate</option>
                                    <option value="fin" {{ old('industry', 'arch') == 'fin' ? 'selected' : '' }}>Financial Services</option>
                                    <option value="health" {{ old('industry', 'arch') == 'health' ? 'selected' : '' }}>Healthcare &amp; Biotech</option>
                                    <option value="legal" {{ old('industry', 'arch') == 'legal' ? 'selected' : '' }}>Legal &amp; Consulting</option>
                                    <option value="tech" {{ old('industry', 'arch') == 'tech' ? 'selected' : '' }}>Technology / Software</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    Company Website
                                </label>
                                <div class="relative rounded-lg shadow-xs">
                                    <span
                                        class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400 text-xs">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                            <path
                                                d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </span>
                                    <input
                                        class="w-full pl-9 pr-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                        placeholder="https://example.com" type="url" name="website" value="{{ old('website', 'https://www.niledesign.com.eg') }}" />
                                </div>
                            </div>
                        </div>
                        <!-- Number of Employees -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                Number of Employees / Office Capacity
                            </label>
                            <select
                                class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-800 focus:ring-2 focus:ring-blue-900 focus:border-transparent bg-white transition" name="employees">
                                <option value="1-50" {{ old('employees', '50-150') == '1-50' ? 'selected' : '' }}>1 - 50 employees (Boutique Office)</option>
                                <option value="50-150" {{ old('employees', '50-150') == '50-150' ? 'selected' : '' }}>50 - 150 employees (Mid-Size Regional HQ)</option>
                                <option value="150-500" {{ old('employees', '50-150') == '150-500' ? 'selected' : '' }}>150 - 500 employees (Large Commercial Facility)</option>
                                <option value="500+" {{ old('employees', '50-150') == '500+' ? 'selected' : '' }}>500+ employees (Enterprise Multi-Floor)</option>
                            </select>
                        </div>
                        <!-- Logo Upload Zone -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                Company Logo / Visual Asset
                            </label>
                            <div class="relative">
                                <input id="company-logo-input" type="file" name="logo" accept=".png,.jpg,.jpeg,.webp,.svg,image/*" class="hidden" />
                                <label for="company-logo-input"
                                    class="block border-2 border-dashed border-slate-300 hover:border-blue-800 rounded-xl p-6 text-center cursor-pointer transition-colors bg-slate-50/50 group">
                                    <div
                                        class="w-10 h-10 mx-auto rounded-full bg-blue-50 text-blue-900 flex items-center justify-center mb-2 group-hover:scale-105 transition-transform">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                            <path
                                                d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </div>
                                    <p class="text-xs font-semibold text-slate-800">
                                        <span class="text-blue-900 hover:underline">Click to upload</span> or drag and drop logo
                                    </p>
                                    <p class="text-[11px] text-slate-400 mt-1">SVG, PNG, JPG or WebP (High-res for branded
                                        proposal PDFs, max 5MB)</p>
                                </label>
                                <div id="company-logo-preview" class="hidden mt-3 rounded-lg border border-slate-200 bg-white p-2">
                                    <img id="company-logo-image" src="" alt="Company logo preview" class="max-h-24 mx-auto object-contain rounded-md" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card 2: Primary Business & Billing Address -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
                    <div class="p-6 border-b border-slate-100">
                        <h3 class="text-base font-semibold text-slate-900">Primary Business &amp; Billing Address</h3>
                        <p class="text-xs text-slate-500 mt-0.5">Commercial invoice address and shipping destination
                            settings.</p>
                    </div>
                    <div class="p-6 space-y-4">
                        <!-- Street Address -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                Street Address
                            </label>
                            <input
                                class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                placeholder="12 Tahrir Street, Dokki" type="text" name="address" value="{{ old('address', '12 Tahrir Street, Dokki') }}" />
                        </div>
                        <!-- Address Line 2 -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                Address Line 2 (Optional)
                            </label>
                            <input
                                class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                placeholder="Building 3, Floor 5" type="text" name="address_line_2" value="{{ old('address_line_2', 'Building 3, Floor 5') }}" />
                        </div>
                        <!-- City, State, Zip -->
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    City
                                </label>
                                <input
                                    class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                    placeholder="Cairo" type="text" name="city" value="{{ old('city', 'Cairo') }}" />
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    State / Province
                                </label>
                                <input
                                    class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                    placeholder="Giza" type="text" name="state" value="{{ old('state', 'Giza') }}" />
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    Postal Code
                                </label>
                                <input
                                    class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                    placeholder="12611" type="text" name="postal_code" value="{{ old('postal_code', '12611') }}" />
                            </div>
                        </div>
                        <!-- Country -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                Country
                            </label>
                            <select
                                class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-800 focus:ring-2 focus:ring-blue-900 focus:border-transparent bg-white transition" name="country">
                                <option value="EG" {{ old('country', 'EG') == 'EG' ? 'selected' : '' }}>Egypt</option>
                                <option value="US" {{ old('country', 'EG') == 'US' ? 'selected' : '' }}>United States</option>
                                <option value="CA" {{ old('country', 'EG') == 'CA' ? 'selected' : '' }}>Canada</option>
                                <option value="UK" {{ old('country', 'EG') == 'UK' ? 'selected' : '' }}>United Kingdom</option>
                                <option value="DE" {{ old('country', 'EG') == 'DE' ? 'selected' : '' }}>Germany</option>
                                <option value="AU" {{ old('country', 'EG') == 'AU' ? 'selected' : '' }}>Australia</option>
                            </select>
                        </div>
                        <!-- Delivery Address Checkbox -->
                        <div class="pt-2">
                            <label class="inline-flex items-center gap-2 cursor-pointer">
                                <input type="hidden" name="same_delivery_address" value="0" />
                                <input {{ old('same_delivery_address', true) ? 'checked' : '' }}
                                    class="rounded border-slate-300 text-blue-900 focus:ring-blue-900 h-4 w-4 transition"
                                    type="checkbox" name="same_delivery_address" value="1" />
                                <span class="text-xs text-slate-700 font-medium">Showroom delivery &amp; installation
                                    address is identical to billing address</span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Card 3: Primary Contact Person (Procurement / Facilities) -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
                    <div class="p-6 border-b border-slate-100 flex items-center justify-between">
                        <div>
                            <h3 class="text-base font-semibold text-slate-900">Primary Contact Person</h3>
                            <p class="text-xs text-slate-500 mt-0.5">Procurement manager or workspace lead receiving quote
                                notifications.</p>
                        </div>
                        <span class="px-2.5 py-1 text-xs font-semibold bg-slate-100 text-slate-700 rounded-md">Procurement
                            &amp; Facilities</span>
                    </div>
                    <div class="p-6 space-y-4">
                        <!-- Name & Job Title -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    Contact Full Name
                                </label>
                                <input
                                    class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                    placeholder="e.g. Ahmed Hassan" type="text" name="contact_name" value="{{ old('contact_name', 'Ahmed Hassan') }}" />
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    Job Title
                                </label>
                                <input
                                    class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                    placeholder="Procurement Manager" type="text" name="contact_title" value="{{ old('contact_title', 'Procurement Manager') }}" />
                            </div>
                        </div>
                        <!-- Email & Phone -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    Business Email
                                </label>
                                <div class="relative rounded-lg shadow-xs">
                                    <span
                                        class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                            <path
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </span>
                                    <input
                                        class="w-full pl-9 pr-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                        placeholder="a.hassan@niledesign.com.eg" type="email" name="contact_email" value="{{ old('contact_email', 'a.hassan@niledesign.com.eg') }}" />
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    Phone Number
                                </label>
                                <div class="relative rounded-lg shadow-xs">
                                    <span
                                        class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                            <path
                                                d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                    </span>
                                    <input
                                        class="w-full pl-9 pr-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                        placeholder="+20 10 1234 5678" type="tel" name="contact_phone" value="{{ old('contact_phone', '+20 10 1234 5678') }}" />
                                </div>
                            </div>
                        </div>
                        <!-- Additional Contact Persons -->
                        <div class="pt-2">
                            <button
                                id="add-contact-person"
                                class="inline-flex items-center gap-1.5 text-xs font-semibold text-blue-900 hover:text-blue-700 transition-colors"
                                type="button">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                    <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2">
                                    </path>
                                </svg>
                                Add Contact Person
                            </button>
                        </div>
                        <div id="additional-contact-persons" class="space-y-4"></div>
                        <template id="contact-person-template">
                            <div class="contact-person-fields border-t border-slate-100 pt-4 space-y-4">
                                <div class="flex items-center justify-between">
                                    <h4 class="text-xs font-semibold uppercase tracking-wider text-slate-600">Additional Contact Person</h4>
                                    <button type="button" class="remove-contact-person text-xs font-semibold text-red-600 hover:text-red-800">Remove</button>
                                </div>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <input class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm" placeholder="Full Name" type="text" data-field="name">
                                    <input class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm" placeholder="Job Title" type="text" data-field="title">
                                    <input class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm" placeholder="Business Email" type="email" data-field="email">
                                    <input class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm" placeholder="Phone Number" type="tel" data-field="phone">
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
                <!-- Card 4: Financial & Quotation Terms -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
                    <div class="p-6 border-b border-slate-100">
                        <h3 class="text-base font-semibold text-slate-900">Financial &amp; Quotation Terms</h3>
                        <p class="text-xs text-slate-500 mt-0.5">Commercial discount pricing, default net days, and credit
                            authorizations.</p>
                    </div>
                    <div class="p-6 space-y-4">
                        <!-- Tax ID & Default Payment Terms -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    Tax / VAT Registration Number
                                </label>
                                <input
                                    class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                    placeholder="e.g. Egyptian Tax ID 123-456-789" type="text" name="tax_id" value="{{ old('tax_id', '123-456-789') }}" />
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    Default Payment Terms
                                </label>
                                <select
                                    class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-800 focus:ring-2 focus:ring-blue-900 focus:border-transparent bg-white transition" name="payment_terms">
                                    <option value="net30" {{ old('payment_terms', 'net30') == 'net30' ? 'selected' : '' }}>Net 30 Days</option>
                                    <option value="net60" {{ old('payment_terms', 'net30') == 'net60' ? 'selected' : '' }}>Net 60 Days</option>
                                    <option value="net15" {{ old('payment_terms', 'net30') == 'net15' ? 'selected' : '' }}>Net 15 Days</option>
                                    <option value="advance50" {{ old('payment_terms', 'net30') == 'advance50' ? 'selected' : '' }}>50% Advance / 50% on Delivery</option>
                                    <option value="prepaid" {{ old('payment_terms', 'net30') == 'prepaid' ? 'selected' : '' }}>100% Pre-payment</option>
                                </select>
                            </div>
                        </div>
                        <!-- Credit Limit & Pricing Tier -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    Commercial Credit Limit (EGP)
                                </label>
                                <div class="relative rounded-lg shadow-xs">
                                    <span
                                        class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-slate-400 text-sm font-semibold">
                                        EGP
                                    </span>
                                    <input
                                        class="w-full pl-8 pr-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-900 font-medium focus:ring-2 focus:ring-blue-900 focus:border-transparent transition"
                                        type="text" value="{{ old('credit_limit', '15000000') }}" name="credit_limit" />
                                </div>
                            </div>
                            <div>
                                <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                    Price Agreement / Tier
                                </label>
                                <select
                                    class="w-full px-3.5 py-2 border border-slate-300 rounded-lg text-sm text-slate-800 focus:ring-2 focus:ring-blue-900 focus:border-transparent bg-white transition" name="pricing_tier">
                                    <option value="std" {{ old('pricing_tier', 'partner') == 'std' ? 'selected' : '' }}>Standard Commercial Tier (MSRP)</option>
                                    <option value="partner" {{ old('pricing_tier', 'partner') == 'partner' ? 'selected' : '' }}>Preferred B2B Partner (-10%)</option>
                                    <option value="enterprise" {{ old('pricing_tier', 'partner') == 'enterprise' ? 'selected' : '' }}>Enterprise VIP Contract (-15%)</option>
                                    <option value="strategic" {{ old('pricing_tier', 'partner') == 'strategic' ? 'selected' : '' }}>Strategic Key Account (-20%)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: LeftFormColumn -->
            <!-- BEGIN: RightColumn (4 cols) -->
            <div class="lg:col-span-4 space-y-6">
                <!-- Card: Account Status & Tier -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
                    <div class="p-5 border-b border-slate-100">
                        <h3 class="text-sm font-semibold text-slate-900">Account Status &amp; Tier</h3>
                    </div>
                    <div class="p-5 space-y-5">
                        <!-- Active Toggle -->
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-semibold text-slate-900">Active Account</p>
                                <p class="text-xs text-slate-500">Enable quotations and commercial orders</p>
                            </div>
                            <!-- Toggle switch turned ON -->
                            <button aria-checked="true"
                                class="bg-blue-900 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none"
                                role="switch" type="button">
                                <span aria-hidden="true"
                                    class="translate-x-5 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                            </button>
                        </div>
                        <!-- Classification -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                Account Classification
                            </label>
                            <select
                                class="w-full px-3 py-2 border border-slate-300 rounded-lg text-xs font-medium text-slate-800 focus:ring-2 focus:ring-blue-900 bg-white transition" name="account_tier">
                                <option value="t1" {{ old('account_tier', 't1') == 't1' ? 'selected' : '' }}>Tier 1 — Enterprise Key Account</option>
                                <option value="t2" {{ old('account_tier', 't1') == 't2' ? 'selected' : '' }}>Tier 2 — Growth Mid-Market Account</option>
                                <option value="t3" {{ old('account_tier', 't1') == 't3' ? 'selected' : '' }}>Tier 3 — Regional Small Business</option>
                            </select>
                        </div>
                        <!-- Assigned Rep -->
                        <div>
                            <label class="block text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1.5">
                                Assigned Account Manager
                            </label>
                            <div class="relative">
                                <select
                                    class="w-full pl-3 pr-8 py-2 border border-slate-300 rounded-lg text-xs font-medium text-slate-800 focus:ring-2 focus:ring-blue-900 bg-white transition" name="account_manager">
                                    <option value="alex" {{ old('account_manager', 'alex') == 'alex' ? 'selected' : '' }}>Alex Carter (Senior Account Exec)</option>
                                    <option value="marcus" {{ old('account_manager', 'alex') == 'marcus' ? 'selected' : '' }}>Marcus Chen (Commercial Specialist)</option>
                                    <option value="sarah" {{ old('account_manager', 'alex') == 'sarah' ? 'selected' : '' }}>Sarah Connor (Workplace Consultant)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card: Commercial & Interior Fit-Out Notes -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
                    <div class="p-5 border-b border-slate-100 flex items-center justify-between">
                        <h3 class="text-sm font-semibold text-slate-900">Commercial &amp; Fit-Out Notes</h3>
                        <span class="text-[10px] text-slate-400 font-medium">Internal</span>
                    </div>
                    <div class="p-5">
                        <textarea
                            class="w-full p-3 border border-slate-300 rounded-lg text-xs text-slate-800 placeholder:text-slate-400 focus:ring-2 focus:ring-blue-900 focus:border-transparent transition leading-relaxed"
                            placeholder="Add specific interior architectural requirements, design preferences, or building delivery restrictions..."
                            rows="4" name="fitout_notes">{{ old('fitout_notes', 'Prefers ergonomic sit-stand workstations and walnut conference tables. Requires UL/BIFMA certified furniture specs for compliance.') }}</textarea>
                        <p class="text-[11px] text-slate-400 mt-2">Visible to sales managers and quoting design
                            specialists.</p>
                    </div>
                </div>
                <!-- Card: Quick Workflow Tip -->
                <div class="bg-blue-50/70 border border-blue-200 rounded-xl p-5">
                    <div class="flex items-start gap-3">
                        <div class="p-1.5 bg-blue-100 text-blue-900 rounded-lg shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                <path d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-xs font-bold text-blue-950 uppercase tracking-wider">Quick Workflow Tip</h4>
                            <p class="text-xs text-blue-900/80 mt-1 leading-relaxed">
                                Once saved, this company will immediately become available in the Quotation Builder dropdown
                                for instant proposal generation.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Card: Summary Publishing Action Box -->
                <div class="bg-slate-50 border border-slate-200 rounded-xl p-5 space-y-3">
                    <div class="flex items-center justify-between text-xs text-slate-600">
                        <span>Created By:</span>
                        <span class="font-semibold text-slate-900">Admin User</span>
                    </div>
                    <div class="flex items-center justify-between text-xs text-slate-600">
                        <span>Status:</span>
                        <span
                            class="inline-flex items-center gap-1.5 font-medium text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200 text-[11px]">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            Ready for Activation
                        </span>
                    </div>
                    <div class="pt-2">
                        <button
                            class="w-full py-2.5 px-4 bg-blue-900 hover:bg-blue-950 text-white rounded-lg text-xs font-semibold tracking-wide transition shadow-sm flex items-center justify-center gap-2"
                            type="submit" form="company-form">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                                <path d="M5 13l4 4L19 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                </path>
                            </svg>
                            Confirm &amp; Register Company
                        </button>
                    </div>
                </div>
            </div>
            <!-- END: RightColumn -->
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const input = document.getElementById('company-logo-input');
            const previewContainer = document.getElementById('company-logo-preview');
            const previewImage = document.getElementById('company-logo-image');

            if (!input || !previewContainer || !previewImage) {
                return;
            }

            input.addEventListener('change', function (event) {
                const file = event.target.files && event.target.files[0];

                if (!file) {
                    previewContainer.classList.add('hidden');
                    previewImage.src = '';
                    return;
                }

                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            });

            const addContactButton = document.getElementById('add-contact-person');
            const contactsContainer = document.getElementById('additional-contact-persons');
            const contactTemplate = document.getElementById('contact-person-template');
            let contactIndex = 0;

            if (addContactButton && contactsContainer && contactTemplate) {
                addContactButton.addEventListener('click', function () {
                    const contact = contactTemplate.content.cloneNode(true);
                    contact.querySelectorAll('[data-field]').forEach(function (field) {
                        field.name = 'contacts[' + contactIndex + '][' + field.dataset.field + ']';
                    });
                    contact.querySelector('.remove-contact-person').addEventListener('click', function () {
                        this.closest('.contact-person-fields').remove();
                    });
                    contactsContainer.appendChild(contact);
                    contactIndex++;
                });
            }
        });
    </script>
@endsection