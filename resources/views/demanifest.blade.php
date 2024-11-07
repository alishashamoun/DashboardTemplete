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
                                        <h4>De-Manifest Report</h4>
                                        <div class="panel-body" id="same_form_layout">
                                            <div id="basic-datatable_wrapper"
                                                class="dataTables_wrapper form-horizontal dt-bootstrap no-footer">
                                                <div class="row">
                                                    <div class="col-sm-12 table-responsive gap-none">
                                                        <table
                                                            class="display table table-striped table-bordered dataTable_with_sorting no-footer" >
                                                            <thead>
                                                                <tr role="row" class="">
                                                                    <th>Sr.No.</th>
                                                                    <th>Manifest No </th>
                                                                    <th>Branch</th>
                                                                    <th>Transaction ID </th>
                                                                    <th>Arrival Date </th>
                                                                    <th>Truck No </th>
                                                                    <th>Total Orders</th>
                                                                    <th>Total Quantity</th>
                                                                    <th>Total Weight </th>

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
                                                                    <td class="sorting_1">admin branch</td>
                                                                    <td class="sorting_1"><button class="btn btn-primary">Print</button></td>
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
