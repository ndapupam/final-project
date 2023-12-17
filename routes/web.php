<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NadaController;

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

Route::get('/', function () {
    return view('welcome');
});
// BELAJAR ELOQUENT
Route::get('/database-baju',[NadaController::class,'index']);

// Tambah data baju
Route::get('/database-baju/tambah',[NadaController::class,'tambah']);
Route::post('/database-baju/store',[NadaController::class,'store']);

Route::get('/database-baju/edit/{id}',[NadaController::class,'edit']);
Route::post('/database-baju/update',[NadaController::class,'update']);

Route::get('/database-baju/hapus/{id}',[NadaController::class,'hapus']);

Route::get('/database-baju/cari',[NadaController::class,'cari']);

Route::get('/database-baju/view/{id}',[NadaController::class,'view']);

Route::get('/home',[NadaController::class,'home']);

// Route::get('/home', [App\Http\Controllers\LandingController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
