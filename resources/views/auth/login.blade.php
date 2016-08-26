@extends('layouts.master')
@section('title')
Log In
@stop
@section('content')
<div class="container">
<h1>Log In</h1>
<form  method="POST" action="{{action('Auth\AuthController@postLogin')}}">
{!!csrf_field()!!}
	<div class="row">
	<div class="card blue col s12 m12">
		<div class="input-field col s12 m12">
			<input type="text" name="email" id="email" class="validate" value={{old('email')}}>
			<label for="email">Email</label>
		</div>
		<div class="input-field col s12 m12">
			<input type="password" name="password" id="password" class="validate" value={{old('password')}}>
			<label for="username">Password</label>
		</div>
	</div>
	</div>
	<button type="submit" class="btn">Submit</button>
	</form>
</div>
@stop