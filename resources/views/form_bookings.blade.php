@extends('layout.app')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-fluid flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <h1>Booking Form</h1>
                    <form method="POST" action="{{ route('form-booking.store') }}">
                        @csrf
                        <div class="card">
                            <div class="d-flex align-items-end row">
                                <div class="col-12">
                                    <div class="card-body">
                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label for="name">Select Customer</label>
                                                <select name="" id="" class="form-control"
                                                    name="customer_id">
                                                    <option value="">xavi charerjee</option>
                                                    <option value="">debi beigh</option>
                                                    <option value="">sanebeh fars</option>
                                                </select>
                                                @error('customer_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                            </div>

                                            <div class="col-2">
                                                <label for="name">Branch</label>
                                                <select name="" id="" class="form-control" name="branch">
                                                    <option value="">islamabad</option>
                                                    <option value="">karachi</option>
                                                    <option value="">thatta</option>
                                                </select>
                                                @error('branch')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                            </div>

                                            <div class="col-2">
                                                <label for="name">Product Type</label>
                                                <select name="" id="" class="form-control"
                                                    name="product_type">
                                                    <option value="">item</option>
                                                    <option value="">sotable</option>
                                                    <option value="">manifecturing</option>
                                                </select>
                                                @error('branch')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

                                            </div>

                                            <div class="col-2">
                                                <label for="name">Service Type</label>
                                                <select name="" id="" class="form-control"
                                                    name="service_type">
                                                    <option value="">ngjg</option>
                                                    <option value="">hgkm</option>
                                                    <option value="">gfh</option>
                                                </select>
                                                @error('branch')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            </div>

                                            <div class="col-2">
                                                <label for="name">Order Date</label>
                                                <input type="text" class="form-control" name="order_date"
                                                    value="<?php echo date('Y-m-d'); ?>">
                                                    @error('branch')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="col-2">
                                                <label for="name">Order Time</label>
                                                <input type="text" class="form-control" name="order_time"
                                                    value="<?php echo date('H:i'); ?>">
                                                    @error('branch')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-2">
                                                <label for="name">Booking Type</label>
                                                <select name="" id="" class="form-control"
                                                    name="booking_type">
                                                    <option value="invoice">invoice</option>
                                                    <option value="cash">cash</option>
                                                    <option value="pay">pay</option>
                                                </select>
                                                @error('branch')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h4 class="mb-3">Pickup Details</h4>
                                    <div class="row mb-3">
                                        <div class="col-2">
                                            <label for="name">City/Area</label>
                                            <select name="" id="" class="form-control" name="area">
                                                <option value="invoice">invoice</option>
                                                <option value="cash">cash</option>
                                                <option value="pay">pay</option>
                                            </select>
                                            @error('branch')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        </div>
                                        <div class="col-2">
                                            <label for="name">Name</label>
                                            <input type="text" placeholder="Shipper Name" class="form-control"
                                                name="shipper_name">
                                                @error('branch')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-2">
                                            <label for="name">Phone</label>
                                            <input type="text" placeholder="Shipper Phone" class="form-control"
                                                name="shipper_phone">
                                                @error('branch')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-2">
                                            <label for="name">Email</label>
                                            <input type="text" placeholder="Shipper Email" class="form-control"
                                                name="shipper_email">
                                                @error('branch')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-1">
                                            <label for="name">CNIC</label>
                                            <input type="text" placeholder="CNIC" class="form-control"
                                                name="cnic">
                                                @error('branch')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-3">
                                            <label for="">Pick Address</label>
                                            <input type="text" placeholder="Pick Address" class="form-control"
                                                name="pickup_address">
                                                @error('branch')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-12">
                                            <label for="">Address</label>
                                            <textarea name="" id="" cols="15" rows="5" class="form-control" name="sender_address"
                                                placeholder="Sender Address"></textarea>
                                                @error('branch')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 mb-4 order-0">
                            <div class="row d-flex">

                                <div class="col-8">
                                    <div class="card mt-3">
                                        <div class="card-body">
                                            <h4 class="mb-3">Delivery Details</h4>
                                            <div class="row mb-3">
                                                <div class="col-3">
                                                    <label for="name">City/Area</label>
                                                    <select name="" id="" class="form-control"
                                                        name="city">
                                                        <option value="invoice">invoice</option>
                                                        <option value="cash">cash</option>
                                                        <option value="pay">pay</option>
                                                    </select>
                                                    @error('branch')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="col-3">
                                                    <label for="name">Name</label>
                                                    <input type="text" placeholder="Consignee Name"
                                                        name="consignee_name" class="form-control">
                                                        @error('branch')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-3">
                                                    <label for="name">Email</label>
                                                    <input type="text" placeholder="Consignee Email"
                                                        name="consignee_email" class="form-control">
                                                        @error('branch')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-3">
                                                    <label for="name">Phone</label>
                                                    <input type="text" placeholder="Shipper Phone"
                                                        name="consignee_phone" class="form-control">
                                                        @error('branch')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-6">
                                                    <label for="">Receiver Address</label>
                                                    <input type="text" placeholder="Receiver Address"
                                                        name="receiver_address" class="form-control">
                                                        @error('branch')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-6">
                                                    <label for="">Address</label>
                                                    <input type="text" placeholder="Consignee Address"
                                                        name="consignee_address" class="form-control">
                                                        @error('consignee_address')
                                                        @error('                                                    <input type="text" placeholder="Consignee Address"')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12"
                                                    style="border: 1px solid #e3e3e3; min-height: 200px; ">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 mt-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col-12">
                                                <label for="">Item Detail</label>

                                                <textarea name="" id="" cols="50" rows="1" class="form-control" name="item_detail"></textarea>
                                                @error('item_detail')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            </div>

                                            <div class="col-12 mt-3">
                                                <label for="">
                                                    Special Instruction</label>
                                                <textarea name="" id="" cols="50" rows="1" class="form-control"
                                                    name="special_instruction"></textarea>
                                                    @error('special_instruction')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="row">
                                                <div class="col-6 mt-3">
                                                    <label for="">Reference No.</label>
                                                    <input type="number" class="form-control" name="reference_no">
                                                    @error('reference_no')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                </div>
                                                <div class="col-6 mt-3">
                                                    <label for="">No. of Pieces</label>
                                                    <input type="number" class="form-control" name="no_of_piece">
                                                    @error('no_of_piece')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-4 mt-3">
                                                    <label for="">Order ID.</label>
                                                    <input type="number" name="" id=""
                                                        class="form-control" name="order_id">
                                                        @error('order_id')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <label for="">Weight (Kg)</label>
                                                    <input type="number" name="" id=""
                                                        class="form-control" name="weight">
                                                        @error('weight')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="col-4 mt-3">
                                                    <label for="">*COD Amount</label>
                                                    <input type="number" name="" id=""
                                                        class="form-control" name="cod_amount">
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

                        <div class="row">
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card mt-3">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <h4 class="mb-3">Price Information</h4>
                                                <div class="row mb-3">
                                                    <div class="col-2">
                                                        <label for="name">Delivery Charges</label>
                                                        <input type="text" value="0" class="form-control"
                                                            name="delivery_charges">
                                                            @error('delivery_charges')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-2">
                                                        <label for="name">Total Charges</label>
                                                        <input type="text" class="form-control" name="total_charges"
                                                            value="0.00">
                                                            @error('total_charges')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-2">
                                                        <label for="name">Fuel Surcharge (0%)</label>
                                                        <input type="text" class="form-control" name="fuel_surcharge"
                                                            value="0.00">
                                                            @error('fuel_surcharge')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-2">
                                                        <label for="name">Sales tax</label>
                                                        <input type="text" class="form-control" name="sales_tax"
                                                            value="0.00">
                                                            @error('sales_tax')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-2">
                                                        <label for="name">Net Amount</label>
                                                        <input type="text" class="form-control" name="net_Amount"
                                                            value="0.00">
                                                            @error('net_Amount')
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

                        <div class="row">
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card mt-3">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-12">
                                            <div class="card-body">
                                                <h4 class="mb-3">Status</h4>
                                                <div class="row mb-3">
                                                    <div class="col-3">
                                                        <label for="name">status</label>
                                                        <select name="status" id=""
                                                            class="js-example-templating form-control">
                                                            <option value="">new booked</option>
                                                            <option value="">new booked</option>
                                                            <option value="">parcel</option>
                                                            <option value="">parcel</option>
                                                            <option value="">parcel</option>
                                                            <option value="">parcel</option>
                                                            <option value="">parcel</option>
                                                            <option value="">parcel</option>
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
                            <a href="{{ route('form-booking.index') }}" type="submit" class="btn btn-primary">Save</a>
                            <a href="#" class="btn btn-primary">Save & Print</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
