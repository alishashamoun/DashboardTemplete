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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('customer_type');
            $table->string('cnic');
            $table->string('default_branch');
            $table->string('sales_representative');
            $table->string('office_address');
            $table->string('pickup_address');
            $table->string('logo_image')->nullable();
            $table->string('cnic_copy')->nullable();
            $table->boolean('enable_booking_form')->default(false);
            $table->string('name');
            $table->string('mobile');
            $table->string('email')->unique();
            $table->string('region');
            $table->string('area');
            $table->string('contact_person');
            $table->string('website_url')->nullable();
            $table->string('product_type');
            $table->integer('shipments_month');
            $table->string('bank_name');
            $table->string('account_title');
            $table->string('account_number');
            $table->string('branch_name');
            $table->string('branch_code');
            $table->string('ntn')->nullable();
            $table->string('stn')->nullable();
            $table->string('iban')->nullable();
            $table->string('swift_code');
            $table->string('settlment');
            $table->string('password');
            $table->string('confirm_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
