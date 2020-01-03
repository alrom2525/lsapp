@extends('layouts.layout')

@section('content')
	<h1>Edit post</h1>
	<hr>
	<br>
	{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
    		{{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
    		{{Form::textarea('body', $post->body, ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Body text'])}}
    	</div>
        <div class="form-group">
            {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
    	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection