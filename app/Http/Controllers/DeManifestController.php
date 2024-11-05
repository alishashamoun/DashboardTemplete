<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeManifestController extends Controller
{
    public function index(){
        return view('demanifest');
    }
}
