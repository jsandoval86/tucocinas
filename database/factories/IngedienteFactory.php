<?php

use Faker\Generator as Faker;

use App\Ingrediente;

$factory->define(Ingrediente::class, function (Faker $faker) {
	return [
		'cantidad' => rand(1, 4).' '.$faker->word,
		'nombre' => $faker->sentence(rand(3, 5))
	];
});
