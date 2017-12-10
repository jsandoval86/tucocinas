<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

use App\Helper\Constantes;
use App\Categoria;
use App\Ingrediente;
use App\Paso;
use App\Consejo;
use App\Imagen;
use App\User;


class Receta extends Model
{

	public static $MSG_ERR_GUARDAR = 'Ocurrio un error al guardar la receta, intente luego';

	public static $MSG_ERR_GUARDAR_IMG = 'Ocurrio un error al guardar la imagen, intente luego';

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

	/**
	* Guardar Imagen de receta
	*/
	public static function guardarImagen($imagen) {

		// obtener extension y nombrar archivo
		$extensionImagen = $imagen->getClientOriginalExtension();
		$nombreImagen = $imagen->hashName();

		// agregar path a nombre
		$nombreImagen = Constantes::$PATH_IMG_RECETA . $nombreImagen;

		// guardar archivo
		Storage::disk('public')
			->put($nombreImagen, File::get($imagen));

		return Storage::url($nombreImagen);
	}

	/**
	* Generar el nombre del archivo
	*/
	public static function generarNombre($nombreOriginal) {
		return hash('md5', $nombreOriginal);
	}

}
