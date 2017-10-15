@extends('layout')

@section('content')
	<h2>Recetas...</h2>
	@if(count($recetas))
		@foreach($recetas as $receta)
			<div class="row" style="">
			</div>
		@endforeach
	@else
		<p>No se encontraron recetas</p>
	@endif
@endsection