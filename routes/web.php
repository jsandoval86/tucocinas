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

Route::post('/registro', 'Auth\RegisterController@register')
	->name('registrarse');

// login vista
Route::get('/ingreso', function() {
	return view('ingreso');
})->name('login');

// login function
Route::post('/login', 'Auth\LoginController@login')
	->name('ingresar');

// logout
Route::get('/logout','Auth\LoginController@logout')
	->name('logout');

// Estado receta
Route::get('/estado-receta/{idReceta}', 'RecetaController@estadoReceta')
	->name('estado_receta');

// descripcion receta vista
Route::get('/receta-descripcion', 'RecetaController@guardarDescripcionVista')
	->name('descripcion_receta_vista')
	->middleware('auth');

// guardar descripcion receta 
Route::post('/receta-descripcion', 'RecetaController@guardarDescripcion')
	->name('crear_descripcion_vista')
	->middleware('auth');

// Cargar imagen vista
Route::get('/receta/{idReceta}/imagen', 'RecetaController@guardarImagenVista')
	->name('imagen_receta_vista')
	->middleware('auth');

// guardar imagen receta
Route::post('/receta/{idReceta}/imagen', 'RecetaController@guardarImagen')
	->name('crear_imagen_receta')
	->middleware('auth');

// ingredientes receta vista
Route::get('/receta/{idReceta}/ingredientes', 'RecetaController@guardarIngredientesVista')
	->name('ingredientes_receta_vista')
	->middleware('auth');

// guardar ingrediente receta
Route::post('/receta/{idReceta}/ingredientes', 'RecetaController@guardarIngredientes')
	->name('crear_ingredientes_receta')
	->middleware('auth');

// borrar Ingrediente
Route::get('/receta/{idReceta}/ingrediente/{idIngrediente}', 'RecetaController@borrarIngrediente')
	->name('borrar_ingrediente')
	->middleware('auth');

// redireccion a vista de preparacion
Route::get('/receta/{idReceta}/preparacion/redirect', 'RecetaController@redirectPreparacion')
	->name('redirect_preparacion')
	->middleware('auth');

// vista de preparacion
Route::get('/receta/{idReceta}/preparacion', 'RecetaController@preparacionVista')
	->name('receta_preparacion')
	->middleware('auth');

// Guardar paso receta
Route::post('/receta/{idReceta}/paso', 'RecetaController@guardarPasoReceta')
	->name('receta_paso_crear')
	->middleware('auth');