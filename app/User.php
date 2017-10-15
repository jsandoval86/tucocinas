<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Receta;
use App\User;

class User extends Authenticatable
{
	use Notifiable;

	/**
	* table name
	*/
	protected $table = 'users';

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	* The attributes that should be hidden for arrays.
	*
	* @var array
	*/
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	* relacion megusta
	*/
	public function megusta () {
		return $this->belongsToMany(Receta::class,'me_gusta', 'usuario_id', 'receta_id' );
	}

	/**
	* relacion con receta
	*/
	public function receta() {
		return $this->hasOne(User::class);
	}

}
