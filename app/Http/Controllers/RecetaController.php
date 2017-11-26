<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Receta;
use App\Categoria;
use App\Helper\Constantes;

class RecetaController extends Controller
{

	/**
	* vista detalle de receta
	* @param Request $request
	* @param $idReceta
	*/
	public function detalle(Request $request, $idReceta) {

		// obtener receta
		$receta = Receta::find($idReceta);

		if (is_null($receta)) {
			return 'Error 404';
		}

		// retornar vista detalle
		return view('receta_detalle', [
			'receta' => $receta
		]);
	}

	/**
	* Mostrar vista estado de receta
	* @param Request $request
	* @param $idReceta
	*/
	public function estadoReceta(Request $request, $idReceta = null) {

		$receta = Receta::find($idReceta);

		// retornar vista de estado
		return view('estado_receta', [
			'receta' => $receta
		]);
	}

	/**
	* Guardar descripcion de una receta vista
	* @param Request $request
	*/
	public function guardarDescripcionVista(Request $request) {

		$categorias = Categoria::all();
		$duracion = Constantes::$DURACION_RECETA;


		// retornar vista
		return view('descripcion_receta', [
			'categorias' => $categorias,
			'duracion' => $duracion
		]);
	}

	/**
	* Guardar descripcion receta
	* @param Request $request
	*/
	public function guardarDescripcion(Request $request) {

		// validacion 
		$this->validarGuardarDescripcion($request);

		// crear receta
		$receta = new Receta();
		$receta->categoria_id = $request->input('categoria_id');
		$receta->nombre = $request->input('nombre');
		$receta->descripcion = $request->input('descripcion');
		$receta->num_personas_min = $request->input('num_personas_min');
		$receta->num_personas_max = $request->input('num_personas_max');
		$receta->costo = $request->input('costo');
		$receta->duracion = $request->input('duracion');
		$receta->usuario_id = auth()->user()->id;

		// guardar receta
		try{
			$receta->save();
		}
		catch(Exception $e){
			Log::error($e->getMessage());

			// retornar error
			return back()
				->with('status', Receta::$MSG_ERR_GUARDARSS)
				->with('status-type', 'alert-danger');
		}

		// redireccionar a cargar imagen
		return redirect()
			->route('imagen_receta_vista');
	}

	/**
	* Validar guardar receta
	*/
	public function validarGuardarDescripcion(Request $request) {
		$this->validate($request, [
			'categoria_id' => 'required|exists:categoria,id',
			'nombre' => 'required',
			'descripcion' => 'required',
			'num_personas_min' => 'bail|nullable|min:0',
			'num_personas_max' => 'bail|nullable|min:0',
			'costo' => 'required|numeric|min:0',
			'duracion' => 'bail|nullable'
		]);
	}

	/**
	* Guardar Imagen Vista
	* @param Request $request
	*/
	public function guardarImagenVista(Request $request) {
		return view('imagenes_receta');
	}

}
