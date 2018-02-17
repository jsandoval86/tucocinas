@foreach($pasos as $paso)
	<li class="receta-paso-item">
	<div class="row">
		<div class="col-xs-10 col-md-10 receta-paso-item-descripcion-wrapper">
			<p>{{str_limit($paso->descripcion, 40)}}</p>
		</div>
		<div class="col-xs-2 col-md-2">
			<a href="#" class="glyphicon glyphicon-remove receta-paso-item-borrar" data-ingredienteid="{{$paso->id}}" data-ingredientenombre="{{str_limit($paso->descripcion, 30)}}"></a>
		</div>
	</div>
	</li>
@endforeach