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

Route::resource('/ws/alunos', 'alunoController');

Route::resource('/ws/categorias', 'categoriaController');

Route::resource('/ws/livros', 'livroController');

Route::get('/ws/livrocat','livroController@categorias');


Route::get('/', function () {
    return view('welcome');
});
