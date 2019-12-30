@extends('layouts.layout')

@section('content')
	<h1>Create post</h1>
	<hr>
	<br>
	{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
    	<div class="form-group">
    		{{Form::label('title', 'Title')}}
    		{{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('body', 'Body')}}
    		{{Form::textarea('body', '', ['id' => 'editor1', 'class' => 'form-control', 'placeholder' => 'Body text'])}}
    	</div>
    	{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection