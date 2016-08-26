@extends('layouts.master')
@section('title')
RKO 
- Homepage
@stop
@section('content')
<style>
}
</style>
<div class="row">
	<div class="col s2 m2 purple fullpage">
		<ul>
			<a href='/'><li>Homepage</li></a>
			<a href="{{action('PostsController@create')}}"><li>Create a Post</li></a>
			<a><li>View My Posts</li></a>
		</ul>
	</div>
	<div class="col s10 m10 fullpage">
		<div class="row">
		<div class="col s2 m2 blue">Hot</div>
		<div class="col s2 m2 green">Top</div>
		<div class="col s2 m2 yellow">New</div>
		<div class="card col s12 m12 green" style="margin-bottom:0px;margin-top: 0px">
		</div>
		<table style="margin-top:0px">
		@foreach($data['posts'] as $post)
		<tr>
			<td class="green">
			@if(!empty($post->url))
			<a href="{{$post->url}}">
			@endif
			<p>{{$post->title }}</p>
			@if(!empty($post->url))
			<a>
			@endif
			<p>Created By <a>{{$post->created_by}}</a></p></td>
			<td class="green lighten-2">{{$post->content}}</td>
		</tr>
		@endforeach
		</table>		
		</div>
	</div>	
</div>
@stop
@section('javascript')
<script>
$(document).ready(function() {
	fixSize();
});
function fixSize(){
	window_size = $(window).height();
	$('.fullpage').height(window_size);
}
$(window).resize();
</script>
@stop