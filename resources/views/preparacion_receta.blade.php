@extends('layout')

@section('nav-actions')
	<h3 class="receta-navbar-title">
		Receta
	</h3>
@endsection

@section('content')
	<div class="container">
		<p class="receta-preparacion-titulo">
			Cuéntanos como preparar el plato <br>
			<small>Escribe un paso y oprime agregar, sé breve</small>
		</p>
		<div class="receta-preparacion-crea">
			@include('partials.session_status')
			<form
				id="recetaCrearPaso"
				method="POST"
				action="{{URL::route('receta_paso_crear', ['idReceta' => $receta->id])}}"
				class="receta-preparacion-form"
				>
				{{csrf_field()}}
				<div class="form-group @if($errors->has('descripcion')) has-error @endif">
					<textarea rows="2" class="form-control" name="descripcion"></textarea>
					@if($errors->has('descripcion'))
					<span class="help-block">
						@foreach($errors->get('descripcion') as $error)
							- {{$error}} <br>
						@endforeach
					</span>
				@endif
				</div>

				<input type="submit" value="Agregar" class="btn receta-preparacion-boton">
			</form>
		</div>
		<div class="divider"></div>
		<div class="receta-pasos-lista-wrapper">
			<ul class="receta-pasos-lista">
				@include('partials.ingredientes_pasos_lista')
			</ul>
		</div>
	</div>
@endsection