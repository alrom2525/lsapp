@extends('layouts.layout')

@section('content')
	<h1>Posts</h1>
	<hr>
	<br>
	@if (count($posts) > 0)
		@foreach ($posts as $post)
			<div class="card w-50">
				<div class="card-header">
					<img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}">
				</div>
				<div class="card-body">
					<h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>	
					<small>Written on {{$post->created_at}} by {{$post->user->name}} </small>
				</div>	
			</div>
			<br>
		@endforeach
		{{$posts->links()}}
	@else		
		<p>No posts found</p>
	@endif
@endsection