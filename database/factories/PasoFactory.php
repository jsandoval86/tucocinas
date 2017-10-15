<?php

use Faker\Generator as Faker;

use App\Paso;

$factory->define(Paso::class, function (Faker $faker) {
	return [
		'prioridad' => '',
		'descripcion' => '',
	];
});
