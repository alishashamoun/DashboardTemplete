@extends('layout.app')
<style>
    .table th,
    .table td {
        font-size: 11px !important;
    }

</style>
@section('content')
    {{-- ///// --}}
    <div class="content-wrapper">
        <div class="container-fluid flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-12">
                                <div class="card-body">
                                    <div class="panel panel-default">
                                        <h4>Order Report</h4>

                                        <div class="row">

                                            <div class="col-2">
                                                <label for="">Tracking No</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-2">
                                                <label for="">Select Pickup City</label>
                                                <select name="" id="" class="form-control">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                            <div class="col-2">
                                                <label for="">Select Delivery City</label>
                                                <select name="" id="" class="form-control">
                                                    <option value=""></option>
                                                </select>
                                            </div>

                                            <div class="col-2">
                                                <label for="">Customer</label>
                                                <select name="" id="" class="form-control">
                                                    <option value=""></option>
                                                </select>
                                            </div>

                                            <div class="col-2">
                                                <label for="">Customer Type</label>
                                                <select name="" id="" class="form-control">
                                                    <option value=""></option>
                                                </select>
                                            </div>

                                            <div class="col-2">
                                                <label for="">Payment Status</label>
                                                <select name="" id="" class="form-control">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                        </div>

                                            <div class="row mt-4">
                                                <div class="col-2">
                                                    <label for="">Status</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value=""></option>
                                                    </select>
                                                </div>

                                                <div class="col-2">
                                                    <label for="">Select Rider</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value=""></option>
                                                    </select>
                                                </div>

                                                <div class="col-2">
                                                    <label for="">Date Type</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value=""></option>
                                                    </select>
                                                </div>

                                                <div class="col-1">
                                                    <label for="">From</label>
                                               <input type="text" value="11-2-2024" class="form-control">
                                                </div>
                                                <div class="col-1">
                                                    <label for="">To</label>
                                                    <input type="text" value="11-2-2024" class="form-control">
                                                </div>
                                                <div class="col-1 mt-4">
                                                    <button class="btn btn-warning">Submit</button>
                                                </div>
                                                <div class="col-1 mt-4">
                                                    <button class="btn btn-warning">Export</button>
                                                </div>
                                            </div>

                                            <div class="row mt-5">
                                                <div class="col-2">
                                                    <button  class="btn btn-warning">Print invoice</button>
                                                </div>
                                                <div class="col-2">
                                                    <button  class="btn btn-warning">label Print (Horizontal)</button>
                                                </div>
                                                <div class="col-2">
                                                    <button  class="btn btn-warning">label Print (Vertical)</button>
                                                </div>
                                            </div>



                                        <div class="panel-body mt-5" id="same_form_layout">
                                            <div id="basic-datatable_wrapper"
                                                class="dataTables_wrapper form-horizontal dt-bootstrap no-footer">
                                                <div class="row">
                                                    <div class="col-sm-12 table-responsive gap-none">
                                                        <table
                                                            class="display table table-striped table-bordered dataTable_with_sorting no-footer table-sm" id="report" >
                                                            <thead>
                                                                <tr role="row" class="">
                                                                    <th></th>
                                                                    <th>Tracking No </th>
                                                                    <th>Pickup company </th>
                                                                    <th>Reference No </th>
                                                                    <th>Order ID </th>
                                                                    <th>No of pieces</th>
                                                                    <th>parcel Weight </th>
                                                                    <th>insurance Type</th>
                                                                    <th>Insured item declared value</th>
                                                                    <th>COD Amount </th>
                                                                    <th>Delivery Fees</th>
                                                                    <th>Special Charges</th>
                                                                    <th>Extra Charges</th>
                                                                    <th>Insurance Premiuum</th>
                                                                    <th>Grand Total Amount</th>
                                                                    <th>Fuel Surcharges</th>
                                                                    <th>Sales Tax</th>
                                                                    <th>Net Amount</th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="gradeA odd" role="row">
                                                                    <td><input type="checkbox" id="" name="" value=""></td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>





                                                                </tr>
                                                            </tbody>
                                                        </table>
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
        </div>
    </div>
@endsection
