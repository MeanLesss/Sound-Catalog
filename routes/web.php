<?php

use App\Http\Controllers\AddSoundController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SoundController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\AdminController;
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
Route::get('/sound', [SoundController::class,'index'])->name('sound');
Route::get('/sound/add', [AddSoundController::class, 'index']);
Route::get('/sound/edit/{id}', [AddSoundController::class, 'editPage']);
Route::get('/sound/delete/{id}', [AddSoundController::class, 'submitDelete']);
Route::post('/sound/submitEdit', [AddSoundController::class, 'submitEdit']);
Route::get('/uploaded',[SoundController::class,'uploaded'])->name('sound.uploaded');
Route::post('/sound/search',[SoundController::class,'SearchSound'])->name('sound.search');
// Route::resource('/sound/add',AddSoundController::class);
Route::post('/sound/add',[AddSoundController::class,'store'])->name('sound.add');
Route::get('/signup', [SignUpController::class,'index']);
Route::post('/signup', [SignUpController::class,'store'])->name('signup.store');
// Get login is to redirect to login page
Route::get('/login', [LoginController::class, 'index'])->name('login');
//Post login is to handle when submitted form login
Route::post('/login', [LoginController::class,'auth'])->name('login.auth');
//Admin navigation api
// sound
Route::get('/admin',[AdminController::class,'index'])->name('admin');
Route::get('/admin/{soundID}',[AdminController::class,'SoundApproval']);
Route::post('/admin/sound/search',[AdminController::class,'SearchSound']);
// Category
Route::get('/category',[AdminController::class,'CategoryIndex']);
Route::get('/category/edit/{id}/{changes}',[AdminController::class,'EditCategory']);
Route::get('/category/delete/{id}',[AdminController::class,'DeleteCategory']);
Route::post('/category/save',[AdminController::class,'SaveCategory']);
//user
Route::get('/users',[AdminController::class,'UserIndex'])->name('users');
Route::get('/admin/ban/{id}',[AdminController::class,'BanUser']) ;
Route::get('/user/delete/{id}',[AdminController::class,'DeleteUser']) ;

//logout route
Route::get('/logout', [LogoutController::class,'perform'])->name('logout.perform');
