@extends('layouts.layout')

@section('content')
	<a href="/posts" class="btn btn-primary">Go back</a>
	<br><br>
	<h1>{{$post->title}}</h1>
	<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
	<br>
	<hr>
	<div>
		{!!$post->body!!}
	</div>
	<hr>
	<br>
	<a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
	<br><br>
	
	{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
		{{Form::hidden('_method', 'DELETE')}}
		{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
	{!!Form::close()!!}
@endsection
 