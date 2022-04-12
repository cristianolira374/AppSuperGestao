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
Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');
//rota sobre-nós
Route::get('/sobre-nos','App\Http\Controllers\SobreNosController@sobreNos')->name('site.sobrenos');
//rota contato sem parâmetro
Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
//rota login
Route::get('/login', function(){ return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){
    //rota Clientes
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    //rota Fornecedores
    Route::get('/fornecedores', function(){ return 'Fornecedores';})->name('app.fornecedores');
    //rota Produtos
    Route::get('/produtos', function(){ return 'Produtos';})->name('app.produtos');
});

//Redirecionamento
Route::get('/rota1',function(){
    echo 'Rota1';
})->name('site.rota1');

Route::get('/rota2',function(){
    //echo 'Rota2';
    return redirect()->route('site.rota1');
})->name('site.rota2');

//Route::redirect('/rota2','/rota1');

Route::fallback(function(){
    echo 'Página acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para página inicial';
});

//rota contato com parâmetros (nome, categoria)
/* Route::get('/contato/{nome?}/{categoria_id?}', 
    function(string $nome = 'nome não informado',
            int $categoria_id = 1){
    echo "Estamos aqui: $nome - $categoria_id";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+'); */