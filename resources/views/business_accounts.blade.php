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
                    <h6>Business Accounts <span style="color:#ccc; font-size:13px;" >Let's get a quick overview...</span></h6>
                    <div class="buss_btn">
                        <ul>
                            <li><a href="#" class="btn-style active">Approved(452)</a></li>
                            <li><a href="#" class="btn-style pending">Pending(114)</a></li>
                        </ul>
                    </div>

                    <div class="card mt-4">
                        <div class="d-flex align-items-end row">
                            <div class="col-12">
                                <div class="card-body">
                                    <div class="panel panel-default ">
                                        <div class="row account">
                                            <div class="col-6"><h4>Business Accounts</h4></div>
                                            <div class="col-6 text-end">
                                                <a href="#" class="btn-style add_new">Add New</a>
                                            </div>
                                        </div>

                                        <div class="panel-body" id="same_form_layout">

                                            <div id="basic-datatable_wrapper"
                                                class="dataTables_wrapper form-horizontal dt-bootstrap no-footer">

                                                <div class="row">
                                                    <form method="GET" action="" class="pickuprun_sheet">



                                                    </form>
                                                    <div class="col-sm-12 table-responsive gap-none">

                                                        <table
                                                            class="display table table-striped table-bordered dataTable_with_sorting no-footer ">
                                                            <thead>
                                                                <tr role="row" class="">
                                                                    <th>Sr.No.</th>
                                                                    <th>Logo </th>
                                                                    <th>Register Date</th>
                                                                    <th>Account ID</th>
                                                                    <th>Account Name</th>
                                                                    <th>Bussiness Name </th>
                                                                    <th>Bussiness Manager </th>
                                                                    <th>Email</th>
                                                                    <th>Phone </th>
                                                                    <th>CNIC Copy </th>
                                                                    <th>Status</th>
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
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1">admin branch</td>
                                                                    <td class="sorting_1"></td>
                                                                    <td class="sorting_1"></td>



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
