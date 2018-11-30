<?php


Route::get('/', function()
{
    return '<h1>Primeira lógica com Laravel</h1>';
});


Route::get('/contatos', 'ContatoController@lista');
Route::get('/contatos/mostra/{id?}', 'ContatoController@mostra')->where('id', '[0-9]+');
Route::get('/contatos/novo', 'ContatoController@novo');
Route::post('/contatos/adiciona', 'ContatoController@adiciona');
Route::get('/contatos/remove/{id}', 'ContatoController@remove');


Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

