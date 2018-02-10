@foreach($ingredientes as $ingrediente)
	<li class="receta-ingredientes-item">
	<div class="row">
		<div class="col-xs-10 col-md-10 receta-ingredientes-item-descripcion-wrapper">
			<p>{{$ingrediente->nombre}}</p>
		</div>
		<div class="col-xs-2 col-md-2">
			<a href="#" class="glyphicon glyphicon-remove receta-ingredientes-item-borrar" data-ingredienteid="{{$ingrediente->id}}" data-ingredientenombre="{{$ingrediente->nombre}}"></a>
		</div>
	</div>
	</li>
@endforeach