<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoundController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/sidebar',function(){
    return view('Sidebar.sidebar');
});
Route::get('/home', [HomeController::class,'index']);
Route::get('/sound', [SoundController::class,'index']);
