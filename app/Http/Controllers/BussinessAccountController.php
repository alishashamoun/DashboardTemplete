<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BussinessAccountController extends Controller
{
   public function index(){
    return view('business_accounts');
   }
}
