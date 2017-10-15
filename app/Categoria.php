<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Receta;

class Categoria extends Model
{
/**
	*/
	protected $table = 'categoria';

	/**
	* relacion de receta
	*/
	public function receta() {
		return $this->hasMany(Receta::class);
	}
}
