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

Route::get('/', function () {
    return view('home',[
    	'name' => 'Home Page Template'
    ]);
});


Route::get('/php', function () {
    return view('php',[
    	"data" => array(
    		"lesson1" => "this is php lesson 1",
    		"lesson2" => "this is php lesson 2",
    		"lesson3" => "this is php lesson 3"

    	)
    ]);
});


Route::get('/js', function () {
    return view('js',[
    	"data" => array(
    		"lesson1" => "this is js lesson 1",
    		"lesson2" => "this is js lesson 2",
    		"lesson3" => "this is js lesson 3"

    	)
    ]);
});

