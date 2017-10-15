<?php

use Faker\Generator as Faker;

use App\Consejo;

$factory->define(Consejo::class, function (Faker $faker) {
	return [
		'descripcion' => $faker->sentence(rand(10, 20))
	];
});
