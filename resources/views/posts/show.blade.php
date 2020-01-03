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
	<img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}">
	<br> <br>
	@if(!Auth::guest()) 
		@if(Auth::user()->id == $post->user_id)
			<a href="/posts/{{$post->id}}/edit" class="btn btn-secondary">Edit</a>
			<br><br>
				
			{!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
				{{Form::hidden('_method', 'DELETE')}}
				{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
			{!!Form::close()!!}
		@endif
	@endif
@endsection
 