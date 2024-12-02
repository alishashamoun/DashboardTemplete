<?php

namespace App\Http\Controllers;

use App\Models\BusinessAccount;
use DB;
use File;
use Hash;
use Illuminate\Http\Request;
use Log;
use Validator;

class BussinessAccountController extends Controller
{
    public function index()
    {
        $bussiness = BusinessAccount::all();
        return view('business_accounts.index', compact('bussiness'));
    }

    public function create()
    {
        return view('business_accounts.create');
    }

    public function store(Request $request)
    {
        Log::info('Validated data:', $request->all());

        $validated = $request->validate([
            'business_name' => 'required|string|max:255',
            'customer_type' => 'required|string|max:255',
            'cnic' => 'required|string|max:15',
            'default_branch' => 'required|string|max:255',
            'sales_representative' => 'required|string|max:255',
            'office_address' => 'required|string|max:255',
            'pickup_address' => 'required|string|max:255',
            'logo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cnic_copy' => 'nullable|mimes:jpeg,png,jpg,pdf|max:2048',
            'enable_booking_form' => 'nullable|boolean',
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'email' => 'required|email|unique:businesses_account,email',
            'region' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'website_url' => 'nullable|url',
            'product_type' => 'required|string|max:255',
            'shipments_month' => 'required|integer',
            'swift_code' => 'required|string|max:255',
            'settlment' => 'required|string|max:255',
            'bank_name' => 'required|string|max:255',
            'account_title' => 'required|string|max:255',
            'account_number' => 'required|string|max:20',
            'branch_name' => 'required|string|max:255',
            'branch_code' => 'required|string|max:50',
            'ntn' => 'nullable|string|max:20',
            'stn' => 'nullable|string|max:20',
            'iban' => 'nullable|string|max:34',
            'password' => 'required|string|min:8|same:confirmation_password',
        ]);

        $validated['enable_booking_form'] = $request->has('enable_booking_form') ? true : false;
        Log::info('Validated data:', $validated);
        // dd($request->all());

        try {
            DB::beginTransaction();

            if ($request->hasFile('logo_image')) {
                $logoImage = $request->file('logo_image');
                $logoImageName = time() . '_' . $logoImage->getClientOriginalName();
                $logoImage->move(public_path('uploads/logo_images'), $logoImageName);
            }

            if ($request->hasFile('cnic_copy')) {
                $cnicCopy = $request->file('cnic_copy');
                $cnicCopyName = time() . '_' . $cnicCopy->getClientOriginalName();
                $cnicCopy->move(public_path('uploads/cnic_copies'), $cnicCopyName);
            }

            $business = BusinessAccount::create([
                'business_name' => $validated['business_name'],
                'customer_type' => $validated['customer_type'],
                'cnic' => $validated['cnic'],
                'default_branch' => $validated['default_branch'],
                'sales_representative' => $validated['sales_representative'],
                'office_address' => $validated['office_address'],
                'pickup_address' => $validated['pickup_address'],
                'enable_booking_form' => $validated['enable_booking_form'],
                'name' => $validated['name'],
                'mobile' => $validated['mobile'],
                'email' => $validated['email'],
                'region' => $validated['region'],
                'area' => $validated['area'],
                'contact_person' => $validated['contact_person'],
                'website_url' => $validated['website_url'],
                'product_type' => $validated['product_type'],
                'shipments_month' => $validated['shipments_month'],
                'settlment' => $validated['settlment'],
                'swift_code' => $validated['swift_code'],
                'bank_name' => $validated['bank_name'],
                'account_title' => $validated['account_title'],
                'account_number' => $validated['account_number'],
                'branch_name' => $validated['branch_name'],
                'branch_code' => $validated['branch_code'],
                'ntn' => $validated['ntn'],
                'stn' => $validated['stn'],
                'iban' => $validated['iban'],
                'password' => Hash::make($validated['password']),
                'logo_image' => $logoImageName,
                'cnic_copy' => $cnicCopyName,
            ]);

            $business->save();

            DB::commit();

            return redirect()->route('bussiness-account.index')->with('success', 'Business account created successfully!');
        } catch (\Exception $e) {

            Log::error('Error saving business data: ' . $e->getMessage());
            DB::rollBack();
            throw $e;

            return redirect()->back()->with('error', 'Failed to save business.');
        }
    }

    public function show($id)
    {
        // Retrieve the business record from the database
        $business = BusinessAccount::findOrFail($id);

        // Log the file path
        Log::info('File path:', ['path' => asset('storage/' . $business->cnic_copy)]);

        // Return view with the business data
        return view('business_accounts.show', compact('business'));
    }

    public function edit($id)
    {
        $business = BusinessAccount::find($id);
        return view('business_accounts.edit', compact('business'));
    }

    public function update(Request $request, $id)
    {

        // dd($request->all());
        $validated = $request->validate([
            'business_name' => 'required|string|max:255',
            'customer_type' => 'required|string|max:255',
            'cnic' => 'required|string|max:15',
            'default_branch' => 'required|string|max:255',
            'sales_representative' => 'required|string|max:255',
            'office_address' => 'required|string|max:255',
            'pickup_address' => 'required|string|max:255',
            'logo_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cnic_copy' => 'nullable|mimes:jpeg,png,jpg,pdf|max:2048',
            'enable_booking_form' => 'nullable|boolean',
            'name' => 'required|string|max:255',
            'mobile' => 'required|string|max:20',
            'email' => 'required|email|unique:businesses_account,email,' . $id,
            'region' => 'required|string|max:255',
            'area' => 'required|string|max:255',
            'contact_person' => 'required|string|max:255',
            'website_url' => 'nullable|url',
            'product_type' => 'required|string|max:255',
            'shipments_month' => 'required|integer',
            'swift_code' => 'required|string|max:255',
            'settlment' => 'required|string|max:255',
            'bank_name' => 'required|string|max:255',
            'account_title' => 'required|string|max:255',
            'account_number' => 'required|string|max:20',
            'branch_name' => 'required|string|max:255',
            'branch_code' => 'required|string|max:50',
            'ntn' => 'nullable|string|max:20',
            'stn' => 'nullable|string|max:20',
            'iban' => 'nullable|string|max:34',
            'password' => 'nullable|string|min:8|same:confirmation_password',
        ]);

        Log::info('Business instance:', $validated);

        $validated['enable_booking_form'] = $request->has('enable_booking_form') ? true : false;
        // dd($request->all());

        try {
            DB::beginTransaction();

            if ($request->hasFile('logo_image')) {
                $logoImage = $request->file('logo_image');
                $logoImageName = time() . '_' . $logoImage->getClientOriginalName();
                $logoImage->move(public_path('uploads/logo_images'), $logoImageName);
            }

            if ($request->hasFile('cnic_copy')) {
                $cnicCopy = $request->file('cnic_copy');
                $cnicCopyName = time() . '_' . $cnicCopy->getClientOriginalName();
                $cnicCopy->move(public_path('uploads/cnic_copies'), $cnicCopyName);
            }

            $business = BusinessAccount::findOrFail($id);

            $business->update([
                'business_name' => $validated['business_name'],
                'customer_type' => $validated['customer_type'],
                'cnic' => $validated['cnic'],
                'default_branch' => $validated['default_branch'],
                'sales_representative' => $validated['sales_representative'],
                'office_address' => $validated['office_address'],
                'pickup_address' => $validated['pickup_address'],
                'enable_booking_form' => $validated['enable_booking_form'],
                'name' => $validated['name'],
                'mobile' => $validated['mobile'],
                'email' => $validated['email'],
                'region' => $validated['region'],
                'area' => $validated['area'],
                'contact_person' => $validated['contact_person'],
                'website_url' => $validated['website_url'],
                'product_type' => $validated['product_type'],
                'shipments_month' => $validated['shipments_month'],
                'settlment' => $validated['settlment'],
                'swift_code' => $validated['swift_code'],
                'bank_name' => $validated['bank_name'],
                'account_title' => $validated['account_title'],
                'account_number' => $validated['account_number'],
                'branch_name' => $validated['branch_name'],
                'branch_code' => $validated['branch_code'],
                'ntn' => $validated['ntn'],
                'stn' => $validated['stn'],
                'iban' => $validated['iban'],
                'password' => Hash::make($validated['password']),
                'logo_image' => $logoImageName,
                'cnic_copy' => $cnicCopyName,
            ]);


            $business->save();

            DB::commit();

            return redirect()->route('bussiness-account.index')->with('success', 'Business account Updated successfully!');
        } catch (\Exception $e) {
            Log::error('Error updating business: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Failed to update business: ' . $e->getMessage());
        }


    }
    public function destroy($id)
    {
        $business = BusinessAccount::find($id);
        $business->delete();

        return redirect()->route('bussiness-account.index')->with('success', 'Business account deleted successfully!');
    }

}
