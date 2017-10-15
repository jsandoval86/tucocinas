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

	/**
	* relacion con receta
	*/
	public function receta() {
		return $this->belongsTo(Receta::class);
	}
}
