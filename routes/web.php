<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


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

Route::get('login', function () {
    return view('login');
});
Route::get('logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::view('register','register');
Route::post("login",[UserController::class,'login']);
Route::post("register",[UserController::class,'Register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("/",[ProductController::class,'AddToCart']);
Route::get("cartlist",[ProductController::class,'CartList'])->middleware('userReach');
Route::get("removecart/{id}",[ProductController::class,'RemoveCart'])->middleware('userReach');
Route::get("ordernow/{id}",[ProductController::class,'OrderNow'])->middleware('userReach');
Route::post("ordernow",[ProductController::class,'OrderPlace']);
Route::get("myorders",[ProductController::class,'MyOrders'])->middleware('userReach');
Route::get("mobiles",[ProductController::class,'Mobiles']);
Route::get("airpods",[ProductController::class,'Airpods']);
Route::get("casessCovers",[ProductController::class,'CasessCovers']);
Route::get("headphones",[ProductController::class,'Headphones']);
Route::get("homeSecurity",[ProductController::class,'HomeSecurity']);
Route::get("KeybordMouse",[ProductController::class,'KeyboardMouse']);
Route::get("laptops",[ProductController::class,'Laptops']);
Route::get("powerBanks",[ProductController::class,'PowerBanks']);
Route::get("speakers",[ProductController::class,'Speakers']);
Route::get("tablets",[ProductController::class,'Tablets']);
route::get("addProduct", [ProductController::class,'AddProducts_show'])->middleware('RouteAuth');
route::post("addProduct", [ProductController::class,'AddProducts']);
route::get("order",[ProductController::class,'Order'])->middleware('RouteAuth');
Route::get("delete/{id}",[ProductController::class,'Delete'])->middleware('RouteAuth');
