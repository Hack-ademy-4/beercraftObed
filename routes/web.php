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
Route::get('/contacto', [HomeController::class, "contacto"])->name("contacto");
Route::post('/contacto', [HomeController::class, "nuevoContacto"])->name("contacto_nuevo");

Route::get('/cervecerias', [BreweryController::class, "todas"])->name("cervecerias");
Route::get('/detalles', [BreweryController::class, "detallesCerveceria"])->name("detallesCerveceria");


Route::post('/nueva_cerveceria',[BreweryController::class,'create'])->name("nueva_Cerveceria");
Route::get('/nueva_cerveceria',[BreweryController::class,'nuevaCerveceria'])->name("agregarCerveceria");
