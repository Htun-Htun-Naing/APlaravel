<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceipesController extends Controller
{
    //
    public function index()
    {
    	$data = \App\Receipes::all();

    	return view('home',compact('data'));
    }
}
