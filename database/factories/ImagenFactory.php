<?php

use Faker\Generator as Faker;

use App\Imagen;

$factory->define(Imagen::class, function (Faker $faker) {
	return [
		'ruta' => $faker->imageUrl(640, 480, 'food')
	];
});
