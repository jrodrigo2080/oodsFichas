<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fechamento\AgenteController;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/painel', 'HomeController@index')->name('home');

Route::post('/register', function () {
    return view('auth.register');
});
//autenticação
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Agentes
Route::get('/agentes','Fechamento\AgenteController@read')->middleware('auth')->name('fechamento.agente');
Route::post('/agentes','Fechamento\AgenteController@save')->middleware('auth')->name('fechamento.agente.save');
Route::get('/agentes/{id}','Fechamento\AgenteController@edit')->middleware('auth')->name('fechamento.agente.edit');
Route::post('/agentes/search','Fechamento\AgenteController@read')->middleware('auth')->name('fechamento.agente.search');
Route::GET('agentes/{id}/delete','Fechamento\AgenteController@destroy')->middleware('auth')->name('fechamento.agente.delete');

//Clubes
Route::get('/clubes','Fechamento\ClubeController@read')->middleware('auth')->name('fechamento.clube');
Route::post('/clubes/search','Fechamento\ClubeController@read')->middleware('auth')->name('fechamento.clube.search');
Route::post('/clubes','Fechamento\ClubeController@save')->middleware('auth')->name('fechamento.clubes.save');
Route::get('/clubes/{id}','Fechamento\ClubeController@edit')->middleware('auth')->name('fechamento.clubes.edit');
Route::get('/clubes/{id}/delete','Fechamento\ClubeController@delete')->middleware('auth')->name('fechamento.clubes.delete');
//Usuarios
Route::get('/usuario','Fechamento\UserController@read')->name('fechamento.user');
Route::post('/usuario','Fechamento\UserController@save')->name('fechamento.user.save');
Route::get('/usuario/edit/{id}','Fechamento\UserController@edit')->middleware('auth')->name('fechamento.user.edit');
Route::get('/usuario/{id}/delete','Fechamento\UserController@destroy')->middleware('auth')->name('fechamento.user.delete');
//Vinculação
Route::get('/vinculacao','Fechamento\VinculacaoController@index')->middleware('auth')->name('fechamento.vinculacao');
Route::POST('/vinculacao/search','Fechamento\VinculacaoController@index')->middleware('auth')->name('fechamento.vinculacao.search');
Route::post('/vinculacao','Fechamento\VinculacaoController@create')->middleware('auth')->name('fechamento.vinculacao.create');
Route::get('/vinculacao','Fechamento\VinculacaoController@show')->middleware('auth')->name('fechamento.vinculacao.show');
Route::get('/vinculacao/{id}/edit','Fechamento\VinculacaoController@edit')->middleware('auth')->name('fechamento.vinculacao.edit');
Route::get('/vinculacao/{id}/delete','Fechamento\VinculacaoController@destroy')->middleware('auth')->name('fechamento.vinculacao.destroy');
//Fechamento
Route::get('/fechamento','Fechamento\FechamentoController@index')->middleware('auth')->name('fechamento.fechamento');
Route::post('/fechamento','Fechamento\FechamentoController@index')->middleware('auth')->name('fechamento.fechamento');
Route::get('/fechamento/buscaclube','Fechamento\FechamentoController@getClubes')->middleware('auth')->name('getClubes');
Route::post('/fechamento','Fechamento\FechamentoController@getClubes')->name('fechamento.getclubes');
Route::post('/fechamento/create','Fechamento\FechamentoController@create')->middleware('auth')->name('fechamento.fechamento.create');
Route::post('/fechamento/logo','Fechamento\FechamentoController@getLogo')->middleware('auth')->name('fechamento.fechamento.logo');
//Relatorios
Route::get('/relatoriofechamento','Fechamento\RelatorioFechamentoController@index')->middleware('auth')->name('relatorio');
Route::post('/relatoriofechamento','Fechamento\RelatorioFechamentoController@buscaRelatorio')->middleware('auth')->name('relatorio.tipo');
Route::any('/relatorio/search','Fechamento\RelatorioFechamentoController@search')->middleware('auth')->name('relatorio.search');
//PDF
Route::get('pdf','Fechamento\RelatorioFechamentoController@geraPdf')->middleware('auth')->name('relatorio.pdf');
