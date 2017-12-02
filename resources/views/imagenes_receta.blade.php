@extends('layout')

@section('nav-actions')
	<h3 class="receta-navbar-title">
		Receta
	</h3>
@endsection

@section('content')
	<div class="container">
		<form method="POST" 
			action="{{URL::route('crear_imagen_receta', ['idReceta' => $receta->id])}}"
			class="receta-imagenes-form"
			enctype="multipart/form-data" 
			>

			@if(session('status'))
				<div class="alert {{session('status-type')}}">
					<p>
						{{session('status')}}
					</p>
				</div>
			@endif

			{{csrf_field()}}

			<h4 class="receta-imagenes-titulo">{{$receta->nombre}}</h4>
			<div style="text-align: center;padding: 50px;">
				<span class="glyphicon glyphicon-cloud-upload" style="font-size: 100px;display: block;padding-bottom: 30px; color: #757575;">
				</span>
				<span>Subir imagen de receta</span>
			</div>
			<div class="form-group" style="text-align: center;">
				<label
					class="btn btn-default btn-file receta-imagenes-boton">
					Elegir Imagen	<input type="file" name="imagen" required>
				</label>
			</div>
			<input type="submit" class="btn receta-descripcion-boton" value="Subir">
		</form>
	</div>
@endsection