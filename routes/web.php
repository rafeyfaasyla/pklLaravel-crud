<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\PostController;
use App\HTTP\Controllers\SiswaController;
use App\HTTP\Controllers\NilaiController;
use App\HTTP\Controllers\jurusanController;



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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('post', PostController::class);
Route::resource('siswa', SiswaController::class);
Route::resource('nilai', NilaiController::class);
Route::resource('jurusan', jurusanController::class);

