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
                                                                    <label>Tracking No</label>
                                                                    <input type="text" value="2024-11-06"
                                                                        class="form-control datetimepicker4" name="to">
                                                                </div>
                                                            </div>
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



                                                            <div class="col-sm-2 left_right_none">
                                                                <div class="form-group">
                                                                    <label>Sheet Type</label>

                                                                    <select name="" id="" class="js-example-templating form-control">
                                                                        <option value="">new booked</option>
                                                                        <option value="">new booked</option>
                                                                        <option value="">parcel</option>
                                                                        <option value="">parcel</option>
                                                                        <option value="">parcel</option>
                                                                        <option value="">parcel</option>
                                                                        <option value="">parcel</option>
                                                                        <option value="">parcel</option>

                                                                    </select>

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-3 mt-3">
                                                                <button class="btn btn-dark" >Submit</button>
                                                            </div>
                                                        </div>


                                                    </form>
                                                    <div class="col-sm-12 table-responsive gap-none">

                                                        <table
                                                            class="table table-striped">
                                                            <thead>
                                                                <tr role="row" class="">
                                                                    <th>Sr.No.</th>
                                                                    <th>Assignment No#</th>
                                                                    <th>Branch</th>
                                                                    <th>Created By</th>
                                                                    <th>Type</th>
                                                                    <th>Rider</th>
                                                                    <th>Date</th>

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
                                                                    <td class="sorting_1">CN</td>
                                                               


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
