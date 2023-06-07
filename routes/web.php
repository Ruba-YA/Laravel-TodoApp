<?php

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
Route::get('/', 'App\Http\Controllers\TodoController@index')->name('todos.index');
Route::get('/todos/create', 'App\Http\Controllers\TodoController@create')->name('todos.create');
Route::post('/todos', 'App\Http\Controllers\TodoController@store')->name('todos.store');
Route::get('/todos/{todo}', 'App\Http\Controllers\TodoController@show')->name('todos.show');
Route::get('/todos/{todo}/edit', 'App\Http\Controllers\TodoController@edit')->name('todos.edit');
Route::put('/todos/{todo}', 'App\Http\Controllers\TodoController@update')->name('todos.update');
Route::delete('/todos/{todo}', 'App\Http\Controllers\TodoController@destroy')->name('todos.destroy');