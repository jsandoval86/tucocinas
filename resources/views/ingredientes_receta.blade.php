@extends('layout')

@section('nav-actions')
	<h3 class="receta-navbar-title">
		Receta
	</h3>
@endsection

@section('content')
	<div class="container">
		<div class="receta-ingredientes-crear">
			@include('partials.session_status')
			<form id="recetaCrearIngrediente"
				action="{{URL::route('crear_ingredientes_receta', ['idReceta' => $receta->id])}}"
				class="receta-ingredientes-form"
				method="POST">
				{{csrf_field()}}

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
				@foreach($ingredientes as $ingrediente)
					<li class="receta-ingredientes-item">
					<div class="row">
						<div class="col-xs-10 col-md-10 receta-ingredientes-item-descripcion-wrapper">
							<p>{{$ingrediente->nombre}}</p>
						</div>
						<div class="col-xs-2 col-md-2">
							<a href="#" class="glyphicon glyphicon-remove receta-ingredientes-item-borrar"></a>
						</div>
					</div>
					</li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection