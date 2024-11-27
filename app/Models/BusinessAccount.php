<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessAccount extends Model
{

    protected $table = 'businesses_account';


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
        'account_number',
        'branch_name',
        'branch_code',
        'ntn',
        'stn',
        'iban',
        'swift_code',
        'settlment',
        'password',
    ];
}
