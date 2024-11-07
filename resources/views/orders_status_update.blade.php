@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <h4>Order Status Update</h4>
                    <div class="row mb-5">
                        <div class="col-sm-2">
                            <div class="form-group">

                                <input type="text"
                                    class="form-control datetimepicker4" name="from" placeholder="Enter CN No">
                            </div>
                        </div>

                        <div class="col-sm-2 ">
                            <div class="form-group">
                                <input type="submit" name="submit" value="Submit"
                                    class="btn btn-info">
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-12">
                                <div class="card-body">
                                    <div class="panel panel-default ">
                                        <h6>Order Status Update</h6>
                                        <table class="table table-strippe">
                                            <tr>
                                                <th>CN#</th>
                                                <th>Consigner</th>
                                                <th>Origin</th>
                                                <th>Consignee</th>
                                                <th>Destination</th>
                                                <th>Status</th>
                                                <th>PCS</th>
                                                <th>Weight</th>
                                                <th>Payment Status</th>
                                                <th>Action</th>
                                            </tr>
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
@endsection
