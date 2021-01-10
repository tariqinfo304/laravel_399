@extends('layout._layout')

@section('title', 'Third Blade Lecture')


@section('header')
	
    <p>Child Header</p>
    <hr/>
    @parent
    
@endsection



@section("content","hi tariq")

@section("footer")
	<p>Child Footer</p>
@endsection


@section("slider")
    	
@endsection
