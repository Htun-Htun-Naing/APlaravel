<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
    	$name = "Home Page";
    	return view('home',compact('name'));
    }

    public function phpPage()
    {
    	$data = array(
    		"lesson1" => "this is php lesson 1",
    		"lesson2" => "this is php lesson 2",
    		"lesson3" => "this is php lesson 3"

    	);
    	return view('php',compact('data'));
    }

    public function jsPage()
    {
    	$data = array(
    		"lesson1" => "this is js lesson 1",
    		"lesson2" => "this is js lesson 2",
    		"lesson3" => "this is js lesson 3"

    	);
    	return view('php', compact('data'));
    }
}
