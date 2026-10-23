@section('title', $company->name)
@extends('admin.layouts.app')

@section('content')
    <div class="p-6 md:p-10 max-w-[1440px] mx-auto w-full flex flex-col gap-8 flex-grow">
        <!-- Header Section -->
        <section class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <nav class="flex items-center gap-2 text-xs font-medium text-slate-500 mb-1.5">
                    <a class="hover:text-blue-900 transition-colors" href="{{ route('admin.companies.index') }}">Companies</a>
                    <svg class="w-3.5 h-3.5 text-slate-400" fill="currentColor" viewbox="0 0 20 20">
                        <path clip-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            fill-rule="evenodd"></path>
                    </svg>
                    <span class="text-slate-800 font-semibold">{{ $company->name }}</span>
                </nav>
                <div class="flex items-center gap-3 mt-2">
                    @if ($company->logo)
                        <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}"
                            class="w-12 h-12 rounded-lg object-cover border border-slate-200">
                    @else
                        <div
                            class="w-12 h-12 rounded-lg bg-slate-200 flex items-center justify-center text-sm font-bold text-slate-600">
                            {{ substr($company->name, 0, 2) }}
                        </div>
                    @endif
                    <div>
                        <h2 class="text-2xl font-bold tracking-tight text-slate-900">{{ $company->name }}</h2>
                        <p class="text-sm text-slate-500 mt-0.5">{{ $company->dba ?? 'No trade name' }}</p>
                    </div>
                </div>
            </div>
            <div class="flex items-center gap-3 shrink-0">
                <a href="{{ route('admin.companies.edit', $company->id) }}"
                    class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 transition shadow-sm">
                    Edit Company
                </a>
                <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST" class="inline"
                    onsubmit="return confirm('Are you sure you want to delete this company?');"><br />
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-red-700 bg-white border border-red-300 rounded-lg hover:bg-red-50 transition shadow-sm">
                        Delete Company
                    </button>
                </form>
                <a href="{{ route('admin.companies.index') }}"
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-900 rounded-lg hover:bg-blue-950 transition shadow-sm">
                    Back to List
                </a>
            </div>
        </section>

        @if (session('success'))
            <div class="bg-emerald-50 border border-emerald-200 rounded-lg p-4">
                <div class="flex gap-3">
                    <svg class="w-5 h-5 text-emerald-600 flex-shrink-0 mt-0.5" fill="currentColor" viewbox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm text-emerald-800">{{ session('success') }}</p>
                </div>
            </div>
        @endif

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Left Column: Company Details -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Card 1: Company Profile -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
                    <div class="p-6 border-b border-slate-100">
                        <h3 class="text-base font-semibold text-slate-900">Company Profile</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Legal Name</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->name }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Trade Name (DBA)</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->dba ?? '—' }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Industry</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->industry ?? '—' }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Website</p>
                                @if ($company->website)
                                    <a href="{{ $company->website }}" target="_blank"
                                        class="text-sm font-medium text-blue-900 hover:underline">{{ $company->website }}</a>
                                @else
                                    <p class="text-sm font-medium text-slate-900">—</p>
                                @endif
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Employees</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->employees ?? '—' }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Tax ID / VAT</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->tax_id ?? '—' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Business Address -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
                    <div class="p-6 border-b border-slate-100">
                        <h3 class="text-base font-semibold text-slate-900">Business Address</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Street Address</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->address }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Address Line 2</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->address_line_2 ?? '—' }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">City</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->city }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">State/Province</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->state }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Postal Code</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->postal_code }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Country</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->country }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Financial Terms -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
                    <div class="p-6 border-b border-slate-100">
                        <h3 class="text-base font-semibold text-slate-900">Financial & Quotation Terms</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Payment Terms</p>
                                <p class="text-sm font-medium text-slate-900">{{ ucfirst(str_replace('_', ' ', $company->payment_terms ?? 'N/A')) }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Credit Limit</p>
                                <p class="text-sm font-medium text-slate-900">
                                    @if ($company->credit_limit)
                                        EGP {{ number_format($company->credit_limit, 2) }}
                                    @else
                                        —
                                    @endif
                                </p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Pricing Tier</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->pricing_tier ?? '—' }}</p>
                            </div>
                            <div>
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-1">Account Tier</p>
                                <p class="text-sm font-medium text-slate-900">{{ $company->account_tier ?? '—' }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Contact Persons -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
                    <div class="p-6 border-b border-slate-100">
                        <h3 class="text-base font-semibold text-slate-900">Contact Persons</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <!-- Primary Contact -->
                        <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                            <p class="text-xs font-semibold uppercase tracking-wider text-blue-900 mb-3">Primary Contact</p>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <p class="text-xs text-blue-700 font-medium mb-1">Name</p>
                                    <p class="text-sm font-medium text-slate-900">{{ $company->contact_name }}</p>
                                </div>
                                <div>
                                    <p class="text-xs text-blue-700 font-medium mb-1">Job Title</p>
                                    <p class="text-sm font-medium text-slate-900">{{ $company->contact_title ?? '—' }}</p>
                                </div>
                                <div>
                                    <p class="text-xs text-blue-700 font-medium mb-1">Email</p>
                                    <a href="mailto:{{ $company->contact_email }}"
                                        class="text-sm font-medium text-blue-900 hover:underline">{{ $company->contact_email }}</a>
                                </div>
                                <div>
                                    <p class="text-xs text-blue-700 font-medium mb-1">Phone</p>
                                    <p class="text-sm font-medium text-slate-900">{{ $company->contact_phone ?? '—' }}</p>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Contact Persons -->
                        @if ($company->contactPersons->count() > 0)
                            <div class="pt-4 border-t border-slate-100">
                                <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-3">Additional Contacts
                                    ({{ $company->contactPersons->count() }})</p>
                                <div class="space-y-3">
                                    @foreach ($company->contactPersons as $contact)
                                        <div class="bg-slate-50 border border-slate-200 rounded-lg p-4">
                                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                                <div>
                                                    <p class="text-xs text-slate-600 font-medium mb-1">Name</p>
                                                    <p class="text-sm font-medium text-slate-900">{{ $contact->name }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-xs text-slate-600 font-medium mb-1">Job Title</p>
                                                    <p class="text-sm font-medium text-slate-900">{{ $contact->title ?? '—' }}</p>
                                                </div>
                                                <div>
                                                    <p class="text-xs text-slate-600 font-medium mb-1">Email</p>
                                                    <a href="mailto:{{ $contact->email }}"
                                                        class="text-sm font-medium text-blue-900 hover:underline">{{ $contact->email }}</a>
                                                </div>
                                                <div>
                                                    <p class="text-xs text-slate-600 font-medium mb-1">Phone</p>
                                                    <p class="text-sm font-medium text-slate-900">{{ $contact->phone ?? '—' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="bg-slate-50 border border-slate-200 rounded-lg p-4 text-center">
                                <p class="text-sm text-slate-600">No additional contact persons registered.</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Right Column: Account Info & Notes -->
            <div class="space-y-6">
                <!-- Card: Account Status -->
                <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
                    <div class="p-6 border-b border-slate-100">
                        <h3 class="text-base font-semibold text-slate-900">Account Status</h3>
                    </div>
                    <div class="p-6 space-y-4">
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Status</p>
                            @if ($company->is_active)
                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-semibold text-emerald-700 bg-emerald-50 rounded-full border border-emerald-200">
                                    <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                                    Active
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-semibold text-slate-700 bg-slate-50 rounded-full border border-slate-200">
                                    <span class="w-2 h-2 rounded-full bg-slate-400"></span>
                                    Inactive
                                </span>
                            @endif
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Account Manager</p>
                            <p class="text-sm font-medium text-slate-900">{{ $company->account_manager ?? '—' }}</p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Created</p>
                            <p class="text-sm font-medium text-slate-900">{{ $company->created_at->format('M d, Y') }}</p>
                        </div>
                        <div>
                            <p class="text-xs font-semibold uppercase tracking-wider text-slate-600 mb-2">Last Updated</p>
                            <p class="text-sm font-medium text-slate-900">{{ $company->updated_at->format('M d, Y H:i') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Card: Fit-Out Notes -->
                @if ($company->fitout_notes)
                    <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
                        <div class="p-6 border-b border-slate-100">
                            <h3 class="text-base font-semibold text-slate-900">Fit-Out Notes</h3>
                        </div>
                        <div class="p-6">
                            <p class="text-sm text-slate-700 leading-relaxed">{{ $company->fitout_notes }}</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
