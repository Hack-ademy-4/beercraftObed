<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BreweryController;
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

Route::get('/', [HomeController::class, "inicio"])->name("inicio");
Route::get('/inicio', [HomeController::class, "inicio"])->name("inicio");
Route::get('cervecerias', [BreweryController::class, "todas"])->name("cervecerias");


