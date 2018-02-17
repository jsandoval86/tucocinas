<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Receta;

class Paso extends Model
{
	/**
	* table name
	*/
	protected $table = 'paso';

	/** Mensaje exito al guardar paso */
	public static $MSG_SUCCESS_SAVE = 'Bien hecho, algo mas que quieras agregar?';

	/** Mensaje de error al guardar paso */
	public static $ERROR_GUARDAR = 'Ocurrio un problema, intenta mas tarde';


	/**
	* relacion con receta
	*/
	public function receta() {
		return $this->belongsTo(Receta::class);
	}

}
