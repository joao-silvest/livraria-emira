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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'LivrosController@lista'); 

Route::get('/cadastro', 'LivrosController@index'); 

Route::get('/editar/{dados}', 'LivrosController@editaLista');

Route::post('/save', 'LivrosController@save'); 

Route::post('/update', 'LivrosController@update');

Route::post('/delete/{livro}', 'LivrosController@delete');