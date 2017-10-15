<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

// usuarios factory
$factory->define(App\User::class, function (Faker $faker) {
	static $password;
	$username = $faker->unique()->safeEmail;

	return [
		'nombre' => $faker->firstName,
		'apellido' => $faker->lastName,
		'username' => $username,
		'email' => $username,
		'password' => $password ?: $password = bcrypt('secret'),
		'remember_token' => str_random(10),
	];
});

