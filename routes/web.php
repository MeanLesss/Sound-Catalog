<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoundController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\SignUpController;
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
Route::get('/signup', [SignUpController::class,'index']);
// Get login is to redirect to login page
Route::get('/login', [LoginController::class, 'index'])->name('login');
//Post login is to handle when submitted form login
Route::post('/login', [LoginController::class,'auth'])->name('login.auth');
//middleware is to handle when the user is login and redirect to topic view
Route::middleware('auth')->resource('/topic', TopicController::class);
//logout route
Route::get('/logout', [LogoutController::class,'perform'])->name('logout.perform');
