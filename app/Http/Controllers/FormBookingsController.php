<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormBookingsController extends Controller
{
    public function index(){
        return view('form_bookings');

    }
}
