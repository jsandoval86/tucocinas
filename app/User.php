<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facedes\Log;

use App\Receta;
use App\User;
use App\SocialUser;

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
		'nombre', 'apellido', 'username', 'email', 'password'
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

	/**
	* relacion con usuarios sociales
	*/
	public function socialUser() {
		return $this->hasMany(SocialUser::class);
	}

	/**
	* registrar usuario facebook
	* @param Object usuarioFacebook
	*/
	public static function registrarUsuarioFacebook($usuarioFacebook) {

		// guardar usuario
		$user = self::create([
			'nombre' => $usuarioFacebook->name,
			'username' => explode("@", $usuarioFacebook->email)[0],
			'email' => $usuarioFacebook->email,
			'password' => bcrypt(str_random(15)),
		]);

		// guardar usuario facebook relacion
		$perfilSocial = SocialUser::create([
			'social_user_id' => $usuarioFacebook->id,
			'user_id' => $user->id
		]);

		return $user;
	}

	/**
	* obtener un usuario del sistema con credenciales de facebook
	* @param Object $usuarioSocial
	*/
	public static function obtenerUsuarioConCredencialesDeFacebook($usuarioSocial) {
		return self::whereHas('SocialUser', function($query) use ($usuarioSocial){
			$query->where('social_user_id', $usuarioSocial->id);
		})->first();
	}

}
