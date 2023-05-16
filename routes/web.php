<?php

use App\Http\Controllers\OlahragaPopulerIndonesiaController;
use App\Http\Controllers\PesertalombaController;
use App\Models\Pesertalomba;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [OlahragaPopulerIndonesiaController::class, 'index']);
Route::get('/tambah', [OlahragaPopulerIndonesiaController::class, 'tambah']);
Route::post('/tambah', [OlahragaPopulerIndonesiaController::class, 'store']);
Route::get('/hapus/{id}', [OlahragaPopulerIndonesiaController::class, 'hapus']);
Route::get('/edit/{id}', [OlahragaPopulerIndonesiaController::class, 'edit']);
Route::post('/edit/{id}', [OlahragaPopulerIndonesiaController::class, 'update']);
Route::get('/lihat/{id}', [OlahragaPopulerIndonesiaController::class, 'lihat']);



