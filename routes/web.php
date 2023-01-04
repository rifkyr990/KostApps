<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('dashboard', [App\Http\Controllers\KostController::class, 'index'])->name('dashboard');
Route::get('create', [App\Http\Controllers\KostController::class, 'create'])->name('create');
Route::get('show/{kost}', [App\Http\Controllers\KostController::class, 'show'])->name('show');
Route::get('edit/{kost}', [App\Http\Controllers\KostController::class, 'edit'])->name('edit');
Route::put('edit/{kost}', [App\Http\Controllers\KostController::class, 'update'])->name('update');
Route::delete('/{kost}', [App\Http\Controllers\KostController::class, 'destroy'])->name('destroy');
Route::post('/addkost', [App\Http\Controllers\KostController::class, 'addkost'])->name('addkost');

Route::get('allkost', [App\Http\Controllers\KostController::class, 'allkost'])->name('allkost');
Route::get('umy', [App\Http\Controllers\KostController::class, 'umy'])->name('umy');
Route::get('uad', [App\Http\Controllers\KostController::class, 'uad'])->name('uad');
Route::get('ugm', [App\Http\Controllers\KostController::class, 'ugm'])->name('ugm');
Route::get('uty', [App\Http\Controllers\KostController::class, 'uty'])->name('uty');
Route::get('amikom', [App\Http\Controllers\KostController::class, 'amikom'])->name('amikom');
Route::get('uii', [App\Http\Controllers\KostController::class, 'uii'])->name('uii');
Route::get('uaa', [App\Http\Controllers\KostController::class, 'uaa'])->name('uaa');


Route::get('ganti/{reservasi}', [App\Http\Controllers\ReservasiController::class, 'ganti'])->name('ganti');
Route::put('ganti/{reservasi}', [App\Http\Controllers\ReservasiController::class, 'perbaharui'])->name('perbaharui');
Route::get('create/{kost}', [App\Http\Controllers\ReservasiController::class, 'create'])->name('create');
Route::post('/addreserv/{kost}', [App\Http\Controllers\ReservasiController::class, 'addreserv'])->name('addreserv');
Route::get('myorder', [App\Http\Controllers\ReservasiController::class, 'myorder'])->name('myorder');
Route::get('confirm', [App\Http\Controllers\ReservasiController::class, 'confirm'])->name('confirm');
Route::get('/reservasi/payment/{reservasi}', [App\Http\Controllers\ReservasiController::class, 'payment'])->name('payment');
Route::post('/addconfirm', [App\Http\Controllers\ReservasiController::class, 'addconfirm'])->name('addconfirm');
Route::delete('/{reservasi}', [App\Http\Controllers\ReservasiController::class, 'hapus'])->name('hapus');

Route::post('/remove/{reservasi}', [App\Http\Controllers\ReservasiController::class, 'remove'])->name('remove');