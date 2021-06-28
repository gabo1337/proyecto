<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\noticiaUnica;
use App\Http\Controllers\noticias;
use App\Http\Controllers\guias;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\postController;
use App\Http\Controllers\DiscucionesController;
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


//buscador
Route::post('/buscar', [HomeController::class, 'buscar']);

//foro
Route::get('forounico/{id}', [foros::class, 'prueba'])->name('foro');
Route::post('/root/{foro}', [foros::class, 'eliminar']);

//noticia

Route::get('/noticias', [noticias::class, 'index']);
Route::get('/noticiaUnica/{id}', [noticias::class, 'show'])->name('noticia');
Route::post('noticias/store', [noticias::class, 'store']);

//guias
Route::get('/guias', [guias::class, 'index']);
Route::get('/guiaUnica/{id}', [guias::class, 'show'])->name('guia');
Route::post('guias/store', [guias::class, 'store']);


//post
Route::get('/posts', [postController::class, 'index']);
Route::get('/postUnica/{id}', [postController::class, 'show'])->name('post');
Route::post('posts/store', [postController::class, 'store']);

//discuciones
Route::get('/discuciones', [DiscucionesController::class, 'index']);
Route::get('/discucionUnica/{id}', [DiscucionesController::class, 'show'])-> name('discucion');
Route::post('discuciones/store', [DiscucionesController::class, 'store']);


//crearforo
Route::get('/foros', [foros::class, 'index']);
Route::get('/nuevoforo', [foros::class, 'show']);
Route::post('/foros/crear', [foros::class, 'store']);


//usuario

Route::get('usuario/{id}', [administradorController::class, 'eliminar']);
Route::get('/administrador', [administradorController::class, 'index']);
Route::get('users/{user}', [UserController::class, 'profile'])->name('user.profile');
Route::post('/user/editar/{profile}', [UserController::class, 'edit']);



Route::post('/comments/discucion', [CommentController::class, 'storeDis']);




Auth::routes();

Route::get(
    '/home',
    [App\Http\Controllers\HomeController::class,
    'index'])-> name('home');


