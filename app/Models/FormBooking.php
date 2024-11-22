<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormBooking extends Model
{
    protected $table = 'booking_form';

    protected $fillable = [

        'customer_id',
        'order_id',
        'customer_name',
        'admin_name',
        'product_type',
        'service_type',
        'order_date',
        'order_time',
        'booking_type',
        'area',
        'shipper_name',
        'shipper_phone',
        'shipper_email',
        'cnic',
        'pickup_address',
        'sender_address',
        'city',
        'consignee_name',
        'consignee_email',
        'consignee_phone',
        'receiver_address',
        'consignee_address',
        'item_detail',
        'special_instruction',
        'reference_no',
        'no_of_piece',
        'weight',
        'cod_amount',
        'delivery_charges',
        'total_charges',
        'fuel_surcharge',
        'sales_tax',
        'net_amount',
        'status',
    ];
}
