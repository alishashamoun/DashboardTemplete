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
                                        <h4>Comment Report</h4>

                                        <div class="row">
                                            <div class="col-2">
                                                <label for="">Generate Reports</label>
                                                <select name="" id="" class="form-control">
                                                    <option value=""></option>
                                                </select>
                                            </div>
                                            <div class="col-2 mt-4">
                                                <input type="text" value="11-2-2024" class="form-control">
                                            </div>
                                            <div class="col-2 mt-4">

                                                <input type="text" value="11-2-2024" class="form-control">
                                            </div>
                                            <div class="col-2 mt-4">
                                                <button class="btn btn-warning">Generate Reports</button>
                                            </div>

                                            <div class="col-4 mt-4 readhref">
                                                <ul>
                                                    <li>
                                                        <a href="#" class="all_btn">All (19)</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="read_btn">Read (0)</a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="unread_btn">Unread (19)</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>




                                        <div class="panel-body mt-5" id="same_form_layout">
                                            <div id="basic-datatable_wrapper"
                                                class="dataTables_wrapper form-horizontal dt-bootstrap no-footer">
                                                <div class="row">
                                                    <div class="col-sm-12 table-responsive gap-none">
                                                        <table
                                                            class="display table table-striped table-bordered dataTable_with_sorting no-footer table-sm"
                                                            id="report">
                                                            <thead>
                                                                <tr role="row" class="">
                                                                    <th></th>
                                                                    <th>Tracking No </th>
                                                                    <th>Order date </th>
                                                                    <th>Customer Name </th>
                                                                    <th>Subject </th>
                                                                    <th>Order Comment</th>
                                                                    <th>Comment By</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="gradeA odd" role="row">
                                                                    <td><input type="checkbox" id="" name=""
                                                                            value=""></td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>
                                                                    <td>1</td>




                                                                    <td>
                                                                        <span class="badge bg-secondary">unread</span>
                                                                    </td>
                                                                    <td>
                                                                        <a href="#" style="color:blue;"><i
                                                                                class="fa-solid fa-eye"></i></a>
                                                                    </td>




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
