@extends('layout.app')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-fluid flex-grow-1 container-p-y">
            <h5>Setup <span class="f-3">Let's get a quick overview...</span></h5>
            <div class="row">
                <div class="col-lg-2 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                                <div class="card-body">
                                    <div class="left-sidebar">
                                        <ul style="list-style: none">
                                            <li class="mt-3"><a href="#"> <i class="menu-icon fa-solid fa-gear"></i>Setup</a></li>
                                            <li class="mt-3" class="active"><a href="#">General Setting</a></li>
                                            <li class="mt-3"><a href="#">Status</a></li>

                                            <li class="mt-3" id="divide_box"><a href="#"><i class="menu-icon fa-solid fa-gear"></i>Zone Setup</a></li>
                                            <li class="mt-3"><a href="#">Service</a></li>
                                            <li class="mt-3"><a href="#">Zone</a></li>

                                            <li class="mt-3" id="divide_box"><a href="#"><i class="menu-icon fa-solid fa-dollar-sign"></i>Charges</a></li>
                                            <li class="mt-3" id="divide_box"><a href="#"><i class="menu-icon fa-solid fa-user"></i>Users</a></li>

                                        </ul>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                                <div class="card-body">
                                    <h5>Setting</h5>
                                    <div class="row mb-3">
                                    <div class="col-4">
                                        <label for="">GST (%)</label>
                                        <input type="text" value="0" name="name" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label for="">Returned Fee (Rs)</label>
                                        <input type="text"  value="0" name="name" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label for="">Cash Handling (%)</label>
                                        <input type="text"  value="0" name="name" placeholder="" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label for="">Rider/Vendor Auto Assign</label>
                                      <select name="" id="" class="form-control">
                                        <option value="">Active</option>
                                        <option value="">inactive</option>
                                      </select>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Auto Processing</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Active</option>
                                            <option value="">inactive</option>
                                          </select>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Manual Area</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                          </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label for="">Fuel Surcharge (%)</label>
                                        <input style="width: auto;border: none;vertical-align: middle;box-shadow: none;margin:0 5px 5px 9px;" type="checkbox" checked>Enable Customer Wise
                                        <input type="text" name="name" placeholder="" value="0" class="form-control">
                                    </div>

                                        <div class="col-2">
                                            <label for="">Bank Charges</label>
                                            <input type="text" name="name" value="100.0" placeholder="" class="form-control">
                                        </div>
                                        <div class="col-2">
                                            <label for="">Print Form</label>
                                            <select name="" id="" class="form-control" >
                                                <option value="">1</option>
                                                <option value="">2</option>
                                                <option value="">3</option>
                                            </select>
                                        </div>


                                    <div class="col-4">
                                        <label for="">Print Template</label>
                                       <select name="" id="" class="form-control">
                                        <option value="">Old Invoice</option>
                                        <option value="">New Invoice</option>
                                       </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label for="">Status validation on bulk status update</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Yes</option>
                                            <option value="">No</option>
                                          </select>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Delayed Order Time(Hours)</label>
                                        <input type="text" name="name" value="1000" placeholder="" class="form-control">
                                    </div>
                                    <div class="col-4">
                                        <label for="">Canceling Statuses After Failure Attempts</label>
                                        <input type="text" name="name" placeholder="" class="form-control">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label for="">Attempts before cancel</label>
                                       <select name="" id="" class="form-control">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                        <option value="">5</option>
                                       </select>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Tariff Type</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">ndm</option>
                                            <option value="">ndm</option>
                                            <option value="">nd</option>
                                            <option value="">ndm</option>
                                        </select>
                                    </div>
                                    <div class="col-4">
                                        <label for="">Customer Language Priority</label>
                                        <select name="" class="js-example-basic-multiple form-control" id="">
                                            <option value="">one</option>
                                            <option value="">one</option>
                                            <option value="">one</option>
                                            <option value="">one</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label for="">Canceling Statuses</label>
                                        <select name="" class="js-example-basic-multiple form-control" id="" multiple="multiple">
                                            <option value="">one</option>
                                            <option value="">one</option>
                                            <option value="">one</option>
                                            <option value="">one</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label for="">Number Formate</label>
                                        <input type="number" name="name" placeholder="" class="form-control">
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <div class="col-4">
                                        <label for="">Logo</label>

                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <div class="col-4">

                                      <input type="file" name="" id="">
                                    </div>

                                </div>

                                <div class="row mb-3">
                                    <div class="col-4">
                                      <button class="btn btn-primary" >Save</button>
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
