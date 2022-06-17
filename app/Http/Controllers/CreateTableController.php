<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;

class CreateTableController extends Controller
{
    //
    public function productTab () {

        Schema::create('Productss', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('description');
            $table->integer('quantity');
            $table->datetime('date');
        });
       echo "Tạo Bảng thành công";
    }
    public function productUser () {

        Schema::create('Users', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('sodienthoai');
        });
       echo "Tạo Bảng thành công";
    }
}
