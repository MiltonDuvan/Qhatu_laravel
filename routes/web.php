<?php

use App\Http\Controllers\ArtesaniaController;
use App\Http\Controllers\CompradorController;
use App\Http\Controllers\IndigenaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::resource('/',ArtesaniaController::class);
Route::resource('/profile_detail',IndigenaController::class);
Route::get('/login',[IndigenaController::class,'update']);
Route::get('/register',[CompradorController::class,'create']);
Route::get('/register_indigena',[IndigenaController::class,'create']);
Route::get('/detail_craft',[ArtesaniaController::class,'show']);
