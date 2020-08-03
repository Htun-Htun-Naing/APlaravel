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

// Route::get('/', 'HomeController@index');
// Route::get('/php', 'HomeController@phpPage');
// Route::get('/js', 'HomeController@jsPage');

// Route::get('receipe', 'ReceipesController@index');
// Route::get('create_receipe', 'ReceipesController@createReceipeForm');
// Route::post('create', 'ReceipesController@create');


Route::resource('receipe', 'ReceipeController');
