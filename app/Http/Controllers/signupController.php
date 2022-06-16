<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Input,File;
use Request;
use App\Http\Requests\signupRequest;
class signupController extends Controller
{
    public function index(){
        return view ('signup');
    }
    public function displayInfor (signupRequest $Request){
        $user = [
            'name' => $name = $Request->Input("name"),
            'age' => $age = $Request->Input("age"),
            'date' => $date = $Request->Input("date"),
            'phone' => $phone = $Request->Input("phone"),
            'web' => $web = $Request->Input("web"),
            'address' => $address = $Request->Input("address")
        ];
        return view('signup') ->with ('user',$user);
    } //
}
