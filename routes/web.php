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
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('partidos','PartidoController');

Auth::routes();

Route::resource('candidatos','CandidatoController');

Route::get('candidato/votar', 'CandidatoController@view_votar');

Route::post('/votar', 'CandidatoController@votar');

Route::get('/home', 'HomeController@index')->name('home');
