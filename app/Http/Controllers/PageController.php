<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HotelRequest;
class PageController extends Controller
{
    public function index(){
        return view('adminpage');
    }
    // public function about(){
    //     return view('about');
    // }
    public function addRooms (HotelRequest $Request){
        $image = $Request->file('roomImage');
        $path = $image->move('images', $image->getClientOriginalName());
 
 
        $newRoom = [
            'name' => $Request->roomName,
            'description' => $Request->roomDescription,
            'price' => $Request->roomPrice,
            'image' => $image->getClientOriginalName(),
        ];
 
        if (isset($_SESSION['rooms'])) {
            $_SESSION['rooms'][] = $newRoom;
        } else {
            if (session_id() === '')
                session_start();
            $_SESSION['rooms'][] = $newRoom;
        }
        echo '<script>alert("Thêm phòng thành công")</script>';
        return view('adminpage');
    }
    public function displayInfor(){
        if(isset($_SESSION['rooms']))
        $arr = $_SESSION['rooms'];
       
       // return view('adminpage')->with( arr,$arr);
    }
 
    //
}
