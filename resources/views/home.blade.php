@extends('layouts')

@section("title")
    Home Page
@endsection

@section("content")
<h2> Home Page</h2>
    @foreach($data as $value)
    	<li>Name - {{$value->name}}</li>
    	<li>Ingredients - {{$value->ingredients}}</li>
    	<li>category - {{$value->category}}</li>
    	
    @endforeach
@endsection