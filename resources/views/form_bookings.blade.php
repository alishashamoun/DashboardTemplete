@extends('layout.app')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">

        <form action="{{ route('form-booking.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <h1>Booking Form</h1>
                    <div class="row d-flex align-items-end">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row mb-3">
                                        <div class="col-2">
                                            <label for="name">Select Customer</label>
                                            <select id="" class="form-control" name="customer_name" required>
                                                <option value="jonah">Jonah</option>
                                                <option value="xaviye">Xaviye</option>
                                            </select>
                                            @error('customer_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>

                                        <div class="col-2">
                                            <label for="admin_name">Branch</label>
                                            <select class="form-control" name="admin_name" required>
                                                <option value="" disabled selected>Select Branch</option> <!-- Placeholder option -->
                                                <!-- Add other dynamic options here -->
                                                <option value="branch_1">Branch 1</option>
                                                <option value="branch_2">Branch 2</option>
                                                <!-- More options can be dynamically added from your database -->
                                            </select>
                                            @error('admin_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="col-2">
                                            <label for="name">Product Type</label>
                                            <select id="" class="form-control" name="product_type" required>
                                                <option value="product_1">Product 1</option>
                                                <option value="product_1">Product 2</option>

                                            </select>
                                            @error('product_type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                        </div>

                                        <div class="col-2">
                                            <label for="name">Service Type</label>
                                            <select id="" class="form-control" name="service_type" >
                                                <option value="service_1">Service 1</option>
                                                <option value="service_2">Service 2</option>
                                            </select>
                                            @error('service_type')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-2">
                                            <label for="name">Order Date</label>
                                            <input type="date" class="form-control" name="order_date"
                                                value="<?php echo date('Y-m-d'); ?>">
                                            @error('order_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-2">
                                            <label for="name">Order Time</label>
                                            <input type="time" class="form-control" name="order_time"
                                                value="<?php echo date('H:i'); ?>">
                                            @error('order_time')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="row mt-4">
                                            <div class="col-2">
                                                <label for="name">Booking Type</label>
                                                <select id="" class="form-control" name="booking_type" >
                                                    <option value="apnd">Apnd</option>
                                                    <option value="apnd">Apnd</option>
                                                </select>
                                                @error('booking_type')
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
                                    <h4 class="mb-3">Pickup Details</h4>
                                    <div class="row mb-3">
                                        <div class="col-2">
                                            <label for="name">City/Area</label>
                                            <select id="" class="form-control" name="area" >
                                                <option value="islamabad">Islamabad</option>
                                                <option value="karachi">Karachi</option>

                                            </select>
                                            @error('area')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-2">
                                            <label for="name">Name</label>
                                            <input type="text" placeholder="Shipper Name" class="form-control"
                                                name="shipper_name">
                                            @error('shipper_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-2">
                                            <label for="name">Phone</label>
                                            <input type="text" placeholder="Shipper Phone" class="form-control"
                                                name="shipper_phone">
                                            @error('shipper_phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-2">
                                            <label for="name">Email</label>
                                            <input type="text" placeholder="Shipper Email" class="form-control"
                                                name="shipper_email">
                                            @error('shipper_email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-1">
                                            <label for="name">CNIC</label>
                                            <input type="text" placeholder="CNIC" class="form-control" name="cnic" >
                                            @error('cnic')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-3">
                                            <label for="">Pick Address</label>
                                            <input type="text" placeholder="Pick Address" class="form-control" required
                                                name="pickup_address">
                                            @error('pickup_address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <label for="">Address</label>
                                            <textarea id="" cols="15" rows="5" class="form-control" name="sender_address" required
                                                placeholder="Sender Address"></textarea>
                                            @error('sender_address')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="row d-flex">
                        <div class="col-lg-12 mb-4 order-0">
                            <div class="row">

                                <div class="col-8">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <h4 class="mb-3">Delivery Details</h4>
                                            <div class="row mb-3">
                                                <div class="col-3">
                                                    <label for="name">City/Area</label>
                                                    <select id="" class="form-control" name="city" required>
                                                        <option value="invoice">invoice</option>
                                                        <option value="cash">cash</option>
                                                        <option value="pay">pay</option>
                                                    </select>
                                                    @error('city')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-3">
                                                    <label for="name">Name</label>
                                                    <input type="text" placeholder="Consignee Name"
                                                        name="consignee_name" class="form-control" required>
                                                    @error('consignee_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-3">
                                                    <label for="name">Email</label>
                                                    <input type="text" placeholder="Consignee Email"
                                                        name="consignee_email" class="form-control" required>
                                                    @error('consignee_email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-3">
                                                    <label for="name">Phone</label>
                                                    <input type="text" placeholder="Shipper Phone"
                                                        name="consignee_phone" class="form-control" required>
                                                    @error('consignee_phone')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>

                                            <div class="row mb-3">

                                                <div class="col-6">
                                                    <label for="">Receiver Address</label>
                                                    <input type="text" placeholder="Receiver Address"
                                                        name="receiver_address" class="form-control" required>
                                                    @error('receiver_address')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="">Address</label>
                                                    <input type="text" placeholder="Consignee Address"
                                                        name="consignee_address" class="form-control" required>
                                                    @error('consignee_address')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="row mt-4">
                                                    <div class="col-12"
                                                        style="border: 1px solid #e3e3e3; min-height: 200px; ">

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-4 mt-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="mb-3">Shipment Details</h4>
                                            <div class="row">
                                                <div class="col-12">
                                                    <label for="">Item Detail</label>

                                                    <textarea id="" cols="50" rows="1" class="form-control" name="item_detail" required></textarea>
                                                    @error('item_detail')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-12 mt-3">
                                                    <label for="">
                                                        Special Instruction</label>
                                                    <textarea id="" cols="50" rows="1" class="form-control" name="special_instruction" required></textarea>
                                                    @error('special_instruction')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-6 mt-3">
                                                    <label for="">Reference No.</label>
                                                    <input type="number" class="form-control" name="reference_no" required>
                                                    @error('reference_no')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6 mt-3">
                                                    <label for="">No. of Pieces</label>
                                                    <input type="number" class="form-control" name="no_of_piece" required>
                                                    @error('no_of_piece')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-4 mt-3">
                                                    <label for="">Order ID.</label>
                                                    <input type="number" id="" class="form-control" required
                                                        name="order_id">
                                                    @error('order_id')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <label for="">Weight (Kg)</label>
                                                    <input type="number" id="" class="form-control" required
                                                        name="weight">
                                                    @error('weight')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <label for="">*COD Amount</label>
                                                    <input type="number" id="" class="form-control" required
                                                        name="cod_amount">
                                                    @error('cod_amount')
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




                    <!-- -->
                    <div class="row">
                        <div class="col-lg-12 mb-4 order-0">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h4 class="mb-3">Price Information</h4>
                                    <div class="row mb-3">
                                        <div class="col-2">
                                            <label for="name">Delivery Charges</label>
                                            <input type="number" value="0" class="form-control" required
                                                name="delivery_charges">
                                            @error('delivery_charges')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-2">
                                            <label for="name">Total Charges</label>
                                            <input type="number" class="form-control" name="total_charges" required
                                                value="0.00">
                                            @error('total_charges')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-2">
                                            <label for="name">Fuel Surcharge (0%)</label>
                                            <input type="number" class="form-control" name="fuel_surcharge" required
                                                value="0.00">
                                            @error('fuel_surcharge')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-2">
                                            <label for="name">Sales tax</label>
                                            <input type="number" class="form-control" name="sales_tax"  value="0.00" required>
                                            @error('sales_tax')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-2">
                                            <label for="name">Net Amount</label>
                                            <input type="number" class="form-control" name="net_amount" value="0.00" required>
                                            @error('net_Amount')
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
                                    <h4 class="mb-3">Status</h4>
                                    <div class="row mb-3">
                                        <div class="col-3">
                                            <label for="name">status</label>
                                            <select name="status" id=""
                                                class="js-example-templating form-control" required>
                                                <option value="new_booked">New booked</option>
                                                <option value="parvel">Parcel</option>
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-3 mt-4">
                                            <label for="" class="control-label">
                                                <input type="checkbox" value="1" checked="true">
                                                Receipt Print
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="save-printbtn">
                <button type="submit" class="btn btn-primary">Save</button>
                {{-- <button type="" class="btn btn-primary">Save & Print</button> --}}
            </div>
        </form>
    </div>
@endsection
