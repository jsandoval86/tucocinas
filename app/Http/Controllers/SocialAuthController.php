<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\User;
use App\SocialUser;
use Exception;
use Socialite;

class SocialAuthController extends Controller
{

	private $AUTH_DENIED = 'No tenemos acceso a tu cuenta';

	public function facebook() {
		return Socialite::driver('facebook')->redirect();
	}

	/**
	* registro de usuario de facebook
	* @param Request $request
	*/
	public function facebookCallback(Request $request) {

		// validar respuesta de facebook
		$error = $request->input('error');

		if ($error == "access_denied") {
			return redirect()
				->route('registro')
				->with('status-type', 'alert-danger')
				->with('status', $this->AUTH_DENIED);
		}

		// obteniendo datos de facebook
		$usuarioSocial = Socialite::driver('facebook')->user();
		// obetener usuario del sistema
		$usuario = User::obtenerUsuarioConCredencialesDeFacebook($usuarioSocial);

		// registrar usuario si no existe
		if (is_null($usuario)){
			try{
				$usuario = User::registrarUsuarioFacebook($usuarioSocial);
			}
			catch(Exception $e) {
				// log error
				Log::error($e->getMessage());
				// redirect error 505
			}
		}

		// logear usuario usuario
		auth()->login($usuario);

		// redirigiendo a inicio
		return redirect()
			->route('inicio');
	}

}
