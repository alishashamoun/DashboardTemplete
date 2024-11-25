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
        Schema::create('bookings_form', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('admin_name');
            $table->string('product_type');
            $table->string('service_type');
            $table->date('order_date');
            $table->time('order_time');
            $table->string('booking_type');
            $table->string('area')->nullable();
            $table->string('shipper_name');
            $table->string('shipper_phone');
            $table->string('shipper_email');
            $table->string('cnic')->nullable();
            $table->text('pickup_address');
            $table->text('sender_address');
            $table->string('city')->nullable();
            $table->string('consignee_name')->nullable();
            $table->string('consignee_email')->nullable();
            $table->string('consignee_phone')->nullable();
            $table->string('receiver_address')->nullable();
            $table->string('consignee_address')->nullable();
            $table->string('item_detail')->nullable();
            $table->string('special_instruction')->nullable();
            $table->string('reference_no')->nullable()->unique();
            $table->string('no_of_piece')->nullable();
            $table->string('weight')->nullable();
            $table->integer('cod_amount')->nullable();
            $table->integer('delivery_charges')->nullable();
            $table->integer('total_charges')->nullable();
            $table->integer('fuel_surcharge')->nullable();
            $table->integer('sales_tax')->nullable();
            $table->integer('net_amount')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings_form');
    }
};
