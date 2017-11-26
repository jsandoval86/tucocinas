@extends('layout')

@section('content')
	<div class="container">
		<h2 class="estado-receta-titulo">Crea tu receta</h2>
		<div class="estado-receta-items-wrapper">
			<ul class="estado-receta-lista">
				<li class="estado-receta-item">
					<a href="#">
						<div class="row">
							<div class="col-xs-3 col-md-3">
								<span class="estado-receta-item-paso">
									1
								</span>
							</div>
							<div class="col-xs-9 col-md-9">Descripción</div>
						</div>
					</a>
				</li>
				<li class="estado-receta-item">
					<a href="#">
						<div class="row">
							<div class="col-xs-3 col-md-3">
								<span class="estado-receta-item-paso">
									2
								</span>
							</div>
							<div class="col-xs-9 col-md-9">Imágenes</div>
						</div>
					</a>
				</li>
				<li class="estado-receta-item">
					<a href="#">
						<div class="row">
							<div class="col-xs-3 col-md-3">
								<span class="estado-receta-item-paso">
									3
								</span>
							</div>
							<div class="col-xs-9 col-md-9">Ingredientes</div>
						</a>
					</div>
				</li>
				<li class="estado-receta-item">
					<a href="#">
						<div class="row">
							<div class="col-xs-3 col-md-3">
								<span class="estado-receta-item-paso">
									4
								</span>
							</div>
							<div class="col-xs-9 col-md-9">Preparación</div>
						</a>
					</div>
				</li>
				<li class="estado-receta-item">
					<a href="#">
						<div class="row">
							<div class="col-xs-3 col-md-3">
								<span class="estado-receta-item-paso">
									5
								</span>
							</div>
							<div class="col-xs-9 col-md-9">Consejos</div>
						</div>
					</a>
				</li>
				<li class="estado-receta-item">
					<a href="#">
						<div class="row">
							<div class="col-xs-3 col-md-3">
								<span class="estado-receta-item-paso">
									6
								</span>
							</div>
							<div class="col-xs-9 col-md-9">Publicar</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
@endsection