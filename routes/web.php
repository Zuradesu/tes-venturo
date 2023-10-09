<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TugasController;

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

Route::get('tes', function () {
    return view('tes');
});


// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/home', [HomeController::class, 'index']);

// Route::get('/tes', [HomeController::class, 'index']);

Route::get('/tugas', [TugasController::class, 'menu']);
// Route::get('/tugas', [TugasController::class, 'minuman']);
Route::get('/tugas', [TugasController::class, 'DataMakanan']);
// Route::get('/tugas', [TugasController::class, 'transaksi1']);



