<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        $title = "Đây là Tiêu đề";
        return view('test')->with('title', $title);
    }
    //
}
