@extends('layout.app')
@section('content')
    <div class="container-fluid flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 mb-4 order-0">
                <h6>Add Business<span style="color:#ccc; font-size:13px;">Let's get a quick overview...</span></h6>
                <div class="row d-flex align-items-end">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="mb-4">Show</h5>
                                <div class="row mb-3">
                                    <div class="col-2">
                                        {{ $business->business_name }}


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
