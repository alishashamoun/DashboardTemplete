<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderProcessingController extends Controller
{
    public function index(){
        return view('order_processing')
;    }
}
