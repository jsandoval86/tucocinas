@extends('layout')

@section('content')
	<div class="container">
		<h3 class="ingreso-titulo">Ingresa y comparte!</h3>
		<form method="POST" action="{{URL::route('ingresar')}}">
			{{csrf_field()}}
			<div class="form-group @if($errors->has('username')) has-error @endif">
				<label for="username">Usuario:</label>
				<input type="text" name="username" class="form-control" required>
				@if($errors->has('username'))
					<span class="help-block">
						@foreach($errors->get('username') as $error)
							- {{$error}} <br>
						@endforeach
					</span>
				@endif
			</div>
			<div class="form-group @if($errors->has('password')) has-error @endif">
				<label for="password">Contraseña:</label>
				<input type="password" name="password" class="form-control" required>
				@if($errors->has('password'))
					<span class="help-block">
						@foreach($errors->get('password') as $error)
							- {{$error}} <br>
						@endforeach
					</span>
				@endif
			</div>
			<input type="submit" value="Ingresar" class="btn ingreso-btn form-control">
		</form>

		<div class="divider" style="margin-bottom: 30px;"></div>

		<div class="registro-fb-wrapper">
			<a href="{{URL::route('auth_facebook')}}" class="registro-fb-boton">Registro con Facebook</a>
		</div>

	</div>
@endsection