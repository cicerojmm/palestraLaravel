<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/produtos', 'ProdutoController@listar');
Route::get('/produtos/detalhes/{id}', 'ProdutoController@detalhes') ->where('id', '[0-9]+');
Route::get('/produtos/remove/{id}', 'ProdutoController@remove') ->where('id', '[0-9]+');
Route::get('/produtos/altera/{id}', 'ProdutoController@altera') ->where('id', '[0-9]+');
Route::get('/produtos/novo', 'ProdutoController@novo');
Route::post('/produtos/adiciona', 'ProdutoController@adiciona');
Route::post('/produtos/alterado/{id}', 'ProdutoController@alterado');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
