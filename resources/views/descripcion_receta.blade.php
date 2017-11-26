@extends('layout')


@section('nav-actions')
	<h3 class="receta-navbar-title">
		Receta
	</h3>
@endsection

@section('content')
	<div class="container">
		<form class="receta-descripcion-form" method="POST" action="{{URL::route('crear_descripcion_vista')}}">

			@if(session('status'))
				<div class="alert {{session('status-type')}}">
					<p>
						{{session('status')}}
					</p>
				</div>
			@endif

			{{csrf_field()}}
			<div class="form-group @if($errors->has('categoria_id')) has-error @endif">
				<label for="categoria_id">Categoria:</label>
				<select name="categoria_id"  placeholder="Categoria" class="form-control">
					@if($categorias)
						@foreach($categorias as $categoria)
							<option value="{{$categoria->id}}"
								@if($categoria->id == old('categoria_id'))
									selected
								@endif
							>
								{{$categoria->nombre}}
							</option>
						@endforeach
					@endif
				</select>
				@if($errors->has('categoria_id'))
					<span class="help-block">
						@foreach($errors->get('categoria_id') as $error)
							- {{$error}} <br>
						@endforeach
					</span>
				@endif
			</div>
			<div class="form-group @if($errors->has('nombre')) has-error @endif">
				<input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{old('nombre')}}">
				@if($errors->has('nombre'))
					<span class="help-block">
						@foreach($errors->get('nombre') as $error)
							- {{$error}} <br>
						@endforeach
					</span>
				@endif
			</div>
			<div class="form-group @if($errors->has('descripcion')) has-error @endif">
				<textarea rows="3" name="descripcion" placeholder="Descripción" class="form-control">{{old('descripcion')}}</textarea>
				@if($errors->has('descripcion'))
					<span class="help-block">
						@foreach($errors->get('descripcion') as $error)
							- {{$error}} <br>
						@endforeach
					</span>
				@endif
			</div>
			<div class="form-group row">
				<div 
					class="col-xs-6 col-md-6 @if($errors->has('num_personas_min')) has-error @endif">

					<label for="num_personas_min">
						Personas min.:
					</label>
					<input type="number" name="num_personas_min" min="0" placeholder="min. personas" class="form-control" value="1">
					@if($errors->has('num_personas_min'))
						<span class="help-block">
							@foreach($errors->get('num_personas_min') as $error)
								- {{$error}} <br>
							@endforeach
						</span>
					@endif
				</div>
				<div class="col-xs-6 col-md-6 @if($errors->has('num_personas_max')) has-error @endif ">
					<label for="num_personas_max">
						Personas max.:
					</label>
					<input type="number" name="num_personas_max" min="0" placeholder="max. personas" class="form-control" value="1">
					@if($errors->has('num_personas_max'))
						<span class="help-block">
							@foreach($errors->get('num_personas_max') as $error)
								- {{$error}} <br>
							@endforeach
						</span>
					@endif
				</div>
			</div>
			<div class="form-group row">
				<div class="col-xs-6 col-md-6 @if($errors->has('costo')) has-error @endif">
					<label for="costo">
						Costo:
					</label>
					<input type="number" name="costo" min="0" placeholder="Costo"
					class="form-control">
					@if($errors->has('costo'))
						<span class="help-block">
							@foreach($errors->get('costo') as $error)
								- {{$error}} <br>
							@endforeach
						</span>
					@endif
				</div>
				<div class="col-xs-6 col-md-6 @if($errors->has('duracion')) has-error @endif">

					<label for="duracion">
						Duración:
					</label>
					<select name="duracion" placeholder="Duración" class="form-control">
						@if($duracion)
							@foreach($duracion as $d)
								<option value="{{$d}}">
									{{$d}}
								</option>
							@endforeach
						@endif
					</select>
					@if($errors->has('duracion'))
						<span class="help-block">
							@foreach($errors->get('duracion') as $error)
								- {{$error}}
							@endforeach
						</span>
					@endif
				</div>
			</div>

			<input type="submit" class="btn receta-descripcion-boton">
		</form>
	</div>
@endsection