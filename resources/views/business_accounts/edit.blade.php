@extends('layout.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <div class="container-fluid flex-grow-1 container-p-y">

        <form action="{{ route('bussiness-account.update', $business->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <h6>Add Business<span style="color:#ccc; font-size:13px;">Let's get a quick overview...</span></h6>
                    <div class="row d-flex align-items-end">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="mb-4">Business Account Information</h5>
                                    <div class="row mb-3">
                                        <div class="col-2">
                                            <label for="business_name">Business Name:</label>
                                            <select class="form-control @error('business_name') is-invalid @enderror"
                                                id="business_name" name="business_name">
                                                <option value="jonah"
                                                    {{ old('business_name', $business->business_name) == 'jonah' ? 'selected' : '' }}>
                                                    Jonah</option>
                                                <option value="xaviye"
                                                    {{ old('business_name', $business->business_name) == 'xaviye' ? 'selected' : '' }}>
                                                    Xaviye</option>
                                            </select>
                                            @error('business_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror


                                        </div>

                                        <div class="col-2">
                                            <label for="customer_type">Customer Type :</label>
                                            <select class="form-control @error('customer_type') is-invalid @enderror"
                                                name="customer_type" id="customer_type">

                                                <option value="" disabled selected>Select type</option>
                                                <option value="customer_1"
                                                    {{ old('customer_type', $business->customer_type) == 'customer_1' ? 'selected' : '' }}>
                                                    Customer 1</option>
                                                <option value="customer_2"
                                                    {{ old('customer_type', $business->customer_type) == 'customer_2' ? 'selected' : '' }}>
                                                    Customer 2</option>
                                            </select>
                                            @error('customer_type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="col-3">
                                            <label for="cnic">CNIC</label>
                                            <select class="form-control @error('cnic') is-invalid @enderror" name="cnic"
                                                id="cnic">
                                                <option value="1"
                                                    {{ old('cnic', $business->cnic) == '1' ? 'selected' : '' }}>1</option>
                                                <option value="2"
                                                    {{ old('cnic', $business->cnic) == '2' ? 'selected' : '' }}>2</option>

                                            </select>
                                            @error('cnic')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>

                                        <div class="col-3">
                                            <label for="default_branch">Default Branch:</label>
                                            <select class="form-control @error('default_branch') is-invalid @enderror"
                                                name="default_branch" id="default_branch"
                                                value="{{ old('default_branch') }}">
                                                <option value="service_1"
                                                    {{ old('default_branch', $business->default_branch) == 'service_1' ? 'selected' : '' }}>
                                                    Service 1</option>
                                                <option value="service_2"
                                                    {{ old('default_branch', $business->default_branch) == 'service_2' ? 'selected' : '' }}>
                                                    Service 2</option>
                                            </select>
                                            @error('default_branch')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-2">
                                            <label for="sales_represent">Sales Representative:</label>
                                            <input type="text" name="sales_representative" id="sales_representative"
                                                class="form-control @error('sales_representative') is-invalid @enderror"
                                                value="{{ $business->sales_representative }}">
                                            @error('sales_representative')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12">
                                                <label for="office_address">Office Address :</label>
                                                <textarea name="office_address" cols="5" rows="2"
                                                    class="form-control @error('office_address') is-invalid @enderror" id="office_address">{{ $business->office_address }}</textarea>

                                                @error('office_address')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-12">
                                                <label for="pickup_address">Pickup Address :</label>
                                                <textarea name="pickup_address" cols="5" rows="2"
                                                    class="form-control @error('pickup_address') is-invalid @enderror" id="pickup_address">{{ $business->pickup_address }}</textarea>
                                                @error('pickup_address')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-3">
                                                <label for="logo_image">Logo Image :</label>
                                                <input type="file" name="logo_image"
                                                    class="@error('logo_image') is-invalid @enderror" id="logo_image">
                                                @if ($business->logo_image)
                                                    <img src="{{ asset('uploads/logo_images/' . $business->logo_image) }}"
                                                        alt="Business Image" width="100">
                                                @else
                                                    <p>No image uploaded</p>
                                                @endif

                                                @error('logo_image')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-3">
                                                <label for="cnic_copy">CNIC Copy :</label>
                                                <input type="file" name="cnic_copy" id="cnic_copy"
                                                    class=" @error('cnic_copy') is-invalid @enderror">

                                                @error('cnic_copy')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-3">
                                                <label for="enable_booking_form">Enable Booking Form :</label>
                                                <input type="checkbox" name="enable_booking_form"
                                                    class="@error('enable_booking_form') is-invalid @enderror"
                                                    id="enable_booking_form" value="1"
                                                    {{ old('enable_booking_form') ? 'checked' : '' }}>
                                                @error('enable_booking_form')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="mb-3">Contact Information</h5>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label for="name">Name #:</label>
                                            <input type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                id="name" value="{{ $business->name }}" />
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-4">
                                            <label for="mobile">Mobile #:</label>
                                            <input type="tel"
                                                class="form-control @error('mobile') is-invalid @enderror" name="mobile"
                                                id="mobile" value="{{ $business->mobile }}" />
                                            @error('mobile')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-4">
                                            <label for="email">Email</label>
                                            <input type="email" name="email"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                value="{{ $business->email }}" />
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label for="region">Region :</label>
                                            <select name="region" id="region"
                                                class="form-control @error('region') is-invalid @enderror"
                                                id="region">
                                                <option value="region"
                                                    {{ old('region', $business->region) == 'region' ? 'selected' : '' }}>
                                                    Region</option>
                                                <option value="region"
                                                    {{ old('region', $business->region) == 'region' ? 'selected' : '' }}>
                                                    Region</option>
                                            </select>
                                            @error('region')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="col-4">
                                            <label for="area">Area :</label>
                                            <input type="text" name="area"
                                                class="form-control @error('area') is-invalid @enderror" id="area"
                                                value="{{ $business->area }}" />
                                            @error('area')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label for="region">Contact Person #:</label>
                                            <input type="text"
                                                class="form-control @error('contact_person') is-invalid @enderror"
                                                name="contact_person" id="contact_person"
                                                value="{{ $business->contact_person }}" />
                                            @error('contact_person')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="mb-3">Shipment Details</h5>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label for="website_url">Website Url :</label>
                                            <input type="text"
                                                class="form-control @error('website_url') is-invalid @enderror"
                                                name="website_url" id="website_url"
                                                value="{{ $business->website_url }}" />
                                            @error('website_url')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-4">
                                            <label for="product_type">Product Type #:</label>

                                            <select name="product_type"
                                                class="form-control @error('product_type') is-invalid @enderror"
                                                id="product_type" value="{{ old('product_type') }}">
                                                <option value="product type 1"
                                                    {{ old('product_type', $business->product_type) == 'product type 1' ? 'selected' : '' }}>
                                                    Product type 1</option>
                                                <option value="product type 2"
                                                    {{ old('product_type', $business->product_type) == 'product type 2' ? 'selected' : '' }}>
                                                    Product type 2</option>
                                            </select>
                                            @error('product_type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-4">
                                            <label for="shipments month">Expected Average Shipments /
                                                Month :</label>
                                            <input type="number" name="shipments_month"
                                                class="form-control @error('shipments_month') is-invalid @enderror"
                                                id="shipments_month"
                                                value="{{ $business->shipments_month }}" />
                                            @error('shipments_month')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label for="settlment">Settlment Period #:</label>

                                            <select name="settlment" id="settlment"
                                                class="form-control @error('settlment') is-invalid @enderror"
                                                id="settlment" value="{{ old('settlment') }}">
                                                <option value="settlment period 1"
                                                    {{ old('settlment', $business->settlment) == 'settlment period 1' ? 'selected' : '' }}>
                                                    Settlment period 1</option>
                                                <option value="settlment period 2"
                                                    {{ old('settlment', $business->settlment) == 'settlment period 2' ? 'selected' : '' }}>
                                                    Settlment period 2</option>
                                                <option value="settlment period 3"
                                                    {{ old('settlment', $business->settlment) == 'settlment period 3' ? 'selected' : '' }}>
                                                    Settlment period 3</option>
                                            </select>
                                            @error('settlment')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 mb-4 order-0">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="mb-3">Bank Detail</h5>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label for="bank_name">Bank Name :</label>
                                            <select type="text" name="bank_name" id="bank_name"
                                                class="form-control @error('bank_name') is-invalid @enderror"
                                                id="bank_name" value="{{ old('bank_name') }}">
                                                <option value="bank_1"
                                                    {{ old('settlment', $business->settlment) == 'bank_1' ? 'selected' : '' }}>
                                                    bank 1</option>
                                                <option value="bank_2"
                                                    {{ old('settlment', $business->settlment) == 'bank_2' ? 'selected' : '' }}>
                                                    bank 2</option>
                                            </select>

                                            @error('bank_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-4">
                                            <label for="account_title">
                                                Account Title :</label>
                                            <input type="text" name="account_title"
                                                class="form-control @error('account_title') is-invalid @enderror"
                                                id="account_title" value="{{ $business->account_title }}" />
                                            @error('account_title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-4">
                                            <label for="account_number">
                                                Account Number :</label>
                                            <input type="text" name="account_number"
                                                class="form-control @error('account_number') is-invalid @enderror"
                                                id="account_number" value="{{ $business->account_number }}" />
                                            @error('account_number')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label for="branch_name">Branch Name :</label>
                                            <input type="text"
                                                class="form-control @error('branch_name') is-invalid @enderror"
                                                name="branch_name" id="branch_name"
                                                value="{{ $business->branch_name }}" />
                                            @error('branch_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-4">
                                            <label for="branch_code">
                                                Branch Code :</label>
                                            <input type="text" name="branch_code"
                                                class="form-control @error('branch_code') is-invalid @enderror"
                                                id="branch_code" value="{{ $business->branch_code }}" />
                                            @error('branch_code')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-4">
                                            <label for="swift_code">
                                                Swift Code :</label>
                                            <input type="text" name="swift_code"
                                                class="form-control @error('swift_code') is-invalid @enderror"
                                                id="swift_code" value="{{ $business->swift_code }}" />
                                            @error('swift_code')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-6">
                                            <label for="ntn">NTN :</label>
                                            <input type="text" class="form-control @error('ntn') is-invalid @enderror"
                                                name="ntn" id="ntn" value="{{ $business->ntn }}" />
                                            @error('ntn')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-6">
                                            <label for="stn">
                                                STN :</label>
                                            <input type="text" name="stn"
                                                class="form-control @error('stn') is-invalid @enderror" id="stn"
                                                value="{{ $business->stn }}" />
                                            @error('stn')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <label for="iban">IBAN :</label>
                                            <input type="text"
                                                class="form-control @error('iban') is-invalid @enderror" name="iban"
                                                id="iban" value="{{ $business->iban }}" />
                                            @error('iban')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row d-flex align-items-end">
                        <div class="col-lg-12 mb-4 order-0">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5 class="mb-3">Password</h5>
                                    <div class="row mb-3">
                                        <div class="col-4">
                                            <label for="password">Password:</label>
                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                name="password" id="password" value="{{ old('password') }}" />
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-4">
                                            <label for="confirmation_password">
                                                Confirm Password :</label>
                                            <input type="password" name="confirmation_password"
                                                class="form-control @error('confirmation_password') is-invalid @enderror"
                                                id="confirmation_password" value="{{ old('confirmation_password') }}" />
                                            @error('confirmation_password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="save-printbtn">
                <button type="submit" class="btn btn-primary">Save & Print</button>
            </div>
        </form>
    </div>
@endsection
