<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
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

Route::get('/', function () {
    return view('welcome');
});



Route::post('/parse',[
    "uses" => "App\Http\Controllers\InfoController@parse",
    "as" => "parse.route"
]);

Route::post('/product',[
    "usess" => "App\Http\Controllers\ProductController@product",
    "ass" => "product.route"
]);
