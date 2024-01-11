<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'searchIndexMagang']);
Route::get('/search-magang', [IndexController::class, 'searchIndexMagang']);
Route::get('/search-studi-independen', [IndexController::class, 'searchIndexStudiIndependen']);

Route::POST('getDataMagang', [ApiController::class, 'getDataMagangFromApi']);
Route::POST('getDataSI', [ApiController::class, 'getDataStudiIndependenFromApi']);