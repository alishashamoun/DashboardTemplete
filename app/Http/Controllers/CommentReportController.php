<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentReportController extends Controller
{
    public function index(){
        return view('comment_reports');
    }
}
