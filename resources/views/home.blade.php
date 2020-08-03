@extends('layouts')

@section("title")
    Home Page
@endsection

@section("content")
<div class="container">
	<h2> Home Page</h2>
	<a href="receipe/create"><button class="btn btn-success">CREATE</button></a> 
    @foreach($data as $value)
    	<a href="/receipe/{{ $value->id }}"> <li>Name - {{$value->name}}</li> </a>
    	<li>Ingredients - {{$value->ingredients}}</li>
    	<li>category - {{$value->category}}</li>
    	<hr>
    	
    @endforeach
	
</div>
@endsection
