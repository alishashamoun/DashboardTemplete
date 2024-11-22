<?php

namespace App\Http\Controllers;

use App\Models\FormBooking;
use Illuminate\Http\Request;
use Log;

class FormBookingsController extends Controller
{
    public function index()
    {
        $formBookings = FormBooking::all();
        return view('form_bookings', compact('formBookings'));
    }

    public function create()
    {
        return view('form_bookings');
    }

    public function store(Request $request)
    {

        Log::info($request->all());

        $request->validate([
            'customer_id' => 'required|integer',
            'order_id' => 'required|string',
            'customer_name' => 'required|string',
            'admin_name' => 'required|string',
            'product_type' => 'required|string',
            'service_type' => 'required|string',
            'order_date' => 'required|string',
            'order_time' => 'required|string',
            'booking_type' => 'required|string',
            'area' => 'nullable|string',
            'shipper_name' => 'required|string',
            'shipper_phone' => 'required|string',
            'shipper_email' => 'required|email',
            'cnic' => 'nullable|string',
            'pickup_address' => 'required|string',
            'sender_address' => 'required|string',
            'city' => 'nullable|string',
            'consignee_name' => 'nullable|string',
            'consignee_email' => 'nullable|email',
            'consignee_phone' => 'nullable|string',
            'receiver_address' => 'nullable|string',
            'consignee_address' => 'nullable|string',
            'item_detail' => 'nullable|string',
            'special_instruction' => 'nullable|string',
            'reference_no' => 'nullable|string',
            'no_of_piece' => 'nullable|string',
            'weight' => 'nullable|string',
            'cod_amount' => 'nullable|string',
            'delivery_charges' => 'nullable|string',
            'total_charges' => 'nullable|string',
            'fuel_surcharge' => 'nullable|string',
            'sales_tax' => 'nullable|string',
            'net_amount' => 'nullable|string',
            'status' => 'nullable|string',
        ]);


        FormBooking::create([
            'customer_id' => $request->customer_id,
            'order_id' => $request->order_id,
            'customer_name' => $request->customer_name,
            'admin_name' => $request->admin_name,
            'product_type' => $request->product_type,
            'service_type' => $request->service_type,
            'order_date' => $request->order_date,
            'order_time' => $request->order_time,
            'booking_type' => $request->booking_type,
            'area' => $request->area,
            'shipper_name' => $request->shipper_name,
            'shipper_phone' => $request->shipper_phone,
            'shipper_email' => $request->shipper_email,
            'cnic' => $request->cnic,
            'pickup_address' => $request->pickup_address,
            'sender_address' => $request->sender_address,
            'city' => $request->city,
            'consignee_name' => $request->consignee_name,
            'consignee_email' => $request->consignee_email,
            'consignee_phone' => $request->consignee_phone,
            'receiver_address' => $request->receiver_address,
            'consignee_address' => $request->consignee_address,
            'item_detail' => $request->item_detail,
            'special_instruction' => $request->special_instruction,
            'reference_no' => $request->reference_no,
            'no_of_piece' => $request->no_of_piece,
            'weight' => $request->weight,
            'cod_amount' => $request->cod_amount,
            'delivery_charges' => $request->delivery_charges,
            'total_charges' => $request->total_charges,
            'fuel_surcharge' => $request->fuel_surcharge,
            'sales_tax' => $request->sales_tax,
            'net_amount' => $request->net_amount,
            'status' => $request->status,

        ]);

        return redirect()->route('form-booking.index')->with('success', 'Booking successfully created.');
    }

    public function show($id)
    {
        $formBooking = FormBooking::findOrFail($id);


        return view('form_bookings.show', compact('formBooking'));
    }

    public function edit($id)
    {
        $formBooking = FormBooking::findOrFail($id);

        return view('form_bookings.edit', compact('formBooking'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'customer_id' => 'required|integer',
            'order_id' => 'required|string',
            'customer_name' => 'required|string',
            'admin_name' => 'required|string',
            'product_type' => 'required|string',
            'service_type' => 'required|string',
            'order_date' => 'required|string',
            'order_time' => 'required|string',
            'booking_type' => 'required|string',
            'area' => 'nullable|string',
            'shipper_name' => 'required|string',
            'shipper_phone' => 'required|string',
            'shipper_email' => 'required|email',
            'cnic' => 'nullable|string',
            'pickup_address' => 'required|string',
            'sender_address' => 'required|string',
            'city' => 'nullable|string',
            'consignee_name' => 'nullable|string',
            'consignee_email' => 'nullable|email',
            'consignee_phone' => 'nullable|string',
            'receiver_address' => 'nullable|string',
            'consignee_address' => 'nullable|string',
            'item_detail' => 'nullable|string',
            'special_instruction' => 'nullable|string',
            'reference_no' => 'nullable|string',
            'no_of_piece' => 'nullable|string',
            'weight' => 'nullable|string',
            'cod_amount' => 'nullable|string',
            'delivery_charges' => 'nullable|string',
            'total_charges' => 'nullable|string',
            'fuel_surcharge' => 'nullable|string',
            'sales_tax' => 'nullable|string',
            'net_amount' => 'nullable|string',
            'status' => 'nullable|string',
        ]);

        $formBooking = FormBooking::findOrFail($id);

        $formBooking->update([
            'customer_id' => $request->customer->name,
            'order_id' => $request->order_id,
            'customer_name' => $request->customer_name,
            'admin_name' => $request->admin_name,
            'product_type' => $request->product_type,
            'service_type' => $request->service_type,
            'order_date' => $request->order_date,
            'order_time' => $request->order_time,
            'booking_type' => $request->booking_type,
            'area' => $request->area,
            'shipper_name' => $request->shipper_name,
            'shipper_phone' => $request->shipper_phone,
            'shipper_email' => $request->shipper_email,
            'cnic' => $request->cnic,
            'pickup_address' => $request->pickup_address,
            'sender_address' => $request->sender_address,
            'city' => $request->city,
            'consignee_name' => $request->consignee_name,
            'consignee_email' => $request->consignee_email,
            'consignee_phone' => $request->consignee_phone,
            'receiver_address' => $request->receiver_address,
            'consignee_address' => $request->consignee_address,
            'item_detail' => $request->item_detail,
            'special_instruction' => $request->special_instruction,
            'reference_no' => $request->reference_no,
            'no_of_piece' => $request->no_of_piece,
            'weight' => $request->weight,
            'cod_amount' => $request->cod_amount,
            'delivery_charges' => $request->delivery_charges,
            'total_charges' => $request->total_charges,
            'fuel_surcharge' => $request->fuel_surcharge,
            'sales_tax' => $request->sales_tax,
            'net_amount' => $request->net_amount,
            'status' => $request->status,

        ]);

        return redirect()->route('form-booking.show', $formBooking->id)->with('success', 'Booking successfully updated.');
    }
    public function destroy($id)
    {
        $formBooking = FormBooking::findOrFail($id);

        $formBooking->delete();

        return redirect()->route('form-booking.index')->with('success', 'Booking successfully deleted.');
    }
}
