
,<?php

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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {

	Route::resource('partidos','PartidoController');

	Route::resource('candidatos','CandidatoController');

	Route::get('votacao', 'CandidatoController@view_votar');

	Route::get('confirmar/{id}', 'CandidatoController@confirmar');

	Route::post('candidato', 'CandidatoController@view_candidato');

	Route::post('/votar', 'CandidatoController@votar');

});

Route::get('/home', 'HomeController@index')->name('home');
