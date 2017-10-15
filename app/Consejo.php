<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Receta;


class Consejo extends Model
{
	/**
	* nombre de tabla
	*/
	protected $table = 'consejo';

	/**
	* relacion de receta
	*/
	public function receta() {
		return $this->belongsTo(Receta::class);
	}
}
