<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\AuthController;
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

Route::resource('/index', BarangController::class);
Route::get('/home',[BarangController::class, 'home'])->name('home');
Route::get('/index/hapus/{id}',[BarangController::class, 'delete']);
Route::post('index/edit/{kd_brg}',[BarangController::class] , 'edit');
Route::post('/index/update/{kd_brg}', [BarangController::class, 'update']);
Route::get('/',[BarangController::class, 'landing_page'])->name('landing_page');

Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginStore'])->name('loginStore');

Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/registerStore',[AuthController::class, 'registerStore']);
route::get('/logout', [AuthController::class, 'logout'])->name('logout');
