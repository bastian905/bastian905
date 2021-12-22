<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\belajarcontroller;
use App\Http\Controllers\Matthewcoba;
use App\Http\Controllers\Rizalcoba;
use App\Http\Controllers\PostController;
use App\Http\Controllers\gurucontroller;
use App\Http\Controllers\siswacontroller;
use App\Http\Controllers\kelascontroller;
use App\Http\Controllers\ruangancontroller;

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

Route::get('/pilpres',[belajarcontroller::class,'index'] );
Route::get('/jual',[Matthewcoba::class,'index'] );
Route::get('/rizal',[Rizalcoba::class,'index'] );
Route::get('/matthew',[Rizalcoba::class,'endex'] );
Route::resource('/posts', PostController::class);
Route::resource('/guru', gurucontroller::class);
Route::resource('/siswa', siswacontroller::class);
Route::resource('/kelas', kelascontroller::class);
Route::resource('/ruangan', ruangancontroller::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
