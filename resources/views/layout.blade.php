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
			<h3 class="side-bar-top-title">Tu Cocinas</h3>
			<div class="side-bar-top-content">

			@if(!Auth::user())
				<div class="row">
					<div class="col-xs-6">
						<a href="{{URL::route('registro')}}" class="btn btn-link">Registrarse</a>
					</div>
					<div class="col-xs-6">
						<a href="{{URL::route('ingreso')}}" class="btn btn-default">Ingresar</a>
					</div>
				</div>
			@else
				<div class="row">
					<p class="menu-usuario">
						<a href="#" class="menu-usuario-nombre">
							{{Auth::user()->obtenerNombreCompleto()}}
						</a>
					</p>
				</div>
				<div class="row">
					<a href="{{URL::route('logout')}}" class="btn btn-default">Salir</a>
				</div>
			@endif

			</div>
		</div>
		<div class="row">
			@include('menu')
		</div>
	</div>

	<div class="content">
		@yield('content')
	</div>

	@yield('footer')
</body>
<script type="text/javascript" src="{{URL::asset('js/bundle.js')}}"></script>
</html>