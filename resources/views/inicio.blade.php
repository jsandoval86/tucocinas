@extends('layout')

@section('content')
	<h2>Recetas...</h2>
	@if(count($recetas))
		@foreach($recetas as $receta)
			<div class="receta-card">
			<div class="row receta-card-header">
				<div class="col-xs-6">
					@if($receta->usuario)
						<img src="{{$receta->usuario->imagen}}">
						<span class="receta-username">{{$receta->usuario->username}}</span>
					@else
						<h4>Tu cocinas</h4>
					@endif
				</div>
				<div class="col-xs-6 receta-fecha-wrapper">
					<span class="receta-fecha">
						{{$receta->created_at->diffForHumans()}}
					</span>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<img src="{{URL::asset($receta->imagenes->first()->ruta)}}" class="receta-imagen">
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<h3>{{ucfirst($receta->nombre)}}</h3>
					<p>
						{{str_limit($receta->descripcion, 100)}}
						<a href="#" class="btn btn-link">Leer mas</a>
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4">
					{{$receta->num_personas_min}} -
					{{$receta->num_personas_max}}
				</div>
				<div class="col-xs-4">
					$ {{number_format($receta->costo, 2)}}
				</div>
				<div class="col-xs-4">
					{{$receta->duracion}}
				</div>
			</div>
			</div>
		@endforeach
	@else
		<p>No se encontraron recetas</p>
	@endif
@endsection