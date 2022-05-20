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

//Route::get('/', function () {
  //  return view('welcome');
//});

//home (read)
Route::get('/', 'App\Http\Controllers\FundosController@showAll');
//novo fundo (create)
Route::get('/fundos/novo', 'App\Http\Controllers\FundosController@create');
Route::post('/fundos/novo', 'App\Http\Controllers\FundosController@store') -> name('registrar_fundo');
//editar fundo (update)
Route::get('/fundos/editar/{cod_fundo}', 'App\Http\Controllers\FundosController@edit');
Route::post('/fundos/editar/{cod_fundo}', 'App\Http\Controllers\FundosController@update') -> name('alterar_fundo');
//excluir fundo (delete)
Route::get('/fundos/excluir/{cod_fundo}', 'App\Http\Controllers\FundosController@delete');
Route::post('/fundos/excluir/{cod_fundo}', 'App\Http\Controllers\FundosController@destroy') -> name('excluir_fundo');