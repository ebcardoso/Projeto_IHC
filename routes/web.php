<?php

//Página Inicial
Route::get('/', 'Aplicativo\AplicativoController@index')->name('home');
Route::get('/home', 'Aplicativo\AplicativoController@index');
Route::get('/perfil', 'Aplicativo\AplicativoController@perfil')->name('perfil');    

//Logout
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

//Grupo
Route::get('/grupo', 'Aplicativo\GrupoController@index')->name('grupo.index');
Route::get('/grupo/convidar', 'Aplicativo\GrupoController@convidar')->name('grupo.convidar');
Route::post('/grupo/convitesave', 'Aplicativo\GrupoController@convitesave')->name('grupo.convitesave');
Route::resource('grupo', 'Aplicativo\GrupoController');

//notificações
Route::get('/notificacoes', 'Aplicativo\NotController@index')->name('notificacao.index');

//responsavel
Route::post('/responsavel/atribuir', 'Aplicativo\ResponsavelController@atribuir')->name('responsavel.atribuir');

//dieta
Route::get('/dieta', 'Aplicativo\DietaController@inicial')->name('dieta.inicial');
Route::get('/dieta/inserircalorias', 'Aplicativo\DietaController@inserircalorias')->name('dieta.inserircalorias');
Route::post('/dieta/setcalorias', 'Aplicativo\DietaController@setcalorias')->name('dieta.setcalorias');
