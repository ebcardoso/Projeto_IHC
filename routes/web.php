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

//Página Inicial é a Página de Login
    Route::get('/', 'Login\LoginController@index')->name('login');   
    Route::post('/verificasenha', 'Login\LoginController@verificasenha')->name('login.check');    
    Route::get('/criar', 'Login\LoginController@criar')->name('login.criar');    