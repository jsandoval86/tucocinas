<?php

use Faker\Generator as Faker;

// categoria factory
$factory->define(App\Categoria::class, function (Faker $faker) {

	$nombre = $faker->word;

	return [
		'nombre' => $nombre,
		'slug' => $nombre
	];
});
