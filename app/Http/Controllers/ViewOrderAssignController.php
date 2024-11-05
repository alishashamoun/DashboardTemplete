<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewOrderAssignController extends Controller
{
    public function index(){
        return view('view_order_assign');
    }
}
