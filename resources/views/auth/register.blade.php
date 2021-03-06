@extends('layouts.master')
@section('title')
Log In
@stop
@section('content')
<div class="container">
<h1>Register</h1>
<form method="POST">
{!!csrf_field()!!}
	<div class="row">
	<div class="card blue col s12 m12">
		<div class="input-field col s12 m12">
			<input type="text" name="username" id="username" class="validate" value={{old('username')}}>
			<label for="username">Username</label>
		</div>
		<div class="input-field col s12 m12">
			<input type="password" name="password" id="password" class="validate" value={{old('password')}}>
			<label for="username">Password</label>
		</div>
		<div class="input-field col s12 m12">
			<input type="password" name="retype_password" id="retype_passowrd" class="validate">
			<label for="username">Re-type Password</label>
		</div>
	</div>
	</div>
	<button type="submit" class="btn">Submit</button>
	</form>
</div>
@stop