<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
	  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
</head>
<body>
<nav class="orange">
	<div class="nav-wrapper">
	<a href="#" class="brand-logo">RKO</a>
	<ul class="right" id="nav-mobile">
		<li><input type="search" style="border:0px;background-color:white" placeholder="search"></li>
		<li><a href="#"><i class="left small material-icons">account_box</i>@if(isset($data['user']) && !empty($data['user']))
		{{$data['user']->username}}
		@else
		{{'Guest'}}
		@endif
		</a></li>
		@if(isset($data['user']))
		<li><a href="{{action('Auth\AuthController@getLogout')}}">Logout</a></li>
		@else
		<li><a href="#">Login/Reister</a></li>
		@endif
	</div>
</nav>
@yield('sidebar')
@yield('content')
@yield('javascript')
</body>
</html>