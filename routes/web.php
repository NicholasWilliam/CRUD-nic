<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\UnivController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\metronicController;
use App\Http\Controllers\Auth\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [metronicController::class, 'index']);

Route::resource('/univ',  UnivController::class);

Route::resource('negara',  NegaraController::class);

Route::resource('/kota',  KotaController::class);

Route::resource('/siswa',  SiswaController::class);

Route::get('/get-kota-by-negara/{negara_id}', [UnivController::class, 'getKotaByNegara']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [metronicController::class, 'index'])->name('login')->middleware('guest');
// Route::get('/login', [metronicController::class, '']);

Route::post('logout', [LoginController::class, 'logout'])->name('logout');
