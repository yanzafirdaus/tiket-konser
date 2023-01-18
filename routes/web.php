<?php

use App\Http\Controllers\AkunController;
use App\Http\Controllers\PemesananTiketController;
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
    return view('dashboard');
});
Route::get('login', function(){
    return view('login');
})->name('login');
Route::get('/dashboard', [PemesananTiketController::class, 'index'])->name('dashboard');
Route::post('/pesan-tiket', [PemesananTiketController::class, 'pesan']);
Route::get('/detail-tiket/{id}', [PemesananTiketController::class, 'detailTiket']);
Route::post('/sign-in', [AkunController::class, 'signIn']);
Route::get('/data-pesanan', [PemesananTiketController::class, 'dataPesanan']);
Route::get('/edit/{tiket_id}', [PemesananTiketController::class, 'editPesanan']);
Route::post('/edit-tiket', [PemesananTiketController::class, 'update']);
Route::get('/delete/{tiket_id}', [PemesananTiketController::class, 'delete']);

