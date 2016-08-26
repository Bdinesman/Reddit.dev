@extends('layouts.master')
@section('title')
Creae A Post
@stop
@section('content')
<div class="container">
	<div class="row">
	<h1>Create A Post</h1>
	<div class="red col s12 m12">
	<form method="POST" action="{{action('PostsController@store')}}">
	{!!csrf_field()!!}
		<div class="input-field">
			<input type="text" class="validate" name="title" id="title" value="{{old('title')}}">
			<label for="title">Title</label>
		</div>
		<div class="input-field">
			<input type="text" class="validate" name="url" id="url"  value="{{old('url')}}">
			<label for="url">URL</label>
		</div>
		<div class="input-field">
			<textarea class="validate" name="content" id="content" value="{{old('content')}}"></textarea>
			<label for="content">Content</label>
		</div>
		@if(!isset($request) || !$request->has('subreddit'))
		<div class="input-field">
			<input type="text" class="validate" name="subreddit" id="subreddit" value="{{old('subreddit')}}">
			<label for="title">Subreddit</label>
		</div>
		@endif
		<button type="submit" class="btn">Post</button>
	</form>
	</div>
	</div>
</div>
@stop