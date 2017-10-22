<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/styles.css')}}">
	@yield('head')
</head>
<body>
	<div class="nav-bar">
		<div class="col-xs-10"></div>
		<div class="col-xs-2" style="text-align: center;">
			<span class="glyphicon glyphicon-menu-hamburger primary-color-text button-menu" id="menu-button"></span>
		</div>
	</div>

	<div class="side-bar" id="sideBar">
		<div class="side-bar-top">
			<div class="row">
				<h3>Tu Cocinas</h3>
			</div>
			<div class="row">
				<div class="col-xs-6">
					<a href="#" class="btn btn-link">Registrarse</a>
				</div>
				<div class="col-xs-6">
					<a href="#" class="btn btn-default">Ingresar</a>
				</div>
			</div>
		</div>
		<div class="row">
			@include('menu')
		</div>
	</div>
	@yield('content')
	@yield('footer')
</body>
<script type="text/javascript" src="{{URL::asset('js/bundle.js')}}"></script>
</html>