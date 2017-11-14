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
			{{csrf_field()}}
			<div class="form-group @if($errors->has('nombre')) has-error @endif">
				<label for="nombre">Nombre:</label>
				<input type="text" name="nombre" class="form-control" value="{{old('nombre')}}" required>
				@if($errors->has('nombre'))
					<span class="help-block">
						@foreach($errors->get('nombre') as $error)
						 - {{$error}} <br>
						@endforeach
					</span>
				@endif
			</div>
			<div class="form-group @if($errors->has('username')) has-error @endif">
				<label for="username">usuario:</label>
				<input type="text" name="username" class="form-control" value="{{old('username')}}" required>
				@if($errors->has('username'))
					<span class="help-block">
						@foreach($errors->get('username') as $error)
						 - {{$error}} <br>
						@endforeach
					</span>
				@endif
			</div>
			<div class="form-group @if($errors->has('email')) has-error @endif">
				<label for="email">Email:</label>
				<input type="email" name="email" class="form-control" value="{{old('email')}}" required>
				@if($errors->has('email'))
					<span class="help-block">
						@foreach($errors->get('email') as $error)
						 - {{$error}} <br>
						@endforeach
					</span>
				@endif
			</div>
			<div class="form-group" class="@if($errors->has('password')) has-error @endif">
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
			<input type="submit" value="registrarse" class="form-control registro-boton">
		</form>

		<div class="divider" style="margin-bottom: 30px;"></div>

		<div class="registro-fb-wrapper">
			<a href="{{URL::route('auth_facebook')}}" class="registro-fb-boton">Registro con Facebook</a>
		</div>
	</div>
@endsection
