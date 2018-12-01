<?php


#APP ROUTES
Route::get('/',"HomeController@home");
Route::get('/home',"HomeController@home");
Route::get('/contatos/busca', 'ContatoController@listarContatos');
Route::get('/contatos/form', 'ContatoController@novo');
Route::get('/contatos/form/{id}', 'ContatoController@listarPorId')->where('id', '[0-9]+');

#API ROUTES
Route::post('/contatos', 'ContatoController@inserir');
Route::put('/contatos/{id}', 'ContatoController@atualizar');
Route::delete('/contatos/{id}', 'ContatoController@remover');

Route::post('/contatos/telefone', 'ContatoTelefoneController@inserir');
Route::put('/contatos/telefone/{id}', 'ContatoTelefoneController@atualizar');
Route::get('/contatos/telefone/{id}', 'ContatoTelefoneController@listarTelefonePorId');
Route::delete('/contatos/telefone/{id}', 'ContatoTelefoneController@remover');
Route::get('/contatos/{idContato}/telefones', 'ContatoTelefoneController@buscarTelefonesPorIdContato');

#AUTH ROUTES
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

