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
    return view('welcome');
});

Route::get('docs', function(){
    return View::make('docs.api.v1.index');
});


Route::post('oauth/access_token', function() {
    return Response::json(Authorizer::issueAccessToken());
});


Route::group(['prefix'=>'api/v1', 'before' => 'oauth'],function(){
    // Dimensões Entidades
    Route::resource('dimensao_colaborador','Colaborador@index');
    Route::resource('dimensao_pdv','Pdv@index');
    Route::resource('dimensao_formulario','Formulario@index');
    Route::resource('dimensao_origem','Origem@index');

    // Dimensões de Entrada Campanha
    Route::resource('dimensao_campanha','Campanha@index');
    Route::resource('dimensao_entrada_campanha','CampanhaEntrada@index');
    Route::resource('dimensao_entrada_campanha_bloco','CampanhaEntradaBloco@index');

    // Dimensões de StoreTracking
    Route::resource('dimensao_storetracking','StoreTracking@index');
    Route::resource('dimensao_storetracking_bloco','StoreTrackingBloco@index');

    // Fatos
    Route::resource('fato_visita','FatoVisita@index');
    Route::resource('fato_entrada_campanha','FatoEntradaCampanha@index');
    Route::resource('fato_entrada_campanha_mkt','FatoEntradaCampanhaMkt@index');
    Route::resource('fato_storetracking','FatoStoreTracking@index');
    Route::resource('fato_storetracking_bloco','FatoStoreTrackingBloco@index');

});
