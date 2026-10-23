<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'dba',
        'industry',
        'website',
        'employees',
        'logo',
        'address',
        'address_line_2',
        'city',
        'state',
        'postal_code',
        'country',
        'same_delivery_address',
        'contact_name',
        'contact_title',
        'contact_email',
        'contact_phone',
        'tax_id',
        'payment_terms',
        'credit_limit',
        'pricing_tier',
        'is_active',
        'account_tier',
        'account_manager',
        'fitout_notes',
    ];

    /**
     * Get the additional contact persons for the company.
     */
    public function contactPersons(): HasMany
    {
        return $this->hasMany(ContactPerson::class);
    }
}