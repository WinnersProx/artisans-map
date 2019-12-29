@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')

@section('message')
	<p>Sorry, Resource Not Found!</p>
@stop
<a href="{{ route('home') }}">Go back home</a>