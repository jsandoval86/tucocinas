<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Categoria;
use App\Ingrediente;
use App\Paso;
use App\Consejo;
use App\Imagen;
use App\User;

class Receta extends Model
{
	/**
	*/
	protected $table = 'receta';

	/**
	* relacion de categoria
	*/
	public function categoria() {
		return $this->belongsTo(Categoria::class);
	}

	/**
	* relacion de ingredientes
	*/
	public function ingredientes() {
		return $this->hasMany(Ingrediente::class);
	}

	/**
	* relacion con pasos
	*/
	public function pasos() {
		return $this->hasMany(Paso::class);
	}

	/**
	* relacion de consejos
	*/
	public function consejos() {
		return $this->hasMany(Consejo::class);
	}

	/**
	* relacion con imagenes
	*/
	public function imagenes() {
		return $this->hasMany(Imagen::class);
	}

	/**
	* relacion con usuario
	*/
	public function usuario() {
		return $this->belongsTo(User::class);
	}
}
