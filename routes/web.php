<?php

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
//rota RAIZ
Route::get('/', 'App\Http\Controllers\PrincipalController@principal');

//Rota sobre-nós
Route::get('/sobre-nos','App\Http\Controllers\SobreNosController@sobreNos');

//Rota contato
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato');