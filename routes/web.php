<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\UnivController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NegaraController;
use App\Http\Controllers\metronicController;
use App\Http\Controllers\StatistikController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;


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

Route::resource('/univ',  UnivController::class)->middleware('auth');

Route::resource('negara',  NegaraController::class)->middleware('auth');

Route::resource('/kota',  KotaController::class)->middleware('auth');

Route::resource('/siswa',  SiswaController::class)->middleware('auth');

Route::resource('/statistik',  StatistikController::class)->middleware('auth');

Route::get('/get-kota-by-negara/{negara_id}', [UnivController::class, 'getKotaByNegara']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/login', [metronicController::class, 'index'])->name('login')->middleware('guest');
// Route::get('/login', [metronicController::class, '']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/get-kota-by-negara/{negara_id}', 'KotaController@getByNegara')->name('get-kota-by-negara');