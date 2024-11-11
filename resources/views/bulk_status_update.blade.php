@extends('layout.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-12 mb-4 order-0">
                    <h4>Bulk Status Update</h4>

                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-12">
                                <div class="card-body">
                                    <div class="panel panel-default ">
                                        <div class="row">
                                            <div class="col-6">


                                                <div class="row mb-3">
                                                    <div class="col-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="from"
                                                                placeholder="Pickup Run Sheet No">
                                                        </div>
                                                    </div>

                                                    <div class="col-2">
                                                        <div class="form-group">
                                                            <input type="submit" name="submit" value="Pick Cn"
                                                                class="btn btn-info">
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row  mb-3">
                                                    <div class="col-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="from"
                                                                placeholder="Customer Run Sheet No">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 ">
                                                        <div class="form-group">
                                                            <input type="submit" name="submit" value="Pick Cn"
                                                                class="btn btn-info">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row  mb-3">
                                                    <div class="col-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="from"
                                                                placeholder="Delivery Run Sheet No">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 ">
                                                        <div class="form-group">
                                                            <input type="submit" name="submit" value="Pick Cn"
                                                                class="btn btn-info">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row  mb-3">
                                                    <div class="col-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="from"
                                                                placeholder="returnSheet No">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 ">
                                                        <div class="form-group">
                                                            <input type="submit" name="submit" value="Pick Cn"
                                                                class="btn btn-info">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row  mb-3">
                                                    <div class="col-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="from"
                                                                placeholder="Manifest No">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 ">
                                                        <div class="form-group">
                                                            <input type="submit" name="submit" value="Pick Cn"
                                                                class="btn btn-info">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row  mb-3">
                                                    <div class="col-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="from"
                                                                placeholder="De-Manifest No">
                                                        </div>
                                                    </div>

                                                    <div class="col-2 ">
                                                        <div class="form-group">
                                                            <input type="submit" name="submit" value="Pick Cn"
                                                                class="btn btn-info">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row d-flex justify-content-end">
                                                    <div class="col-4">
                                                        <label for="name">
                                                            Origin (*)</label>
                                                        <select name="" id=""
                                                            class="js-example-templating form-control">
                                                            <option value="">new booked</option>
                                                            <option value="">new booked</option>
                                                            <option value="">parcel</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-4">
                                                        <label for="name">
                                                            Destination (*)</label>
                                                        <select name="" id=""
                                                            class="js-example-templating form-control">
                                                            <option value="">new booked</option>
                                                            <option value="">new booked</option>
                                                            <option value="">parcel</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-end mt-4">
                                                    <div class="col-8">
                                                        <label for="name">
                                                        </label>
                                                        <select name="" id=""
                                                            class="js-example-templating form-control">
                                                            <option value="">new booked</option>
                                                            <option value="">new booked</option>
                                                            <option value="">parcel</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-end mt-4">
                                                    <div class="col-8">
                                                        <label for="name">
                                                            Select Statuses (*)</label>
                                                        <select name="" id=""
                                                            class="js-example-templating form-control">
                                                            <option value=""></option>
                                                            <option value=""></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row d-flex justify-content-end mt-4">
                                                    <div class="col-2">
                                                        <button class="btn btn-dark">Submit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-end mt-5">
                        <div class="col-4">
                            <div class="form-group">

                                <input type="text" class="form-control" name="from" placeholder="Enter CN No">
                            </div>
                        </div>

                        <div class="col-2 ">
                            <div class="form-group">
                                <input type="submit" name="submit" value="Submit" class="btn btn-info">
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="form-group">

                                <input type="text" class="form-control" name="from" placeholder="Enter Weight">
                            </div>
                        </div>

                        <div class="col-2">
                            <div class="form-group">
                                <input type="submit" name="submit" value="Update" class="btn btn-info">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-body">
                        <table class="table table-stripe">
                            <tr>
                                <th>CN#</th>
                                <th>Service Type</th>
                                <th>Shipper</th>
                                <th>Origin</th>
                                <th>Consignee</th>
                                <th>Destination</th>
                                <th>Status</th>
                                <th>PCS</th>
                                <th>Weight</th>
                                <th>Action</th>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-9">
                                <label>Remarks</label>
                                <textarea name="" id="" cols="100" rows="8" class="form-control"></textarea>
                            </div>
                            <div class="col-sm-3">
                                <div class="row">
                                    <div class="col-6">
                                        <label for="">PCS</label>
                                        <input type="text" value="00" class="form-control">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Weight</label>
                                        <input type="text" value="00" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-12">
                                        <label for="">Order Update Status (*)</label>
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
                            <div class="row mt-2">
                                <div class="col-3">
                                    <label for="">Status Date</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-3">
                                    <button class="btn btn-info">Update Status</button>
                                </div>
                                <div class="col-3">
                                    <button class="btn btn-dark">collect Cash</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
