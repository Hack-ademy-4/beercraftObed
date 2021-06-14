<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BreweryController;


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

Route::get('/cervecerias', [BreweryController::class, "index"])->name("cervecerias");
Route::get('/cerveceria/{id}', [BreweryController::class, "show"])->name("detallesCerveceria");

Route::get('/nueva_cerveceria',[BreweryController::class,'nuevaCerveceria'])->name("agregarCerveceria");
Route::post('/nueva_cerveceria',[BreweryController::class,'create'])->name("create.cerveceria");

Route::get('/cerveceria/{id}/edit',[BreweryController::class,'edit'])->name("edit.cerveceria");
Route::put('/cerveceria/{id}',[BreweryController::class,'update'])->name("update.cerveceria");

Route::delete('/cerveceria/{id}',[BreweryController::class,'destroy'])->name("delete.cerveceria");

