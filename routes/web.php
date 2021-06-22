<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\noticiaUnica;
use App\Http\Controllers\noticias;
use App\Http\Controllers\guias;
use App\Http\Controllers\guiaUnica;
use App\Http\Controllers\foros;
use App\Http\Controllers\foroUnico;
use App\Http\Controllers\Python;
use App\Http\Controllers\administradorController;

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
Route::get('/', [HomeController::class, 'index']);


Route::get('/noticiaUnica', [noticiaUnica::class, 'index']);

Route::get('/noticias', [noticias::class, 'index']);

Route::get('/guias', [guias::class, 'index']);

Route::get('/guiaUnica', [guiaUnica::class, 'index']);

Route::get('/foros', [foros::class, 'index']);

Route::get('/foroUnico', [foroUnico::class, 'index']);

Route::get('/administrador', [administradorController::class, 'index']);

Route::get('/prueba', [Python::class, 'index']);

Auth::routes();

Route::get(
    '/home',
    [App\Http\Controllers\HomeController::class,
    'index'])-> name('home');