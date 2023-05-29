<?php

use App\Http\Controllers\seriesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [seriesController::class, 'Index']);
Route::get('/series/criar', [seriesController::class, 'create']);
Route::post('/series/salvar', [seriesController::class, 'store']);
