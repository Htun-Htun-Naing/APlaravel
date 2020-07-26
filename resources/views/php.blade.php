@extends('layouts')

@section("title")
    PHP Page
@endsection

@section("content")
    <h2>PHP Page</h2>

    @foreach($data as $value)

   			<li>{{$value}}</li>

    @endforeach

@endsection