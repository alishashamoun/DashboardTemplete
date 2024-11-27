<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'businesses';

    protected $fillable = [
        'business_name',
        'customer_type',
        'cnic',
        'default_branch',
        'sales_representative',
        'office_address',
        'pickup_address',
        'logo_image',
        'cnic_copy',
        'enable_booking_form',
        'name',
        'mobile',
        'email',
        'region',
        'area',
        'contact_person',
        'website_url',
        'product_type',
        'shipments_month',
        'bank_name',
        'account_title',
        'swift_code',
        'settlment',
        'account_number',
        'branch_name',
        'branch_code',
        'ntn',
        'stn',
        'iban',
        'password',
    ];
}
