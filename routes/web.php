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

Route::get('/', 'ListaTarefaController@index')->name('index');
Route::post('/tarefa_insert','ListaTarefaController@create')->name('tarefa_insert');
Route::get('/tarefa_deletar/{id}','ListaTarefaController@delete')->name('tarefa_delete');
Route::get('/tarefa_view/{id}', 'ListaTarefaController@show')->name('tarefa_view');
Route::put('/tarefa_atualizar/{id}','ListaTarefaController@update')->name('tarefa_update');


?>
