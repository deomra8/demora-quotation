<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ContactPerson extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_persons';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_id',
        'name',
        'title',
        'email',
        'phone',
    ];

    /**
     * Get the company that owns the contact person.
     */
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
