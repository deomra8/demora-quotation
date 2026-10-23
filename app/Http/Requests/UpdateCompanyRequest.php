<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $companyId = $this->route('company')->id;

        return [
            'name' => "required|string|max:255|unique:companies,name,{$companyId}",
            'dba' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:100',
            'website' => 'nullable|url|max:255',
            'employees' => 'nullable|string|max:50',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg,webp,svg|max:5120',
            'address' => 'required|string|max:255',
            'address_line_2' => 'nullable|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
            'country' => 'required|string|max:2',
            'same_delivery_address' => 'boolean',
            'contact_name' => 'required|string|max:255',
            'contact_title' => 'nullable|string|max:100',
            'contact_email' => 'required|email|max:255',
            'contact_phone' => 'nullable|string|max:20',
            'tax_id' => "nullable|string|max:100|unique:companies,tax_id,{$companyId}",
            'payment_terms' => 'nullable|string|in:net15,net30,net60,advance50,prepaid',
            'credit_limit' => 'nullable|numeric|min:0',
            'pricing_tier' => 'nullable|string|in:std,partner,enterprise,strategic',
            'is_active' => 'boolean',
            'account_tier' => 'nullable|string|in:t1,t2,t3',
            'account_manager' => 'nullable|string|max:100',
            'fitout_notes' => 'nullable|string|max:1000',
            'contacts' => 'nullable|array',
            'contacts.*.id' => 'nullable|exists:contact_persons,id',
            'contacts.*.name' => 'required_with:contacts|string|max:255',
            'contacts.*.title' => 'nullable|string|max:100',
            'contacts.*.email' => 'required_with:contacts|email|max:255',
            'contacts.*.phone' => 'nullable|string|max:20',
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Company name is required.',
            'name.unique' => 'This company name already exists.',
            'address.required' => 'Street address is required.',
            'city.required' => 'City is required.',
            'state.required' => 'State/Province is required.',
            'postal_code.required' => 'Postal code is required.',
            'country.required' => 'Country is required.',
            'contact_name.required' => 'Primary contact name is required.',
            'contact_email.required' => 'Primary contact email is required.',
            'contact_email.email' => 'Primary contact email must be valid.',
            'tax_id.unique' => 'This tax ID is already registered.',
            'contacts.*.email.email' => 'Additional contact email must be valid.',
        ];
    }
}
