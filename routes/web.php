<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\noticiaUnica;
use App\Http\Controllers\noticias;
use App\Http\Controllers\guias;
use App\Http\Controllers\UserController;
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

//noticia
Route::get('/noticiaUnica', [noticiaUnica::class, 'index']);
Route::get('/noticias', [noticias::class, 'index']);
Route::get('/nuevanoticia', [noticias::class, 'show']);
Route::post('/noticias/crear', [noticias::class, 'store']);
//buscador
Route::post('/buscar', [HomeController::class, 'buscar']);

//foro
Route::get('forounico/{id}', [foros::class, 'prueba']);
Route::view('foroUnico/', 'foroUnico')->name('asd');


//guias
Route::get('/guias', [guias::class, 'index']);
Route::get('/guiaUnica', [guiaUnica::class, 'index']);

//crearforo
Route::get('/foros', [foros::class, 'index']);
Route::get('/nuevoforo', [foros::class, 'show']);
Route::post('/foros/crear', [foros::class, 'store']);


//usuario

Route::get('usuario/{id}', [administradorController::class, 'eliminar']);
Route::get('/administrador', [administradorController::class, 'index']);
Route::get('users/{user}', [UserController::class, 'profile'])->name('user.profile');
Route::post('/user/editar/{profile}', [UserController::class, 'edit']);





Auth::routes();

Route::get(
    '/home',
    [App\Http\Controllers\HomeController::class,
    'index'])-> name('home');


