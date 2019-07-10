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