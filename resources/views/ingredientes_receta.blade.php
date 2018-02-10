@extends('layout')

@section('nav-actions')
	<h3 class="receta-navbar-title">
		Receta
	</h3>
@endsection

@section('content')
	<div class="container">
		<p class="receta-ingredientes-titulo">Que Ingredientes necesitamos?</p>
		<div class="receta-ingredientes-crear">
			@include('partials.session_status')
			<form id="recetaCrearIngrediente"
				action="{{URL::route('crear_ingredientes_receta', ['idReceta' => $receta->id])}}"
				class="receta-ingredientes-form"
				method="POST">
				{{csrf_field()}}
				<input type="hidden" name="receta-id" value="{{$receta->id}}" id="recetaId">
				<div class="form-group @if($errors->has('nombre')) has-error @endif">
					<textarea rows="2" class="form-control" name="nombre"></textarea>
					@if($errors->has('nombre'))
					<span class="help-block">
						@foreach($errors->get('nombre') as $error)
							- {{$error}} <br>
						@endforeach
					</span>
				@endif
				</div>

				<input type="submit" value="Agregar" class="btn receta-ingrediente-boton">
			</form>
		</div>
		<div class="divider"></div>
		<div class="receta-ingredientes-lista-wrapper">
			<ul class="receta-ingredientes-lista">
				@include('partials.ingredientes_receta_lista')
			</ul>
		</div>
	</div>
	<div class="receta-ingredientes-preparacion-btn">
		<a href="{{URL::route('receta_preparacion', ['idReceta' => $receta->id])}}" class="btn preparacion-continuar-btn">
			Continuar
		</a>
	</div>
@endsection