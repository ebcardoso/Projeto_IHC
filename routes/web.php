<?php

//Página Inicial
Route::get('/', 'Aplicativo\AplicativoController@index')->name('home');
Route::get('/home', 'Aplicativo\AplicativoController@index');
Route::get('/perfil', 'Aplicativo\AplicativoController@perfil')->name('perfil');    

//Logout
Route::get('/logout', 'Auth\LoginController@logout')->name('logout'); 
Auth::routes();