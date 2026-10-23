@section('title', 'Companies Management')
@extends('admin.layouts.app')

@section('content')
    <div class="p-6 md:p-10 max-w-[1440px] mx-auto w-full flex flex-col gap-8 flex-grow">
        <!-- Header Section -->
        <section class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <nav class="flex items-center gap-2 text-xs font-medium text-slate-500 mb-1.5">
                    <a class="hover:text-blue-900 transition-colors" href="#">Admin</a>
                    <svg class="w-3.5 h-3.5 text-slate-400" fill="currentColor" viewbox="0 0 20 20">
                        <path clip-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            fill-rule="evenodd"></path>
                    </svg>
                    <span class="text-slate-800 font-semibold">Companies</span>
                </nav>
                <h2 class="text-2xl font-bold tracking-tight text-slate-900">Companies Management</h2>
                <p class="text-sm text-slate-500 mt-0.5">Manage all registered corporate accounts and their contact information.</p>
            </div>
            <a href="{{ route('admin.companies.create') }}"
                class="px-5 py-2.5 text-sm font-medium text-white bg-blue-900 rounded-lg hover:bg-blue-950 transition shadow-sm flex items-center gap-2 shrink-0 self-start">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewbox="0 0 24 24">
                    <path d="M12 4v16m8-8H4" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
                Add New Company
            </a>
        </section>

        <!-- Alert Messages -->
        @if ($errors->any())
            <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                <div class="flex gap-3">
                    <svg class="w-5 h-5 text-red-600 flex-shrink-0 mt-0.5" fill="currentColor" viewbox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <div class="text-sm text-red-800">
                        <p class="font-semibold">Please fix the following errors:</p>
                        <ul class="mt-2 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif

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

        <!-- Companies Table -->
        <div class="bg-white border border-slate-200 rounded-xl shadow-xs overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="bg-slate-50 border-b border-slate-100">
                            <th class="px-6 py-3 text-left text-xs font-semibold text-slate-600 uppercase tracking-wider">Company Name</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-slate-600 uppercase tracking-wider">Contact</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-slate-600 uppercase tracking-wider">Location</th>
                            <th class="px-6 py-3 text-left text-xs font-semibold text-slate-600 uppercase tracking-wider">Account Status</th>
                            <th class="px-6 py-3 text-center text-xs font-semibold text-slate-600 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($companies as $company)
                            <tr class="border-b border-slate-100 hover:bg-slate-50 transition">
                                <td class="px-6 py-4">
                                    <div class="flex items-center gap-3">
                                        @if ($company->logo)
                                            <img src="{{ asset('storage/' . $company->logo) }}" alt="{{ $company->name }}"
                                                class="w-8 h-8 rounded-lg object-cover">
                                        @else
                                            <div
                                                class="w-8 h-8 rounded-lg bg-slate-200 flex items-center justify-center text-xs font-semibold text-slate-600">
                                                {{ substr($company->name, 0, 2) }}
                                            </div>
                                        @endif
                                        <div>
                                            <p class="text-sm font-semibold text-slate-900">{{ $company->name }}</p>
                                            <p class="text-xs text-slate-500">{{ $company->dba }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-slate-900">
                                        <p class="font-medium">{{ $company->contact_name }}</p>
                                        <p class="text-xs text-slate-500">{{ $company->contact_email }}</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-slate-600">
                                        <p>{{ $company->city }}, {{ $company->state }}</p>
                                        <p class="text-xs text-slate-500">{{ $company->country }}</p>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    @if ($company->is_active)
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 text-xs font-medium text-emerald-700 bg-emerald-50 rounded-full border border-emerald-200">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                            Active
                                        </span>
                                    @else
                                        <span
                                            class="inline-flex items-center gap-1.5 px-2.5 py-1 text-xs font-medium text-slate-700 bg-slate-50 rounded-full border border-slate-200">
                                            <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                                            Inactive
                                        </span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <a href="{{ route('admin.companies.show', $company->id) }}"
                                            class="px-3 py-1.5 text-xs font-medium text-blue-900 hover:text-white bg-blue-50 hover:bg-blue-900 rounded-lg transition">
                                            View
                                        </a>
                                        <a href="{{ route('admin.companies.edit', $company->id) }}"
                                            class="px-3 py-1.5 text-xs font-medium text-slate-700 hover:text-white bg-slate-100 hover:bg-slate-700 rounded-lg transition">
                                            Edit
                                        </a>
                                        <form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST"
                                            class="inline" onsubmit="return confirm('Are you sure you want to delete this company?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="px-3 py-1.5 text-xs font-medium text-red-700 hover:text-white bg-red-50 hover:bg-red-600 rounded-lg transition">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-6 py-12 text-center">
                                    <div class="flex flex-col items-center justify-center gap-3">
                                        <svg class="w-12 h-12 text-slate-300" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24">
                                            <path
                                                d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"
                                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                        </svg>
                                        <p class="text-slate-600 font-medium">No companies found</p>
                                        <p class="text-sm text-slate-500">Start by creating a new company account.</p>
                                        <a href="{{ route('admin.companies.create') }}"
                                            class="mt-2 px-4 py-2 text-sm font-medium text-white bg-blue-900 rounded-lg hover:bg-blue-950 transition">
                                            Create Company
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if ($companies->hasPages())
                <div class="bg-slate-50 border-t border-slate-100 px-6 py-4">
                    {{ $companies->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
