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
	* relacion con receta
	*/
	public function receta() {
		return $this->belongsTo(Receta::class);
	}

}
