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
Route::get('/dieta/cafe',   'Aplicativo\DietaController@cafe')->name('dieta.cafe');
Route::get('/dieta/almoco', 'Aplicativo\DietaController@almoco')->name('dieta.almoco');
Route::get('/dieta/janta',  'Aplicativo\DietaController@janta')->name('dieta.janta');
Route::get('/dieta/cafe_excluir/{id}',   'Aplicativo\DietaController@cafe_excluir')->name('dieta.cafe_excluir');
Route::get('/dieta/almoco_excluir/{id}', 'Aplicativo\DietaController@almoco_excluir')->name('dieta.almoco_excluir');
Route::get('/dieta/janta_excluir/{id}',  'Aplicativo\DietaController@janta_excluir')->name('dieta.janta_excluir');

//metas
Route::get('/meta',       'Aplicativo\MetaController@inicial')->name('meta.inicial');
Route::get('/meta/criar', 'Aplicativo\MetaController@criar')->name('meta.criar');
Route::post('/meta/criar/inserir_bd', 'Aplicativo\MetaController@inserir_bd')->name('meta.inserir_bd');
Route::get('/meta/{id}',  'Aplicativo\MetaController@meta')->name('meta.exibir');
Route::get('/meta/{id}/encerrar',  'Aplicativo\MetaController@encerrar')->name('meta.encerrar');

//exercicios
Route::get('/exercicios',              'Aplicativo\ExerciciosController@inicial')->name('exercicios.inicial');
Route::get('/exercicios/excluir/{id}', 'Aplicativo\ExerciciosController@excluir')->name('exercicios.excluir');