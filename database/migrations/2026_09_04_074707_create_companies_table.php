<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            
            // Company Profile & Identification
            $table->string('name');
            $table->string('dba')->nullable();
            $table->string('industry')->nullable();
            $table->string('website')->nullable();
            $table->string('employees')->nullable();
            $table->string('logo')->nullable();
            
            // Primary Business & Billing Address
            $table->string('address');
            $table->string('address_line_2')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('postal_code');
            $table->string('country')->default('EG');
            $table->boolean('same_delivery_address')->default(true);
            
            // Primary Contact Person
            $table->string('contact_name');
            $table->string('contact_title')->nullable();
            $table->string('contact_email');
            $table->string('contact_phone')->nullable();
            
            // Financial & Quotation Terms
            $table->string('tax_id')->nullable();
            $table->string('payment_terms')->default('net30');
            $table->decimal('credit_limit', 15, 2)->nullable();
            $table->string('pricing_tier')->default('std');
            
            // Account Status & Tier
            $table->boolean('is_active')->default(true);
            $table->string('account_tier')->default('t3');
            $table->string('account_manager')->nullable();
            
            // Commercial & Fit-Out Notes
            $table->text('fitout_notes')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
