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
                                        <h4>Order Processing</h4>
                                        <div class="row">
                                            <div class="col-6">
                                                <textarea name="" id="" cols="90" rows="8" placeholder="Please enter order ids" class="form-control"></textarea>
                                                <div class="row mt-5">
                                                    <div class="col-3">
                                                        <label for="">Order Status</label>
                                                       <select name="" id="" class="form-control js-example-basic-multiple">
                                                        <option value="">Select Status</option>
                                                        <option value="">1</option>
                                                       </select>
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="">Select API</label>
                                                        <select name="" id="" class="form-control js-example-basic-multiple">
                                                            <option value="">Select API</option>
                                                            <option value="">1</option>
                                                           </select>
                                                    </div>
                                                    <div class="col-3 mt-3">
                                                      <button class="btn btn-info">Update</button>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="col-6" style="border: 1px solid #e3e3e3; min-height: 355px; ">
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
