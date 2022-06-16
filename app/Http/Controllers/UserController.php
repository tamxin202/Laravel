<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function cong($a,$b){
        return $a+$b;
        //echo "Xin Chao Cac Ban PNV";
    }
    public function tinhtong(Request $request){
        $sum= $request->soA + $request->soB;
        return view('sum',compact('sum'));
    }
    //
}
