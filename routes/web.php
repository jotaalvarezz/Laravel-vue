<?php

use App\Http\Controllers\FruitController;
use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('index');


Route::get('frutas', [FruitController::class,'index'])->name('frutas.index');
Route::post('frutas', [FruitController::class,'store'])->name('frutas.store');
Route::get('pdf',[FruitController::class,'pdf'])->name('frutas.pdf');
Route::post('contacto',[FruitController::class,'correo'])->name('contacto.correo');