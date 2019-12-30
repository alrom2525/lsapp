@extends('layouts.layout')

@section('content')
	<a href="/posts" class="btn btn-primary">Go back</a>
	<br><br>
	<h1>{{$post->title}}</h1>
	<small>Written on {{$post->created_at}}</small>
	<br>
	<hr>
	<div>
		{!!$post->body!!}
	</div>
	<hr>
	<br>
@endsection
 