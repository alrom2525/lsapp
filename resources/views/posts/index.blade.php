@extends('layouts.layout')

@section('content')
	<h1>Posts</h1>
	<hr>
	<br>
	@if (count($posts) > 0)
		@foreach ($posts as $post)
			<div class="card">
				<div class="card-header">
					<h3> <a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
				</div>
				<div class="card-body">
					<small>Written on {{$post->created_at}}</small>
				</div>	
			</div>
			<br>
		@endforeach
		{{$posts->links()}}
	@else		
		<p>No posts found</p>
	@endif
@endsection