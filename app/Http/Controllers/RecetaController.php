<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Receta;

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
}
