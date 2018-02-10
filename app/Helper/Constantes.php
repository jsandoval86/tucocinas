<?php 

namespace App\Helper;

/**
* Constantes 
*/
class Constantes 
{

	/** Opciones de tiempo para duracion de receta */
	public static $DURACION_RECETA = array(
		"10 min", "15 min","20 min", "30 min", "45 min",
		"1 hora", " mas de 1 hora"
	);

	/** Estado para mensajes a vista estado de error */
	public static $STATUS_DANGER = 'alert-danger';

	/** Estado de exito */
	public static $STATUS_SUCCESS = 'alert-success';

	/** Path imagenes de receta */
	public static $PATH_IMG_RECETA = 'img/recetas/';

	/** Mensaje validacion de numero de ingrediente para habilitar redireccion a preparacion */
	public static $MSG_INGREDIENTES_LISTA_VACIA = 'Agrega Ingredientes a la lista!';

}

