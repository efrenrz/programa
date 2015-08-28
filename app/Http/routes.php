<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});


Route::resource('escuelas', 'EscuelasController');
Route::post('escuelas/observaciones/{id}', [
    'as' => 'observaciones',
    'uses' => 'EscuelasController@observaciones'
]);


Route::resource('convenios', 'ConveniosController');
Route::resource('licitaciones', 'LicitacionesController');
Route::resource('asuntos', 'AsuntosController');
Route::resource('representaciones', 'RepresentacionesController');
Route::resource('becas', 'BEcasController');
Route::resource('eventos', 'EventosController');
Route::resource('oferta', 'OfertaController');
Route::resource('reforma', 'ReformaController');
