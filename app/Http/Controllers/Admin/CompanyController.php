<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use App\Models\ContactPerson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(15);
        return view('admin.pages.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        try {
            $data = $request->validated();
            
            // Handle logo upload
            if ($request->hasFile('logo')) {
                $logoPath = $request->file('logo')->store('companies/logos', 'public');
                $data['logo'] = $logoPath;
            }

            // Create the company
            $company = Company::create($data);

            // Handle additional contact persons
            if ($request->has('contacts') && is_array($request->get('contacts'))) {
                foreach ($request->get('contacts') as $contactData) {
                    if (!empty($contactData['name']) && !empty($contactData['email'])) {
                        $company->contactPersons()->create([
                            'name' => $contactData['name'],
                            'title' => $contactData['title'] ?? null,
                            'email' => $contactData['email'],
                            'phone' => $contactData['phone'] ?? null,
                        ]);
                    }
                }
            }

            return redirect()->route('admin.companies.show', $company->id)
                ->with('success', 'Company created successfully!');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Failed to create company: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        $company->load('contactPersons');
        return view('admin.pages.companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        $company->load('contactPersons');
        return view('admin.pages.companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        try {
            $data = $request->validated();
            
            // Handle logo upload
            if ($request->hasFile('logo')) {
                // Delete old logo if exists
                if ($company->logo && Storage::disk('public')->exists($company->logo)) {
                    Storage::disk('public')->delete($company->logo);
                }
                $logoPath = $request->file('logo')->store('companies/logos', 'public');
                $data['logo'] = $logoPath;
            }

            // Update the company
            $company->update($data);

            // Handle additional contact persons
            if ($request->has('contacts') && is_array($request->get('contacts'))) {
                $contactIds = [];
                foreach ($request->get('contacts') as $contactData) {
                    if (!empty($contactData['name']) && !empty($contactData['email'])) {
                        if (isset($contactData['id']) && !empty($contactData['id'])) {
                            // Update existing
                            $contact = ContactPerson::find($contactData['id']);
                            if ($contact && $contact->company_id === $company->id) {
                                $contact->update([
                                    'name' => $contactData['name'],
                                    'title' => $contactData['title'] ?? null,
                                    'email' => $contactData['email'],
                                    'phone' => $contactData['phone'] ?? null,
                                ]);
                                $contactIds[] = $contact->id;
                            }
                        } else {
                            // Create new
                            $contact = $company->contactPersons()->create([
                                'name' => $contactData['name'],
                                'title' => $contactData['title'] ?? null,
                                'email' => $contactData['email'],
                                'phone' => $contactData['phone'] ?? null,
                            ]);
                            $contactIds[] = $contact->id;
                        }
                    }
                }
                // Delete contacts not in the current request
                $company->contactPersons()->whereNotIn('id', $contactIds)->delete();
            } else {
                // Delete all additional contacts if none provided
                $company->contactPersons()->delete();
            }

            return redirect()->route('admin.companies.show', $company->id)
                ->with('success', 'Company updated successfully!');
        } catch (\Exception $e) {
            return back()->withInput()->with('error', 'Failed to update company: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        try {
            // Delete logo if exists
            if ($company->logo && Storage::disk('public')->exists($company->logo)) {
                Storage::disk('public')->delete($company->logo);
            }

            $company->delete();

            return redirect()->route('admin.companies.index')
                ->with('success', 'Company deleted successfully!');
        } catch (\Exception $e) {
            return back()->with('error', 'Failed to delete company: ' . $e->getMessage());
        }
    }
}

