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
        Log::info('Request Data Before Validation:', $request->all());


        $validated = $request->validate([
            'customer_name' => 'required|string',
            'admin_name' => 'required|string',
            'product_type' => 'required|string',
            'service_type' => 'required|string',
            'order_date' => 'required|date_format:Y-m-d',
            'order_time' => 'required|date_format:H:i',
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
            'cod_amount' => 'nullable|numeric',
            'delivery_charges' => 'nullable|numeric',
            'total_charges' => 'nullable|numeric',
            'fuel_surcharge' => 'nullable|numeric',
            'sales_tax' => 'nullable|numeric',
            'net_amount' => 'nullable|numeric',
            'status' => 'nullable|string',
        ]);

        Log::info('Validated Data:', $validated);

        try {
            $formBooking = FormBooking::create($validated);

            Log::info('Data successfully saved to the database.');

            return redirect()->back()->with('success', 'Booking successfully created.');
        } catch (\Exception $e) {
            Log::error('Error saving data: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to save booking.');
        }
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

        $formBooking->update($request->all());

        return redirect()->route('form-booking.show', $formBooking->id)->with('success', 'Booking successfully updated.');
    }
    public function destroy($id)
    {
        $formBooking = FormBooking::findOrFail($id);

        $formBooking->delete();

        return redirect()->route('form-booking.index')->with('success', 'Booking successfully deleted.');
    }
}
