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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/view', [

    'uses' => 'pagecontroller@new'

]);


Route::get('/todos', [

    'uses' => 'TodosController@index'
]);

Route::get('/todo/delete/{id}', [
    'uses' => 'TodosController@remove',
      'as'  => 'todo.delete'

    ]);

Route::post('/create/todo', [
'uses' => 'TodosController@store'
]);

Route::get('/todo/update/{id}', [

    'uses' => 'TodosController@update',
    'as' => 'todo.update'



]);

Route::post('/todo/save/{id}', [
    'uses' => 'TodosController@save',
    'as'=> 'todo.save'
    ]);


 Route::get('/todos/completed/{id}', [
  
        'uses' => 'TodosController@completed',
        'as' => 'todo.completed'

    ]);
    