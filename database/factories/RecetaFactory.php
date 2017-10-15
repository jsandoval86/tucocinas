<?php

use Faker\Generator as Faker;

use App\Categoria;
use App\User;

// recetas factory
$factory->define(App\Receta::class, function (Faker $faker) {

	return [
		'nombre' => $faker->word(rand(2, 5)),
		'descripcion' => $faker->text(rand(80, 200)),
		'num_personas_min' => rand(1, 3),
		'num_personas_max' => rand(4, 8),
		'costo' => $faker->randomFloat(2, 15000, 100000),
		'duracion' => date('H:i:s'),
		'categoria_id' => function() {
			return App\Categoria::find(rand(1, 10))->id;
		},
		'usuario_id' => function () {
			return App\User::find(rand(1, 10))->id;
		},
	];
});