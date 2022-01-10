<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\azureController;
//use App\Http\Controllers\awsController;

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

Route::get('/index',[indexController::class,"index"]);
Route::post('/azure',[azureController::class,'azure']);
Route::post('/aws','App\Http\Controllers\awsController@aws');
Route::post('/gcp','App\Http\Controllers\gcpController@gcp');














