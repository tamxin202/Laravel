<?php

namespace App\Http\Controllers;
use App\Models\Slide;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex(){
        $slide = Slide::all();
        $new_product= Product::where('new',1)->get();
        return view('page.trangchu',compact('slide','new_product'));
    }
    //
}


    