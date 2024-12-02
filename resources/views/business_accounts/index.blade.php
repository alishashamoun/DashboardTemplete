@extends('layout.app')
<style>
    .table th,
    .table td {
        font-size: 11px !important;
    }
</style>
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <h6>Business Accounts <span style="color:#ccc; font-size:13px;">Let's get a quick overview...</span></h6>
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
                                        <div class="col-6">
                                            <h4>Business Accounts</h4>
                                        </div>
                                        <div class="col-6 text-end mb-4">
                                            <a href="{{ route('bussiness-account.create') }}" class="btn-style add_new">Add
                                                New</a>
                                        </div>
                                    </div>
                                    <div class="panel-body" id="same_form_layout">
                                        <div id="basic-datatable_wrapper"
                                            class="dataTables_wrapper form-horizontal dt-bootstrap no-footer">
                                            <div class="row">
                                                <div class="col-sm-12 table-responsive gap-none">
                                                    <form method="GET" action="" class="pickuprun_sheet">
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
                                                                    <th></th>

                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                @php
                                                                    $id = 1;
                                                                @endphp
                                                                @foreach ($bussiness as $business)
                                                                    <tr class="gradeA odd" role="row">
                                                                        <td>{{ $id++ }}</td>
                                                                        <td class="sorting_1">
                                                                            <img src="{{ asset('uploads/logo_images/' . $business->logo_image) }}"
                                                                                alt="Logo Image" width="100">
                                                                        </td>
                                                                        <td class="sorting_1"></td>
                                                                        <td class="sorting_1"></td>
                                                                        <td class="sorting_1"></td>
                                                                        <td class="sorting_1">{{ $business->business_name }}
                                                                        </td>
                                                                        <td class="sorting_1"></td>
                                                                        <td class="sorting_1">{{ $business->email }}</td>
                                                                        <td class="sorting_1">{{ $business->mobile }}</td>
                                                                        <td class="sorting_1">
                                                                            <img src="{{ asset('uploads/cnic_copies/' . $business->cnic_copy) }}"
                                                                                alt="Cnic Image" width="100">
                                                                        </td>
                                                                        <td class="sorting_1"></td>
                                                                        <td class="sorting_1">
                                                                            <a href="{{ route('bussiness-account.edit', $business->id) }}"
                                                                                class="btn btn-warning">Edit</a>
                                                                        </td>
                                                                        <td class="sorting_1">
                                                                            <form method="POST"
                                                                                action="{{ route('bussiness-account.destroy', $business->id) }}">

                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button type="submit"
                                                                                    class="btn btn-danger"
                                                                                    onclick="return confirm('Are you sure u want to Delete this?')">Delete</button>
                                                                            </form>

                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </form>
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
