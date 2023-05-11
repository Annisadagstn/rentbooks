<?php

use Illuminate\Support\Facades\Route;
use App\Http\Models\Pesan;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;




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
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/main.layouts', function () {
    return view('layouts.main');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('/user', function () {
    return view('dashboard.user');
});

Route::get('user', [AdminController::class, 'indexUser']);
Route::get('/login',[AuthController::class, 'authLogin']);

Route::get('/book', function () {
    return view('dashboard.book');
});

Route::get('/category', function () {
    return view('dashboard.category');
});

Route::get('/rent-log', function () {
    return view('dashboard.rent-log');
});

//message
Route::post('/Pesan', [PesanController::class, 'storePesan'])->name('store');
//route register
Route::get('/index-register',[AuthController::class,'indexRegister'])->name('register');
Route::post('/registerStore',[AuthController::class,'storeRegister'])->name('registerStore');

//route login
Route::get('/login',[AuthController::class,'indexLogin'])->name('login');
Route::post('/loginStore',[AuthController::class,'auth'])->name('authLogin');

//route admin
Route::get('/user', [AdminController::class, 'indexUsers'])->name('indexUser')->middleware('admin');

Route::get('/editUser/{id}', [AdminController::class, 'indexEditUser'])->name('indexEditUser');
Route::post('/updateE/{id}', [AdminController::class, 'updateIndex'])->name('updateIndex');
Route::post('/delete/{id}', [AdminController::class, 'delete'])->name('delete');

//route user
Route::get('/dashboard-user', [UserController::class, 'index']);

//route middleware
Route::get('posts', 'PostController@index')->middleware('admin');

// routes/web.php
Route::group(['middleware' => ['admin']], function () {
Route::get('home', 'HomeController@index');
});
Route::middleware(['auth', 'admin'])->group(function () {
Route::get('home', 'HomeController@index');
});

Route::get('home', 'HomeController@index')->middleware('role:editor');