<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Receta;

class Ingrediente extends Model
{
	/**
	* table name
	*/
	protected $table = 'ingrediente';

	/**
	* Mensaje error al guardar
	*/
	public static $ERROR_GUARDAR = 'Ocurrio un error al guardar el Ingrediente';

	/**
	* Mensaje exito al guardar humanizado
	*/
	public static $EXITO_GUARDAR_HUM = 'Bien hecho, algo mas que quieras agregar?';

	/**
	* relacion con receta
	*/
	public function receta() {
		return $this->belongsTo(Receta::class);
	}

}
