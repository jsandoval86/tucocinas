<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Receta;
use App\Categoria;

class InicioController extends Controller
{

	/**
	* Numero de objetos por pagina
	*/
	private $NUMERO_DE_RECETAS_POR_PAGINA = 15;

	/**
	* respondiendo la vista principal vista de inicio
	* @param Request $request
	*/
	public function inicio (Request $request) { 

		$recetas = Receta::where('es_publicada', true)
			->orderBy('created_at', 'desc')
			->simplePaginate($this->NUMERO_DE_RECETAS_POR_PAGINA);

		$categorias = Categoria::all();

		// respondiendo la vista
		return view('inicio', [
			'recetas' => $recetas,
			'categorias' => $categorias
		]);
	}
}
