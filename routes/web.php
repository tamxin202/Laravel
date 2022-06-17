<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MyController; 
use App\Http\Controllers\signupController;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CreateTableController;
use App\Http\Requests\Signup;
use App\Console\Commands\mys;
use Illuminate\Support\Facades\Schema;

// Route::get(
//     '/',
//     'App\Http\Controllers\UserController@getIndex'
// );
// Route::get('database', function () {

//     Schema::create('Productss', function ($table) {
//         $table->increments('id');
//         $table->string('name');
//         $table->string('image');
//         $table->string('description');
//         $table->integer('quantity');
//         $table->datetime('date');
//     });
//    echo "Tạo Bảng thành công";
// });
Route::get('dataProducts',[CreateTableController::class,'productUser']);
Route::get('typeofProduct',[PageController::class,'getLoaiSp']);

Route::get('ad',[PageController::class,'getIndex']);
Route::get('admin', function () {
    return view('adminpage');
});

Route::get('admin',[AdminController::class,'index']);
Route::post('admin',[AdminController::class,'addRoom']);


Route::group(['prefix' => 'admin'], function () {
    Route::get('user', function () {
        echo 'Users Management';
    });
    Route::get('product', function () {
        echo 'Products Management';
    });
});

// Route::get(
//     '/sum',function () {
//         return view('sum');
//     }
// );

// Route::post('sum', 'App\Http\Controllers\UserController@sum');

// Route::get(
//     '/login ',function () {
//         return view('login');
//     }
// );

// Route::get('/signup',[Authentication::class,'signup']);
// Route::post('/signup',[Authentication::class,'displayInfor']);
	


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
// Route::group(['prefix'=>'MyGroup'],function(){
//     Route :: get('User1',function(){
//         echo "User1";
//     });
//     Route :: get('User2',function(){
//         echo "User2";
//     });
//     Route :: get('User3',function(){
//         echo "User3";
//     });
// });
// Route::get('con',[UserController::class,'xinchao']);
Route::get('/test',[MyController::class,'index']);
Route::get('tinhtong', function(){
    return view('sum');
});
Route::post('tinhtong',[UserController::class,'tinhtong']);
// Route::get('tinhtong',function()
// {
//     return view('sum');
// });
// Route::post('tinhtong',[SumController::class,'tinhtong']);

Route::get('signup',[signupController::class, 'index']);
Route::post('signup',[signupController::class, 'displayInfor']);