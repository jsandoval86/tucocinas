@extends('layout')

@section('content')
	<div class="container">
		<h3 class="registro-titulo">Bienvenido a tu cocinas!</h3>
		<h4 class="registro-subtitulo">Registrate y comparte</h4>
		@if(session('status'))
			<div class="alert {{session('status-type')}}" role="alert">
			{{session('status')}}
			</div>
		@endif
		<form class="registro-form" method="POST" action="{{URL::route('registrarse')}}">
			<div class="form-group">
				<label for="nombre">Nombre:</label>
				<input type="text" name="nombre" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="usuario">usuario:</label>
				<input type="text" name="usuario" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="password">Contraseña:</label>
				<input type="password" name="password" class="form-control" required>
			</div>
			<input type="submit" value="registrarse" class="form-control registro-boton">
		</form>

		<div class="divider" style="margin-bottom: 30px;"></div>

		<div class="registro-fb-wrapper">
			<a href="{{URL::route('auth_facebook')}}" class="registro-fb-boton">Registro con Facebook</a>
		</div>
	</div>
@endsection
