<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','InicioController@inicio')
	->name('inicio');

Route::get('/receta/{idReceta}', 'RecetaController@detalle')
	->name('receta_detalle');

// Social Auth
Route::get('/auth/facebook', 'SocialAuthController@facebook')
	->name('auth_facebook');

Route::get('/auth/facebook/callback', 'SocialAuthController@facebookCallback')
	->name('auth_facebook_callback');

Route::get('/registro', function() {
	return view('registro');
})->name('registro');