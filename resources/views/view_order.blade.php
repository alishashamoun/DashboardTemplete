@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-12">
                                <div class="card-body">
                                    <div class="panel panel-default ">
                                        <h6>Order Status Update</h6>
                                        <div class="row">
                                            <div class="col-2">
                                                <label for="">Tracking No</label>
                                                <div class="input-icon-wrapper">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                    <input type="text" class="input-field" placeholder="Tracking No">
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <label for="">Pickup Name</label>
                                                <div class="input-icon-wrapper">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-truck"></i>
                                                    </span>
                                                    <input type="text" class="input-field" placeholder="Pickup Name">
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <label for="">Pickup Phone</label>
                                                <div class="input-icon-wrapper">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-phone"></i>
                                                    </span>
                                                    <input type="text" class="input-field" placeholder="Pickup Phone">
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <label for="">Date Type</label>
                                                  <select name="" id="" class="form-control" style="border-radius: 20px;">
                                                    <option value="">1</option>
                                                    <option value="">2</option>
                                                    <option value="">3</option>
                                                  <option value="">4</option>
                                                  </select>

                                            </div>

                                            <div class="col-1">
                                                <label for="">From</label>
                                                <div class="input-icon-wrapper">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-calendar"></i>
                                                    </span>
                                                    <input type="text" value="10-8-2024" class="input-field">
                                                </div>
                                            </div>

                                            <div class="col-1">
                                                <label for="">To</label>
                                                <div class="input-icon-wrapper">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-calendar"></i>
                                                    </span>
                                                    <input type="text" value="10-8-2024" class="input-field">
                                                </div>
                                            </div>

                                            <div class="col-2">
                                                <label for="">Customer</label>
                                                <select name="" id="" class="js-example-templating form-control" style="border-radius: 20px;">
                                                    <option value="">all customer</option>
                                                    <option value="">marquee</option>
                                                  </select>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col-2">
                                                <label for="">Pickup Rider</label>
                                                <select name="" id="" class="js-example-templating form-control" style="border-radius: 20px;">
                                                    <option value="">all</option>
                                                    <option value="">karachi</option>
                                                  </select>

                                            </div>
                                            <div class="col-2">
                                                <label for="">Delivery Rider</label>
                                                <select name="" id="" class="js-example-templating form-control" style="border-radius: 20px;">
                                                    <option value="">all</option>
                                                    <option value="">karachi</option>
                                                  </select>
                                            </div>

                                            <div class="col-2">
                                                <label for="">
                                                    Order Status</label>
                                                    <select name="" id="" class="js-example-templating form-control" style="border-radius: 20px;">
                                                        <option value="">all</option>
                                                        <option value="">karachi</option>
                                                      </select>
                                            </div>

                                            <div class="col-2">
                                                <label for="">
                                                    Origin</label>
                                                    <select name="" id="" class="js-example-templating form-control" style="border-radius: 20px;">
                                                        <option value="">all</option>
                                                        <option value="">karachi</option>
                                                      </select>
                                            </div>

                                            <div class="col-2">
                                                <label for="">Destination</label>
                                                <select name="" id="" class="js-example-templating form-control" style="border-radius: 20px;">
                                                    <option value="">all city</option>
                                                    <option value="">karachi</option>
                                                  </select>
                                            </div>

                                            <div class="col-2">
                                                <label for="">Delayed Order</label>
                                                <select name="" id="" class="js-example-templating form-control" style="border-radius: 20px;">
                                                    <option value="">all</option>
                                                    <option value="">karachi</option>
                                                  </select>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-6">
                                                <button class="btn btn-primary" style="padding: 5px 50px;border-radius: 20px;">
                                                    Search
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
