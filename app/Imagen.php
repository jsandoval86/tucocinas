<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Receta;

class Imagen extends Model
{
	/**
	* nombre de tabla
	*/
	protected $table = 'imagen';

	/**
	* relacion con receta
	*/
	public function receta() {
		return $this->belongsTo(Receta::class);
	}
}
