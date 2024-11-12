<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChargeReportController extends Controller
{
    public function index(){
        return view('charges_reports');
    }
}
