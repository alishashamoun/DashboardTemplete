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
                                    <div class="panel panel-default ">
                                        <h4>Manifest Report</h4>
                                       

                                        <div class="panel-body" id="same_form_layout">

                                            <div id="basic-datatable_wrapper"
                                                class="dataTables_wrapper form-horizontal dt-bootstrap no-footer">

                                                <div class="row">
                                                    <form method="GET" action="" class="pickuprun_sheet">
                                                        <div class="row">
                                                            <div class="col-sm-2 left_right_none">
                                                                <div class="form-group">
                                                                    <label>From</label>
                                                                    <input type="text" value="2024-10-07"
                                                                        class="form-control datetimepicker4" name="from">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2 left_right_none">
                                                                <div class="form-group">
                                                                    <label>To</label>
                                                                    <input type="text" value="2024-11-06"
                                                                        class="form-control datetimepicker4" name="to">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2 ">
                                                                <div class="form-group">
                                                                    <input type="submit" name="submit" value="Submit"
                                                                        class="btn btn-info" style="margin-top: 25px;">
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </form>
                                                    <div class="col-sm-12 table-responsive gap-none">

                                                        <table
                                                            class="display table table-striped table-bordered dataTable_with_sorting no-footer ">
                                                            <thead>
                                                                <tr role="row" class="">
                                                                    <th>Sr.No.</th>
                                                                    <th>Manifest No </th>
                                                                    <th>Manifest Type</th>
                                                                    <th>Type </th>
                                                                    <th>Mode </th>
                                                                    <th>Bilty No </th>
                                                                    <th>Service By</th>
                                                                    <th>Transport Company </th>
                                                                    <th>Truck No </th>
                                                                    <th>Sending Branch</th>
                                                                    <th>Seal No</th>
                                                                    <th>Origin </th>
                                                                    <th>Receiving Branch</th>
                                                                    <th>Destination</th>
                                                                    <th>Departure Date</th>
                                                                    <th>Receiving Name</th>
                                                                    <th>Arrival Date</th>
                                                                    <th>Remarks</th>
                                                                    <th>Quantity</th>
                                                                    <th>Weight</th>
                                                                    <th>Created At</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="gradeA odd" role="row">
                                                                    <td>1</td>
                                                                    <td class="sorting_1">1029</td>
                                                                    <td class="sorting_1">Transit Manifest</td>
                                                                    <td class="sorting_1">Local</td>
                                                                    <td class="sorting_1">By Road</td>
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1">CN</td>
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1">admin branch</td>
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1">Karachi</td>
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1">Karachi</td>
                                                                    <td class="sorting_1">2024-11-06 01:08:49</td>
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1">2024-11-06 01:08:49</td>
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1">65</td>
                                                                    <td class="sorting_1">81.35000000000001</td>
                                                                    <td class="sorting_1">2024-11-06 01:15:41</td>
                                                                    <td class="sorting_1">2024-11-06 01:15:41</td>

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
