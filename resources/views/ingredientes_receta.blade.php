@extends('layout')

@section('nav-actions')
	<h3 class="receta-navbar-title">
		Receta
	</h3>
@endsection

@section('content')
	<div class="container">
		<div class="receta-ingredientes-crear">
			<form id="recetaCrearIngrediente"
				action="#"
				class="receta-ingredientes-form">
				<textarea rows="2" class="form-control" name=""></textarea>
				<input type="submit" value="Agregar" class="btn receta-ingrediente-boton">
			</form>
		</div>
		<div class="divider"></div>
		<div class="receta-ingredientes-lista-wrapper">
			<ul class="receta-ingredientes-lista">
				<li class="receta-ingredientes-item">
					<div class="row">
						<div class="col-xs-10 col-md-10 receta-ingredientes-item-descripcion-wrapper">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
						<div class="col-xs-2 col-md-2">
							<a href="#">ed</a>
						</div>
					</div>
				</li>
				<li class="receta-ingredientes-item">
					<div class="row">
						<div class="col-xs-10 col-md-10 receta-ingredientes-item-descripcion-wrapper">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
						<div class="col-xs-2 col-md-2">
							<a href="#">ed</a>
						</div>
					</div>
				</li>
				<li class="receta-ingredientes-item">
					<div class="row">
						<div class="col-xs-10 col-md-10 receta-ingredientes-item-descripcion-wrapper">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
						<div class="col-xs-2 col-md-2">
							<a href="#">ed</a>
						</div>
					</div>
				</li>
				<li class="receta-ingredientes-item">
					<div class="row">
						<div class="col-xs-10 col-md-10 receta-ingredientes-item-descripcion-wrapper">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
						</div>
						<div class="col-xs-2 col-md-2">
							<a href="#">ed</a>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
@endsection