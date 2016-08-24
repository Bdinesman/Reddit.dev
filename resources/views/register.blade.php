@extends('layouts.master')
@section('title')
Register
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
	@if($errors->has('username'))
	<span class="red col s12 m12">{{$errors->first('username')}}</span>
	@endif
		<div class="input-field col s12 m12">
			<input type="password" name="password" id="password" class="validate" value={{old('password')}}>
			<label for="username">Password</label>
		</div>
	@if($errors->has('password'))
	<span class="red col s12 m12">{{$errors->first('password')}}</span>
	@endif
		<div class="input-field col s12 m12">
			<input type="password" name="retype_password" id="retype_passowrd" class="validate">
			<label for="username">Re-type Password</label>
		</div>
	@if($errors->has('retype_password'))
	<span class="red col s12 m12">{{$errors->first('retype_password')}}</span>
	@endif
		<div class="input-field col s12 m12">
			<input type="text" name="email" id="email" class="validate" value={{old('email')}}>
			<label for="username">Email</label>
		</div>	
	@if($errors->has('email'))
	<span class="red col s12 m12">{{$errors->first('email')}}</span>
	@endif	
	</div>
	</div>
	<button type="submit" class="btn">Submit</button>
	</form>
</div>
@stop