<?php

use App\Todo;
use Illuminate\Support\Facades\Route;

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

Route::get('todos', 'TodosController@index');

Route::get('todos/{todosId}', 'TodosController@show');

Route::get('createTodos', 'TodosController@create');

Route::post('store-todos', 'TodosController@store'); 

Route::get('todos/{todo}/edit', 'TodosController@edit');

Route::post('todos/{todosId}/update-todos', 'TodosController@update');

Route::get('todos/{todosId}/delete', 'TodosController@destroy');







 Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
