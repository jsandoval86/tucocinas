<?php

use Illuminate\Database\Seeder;

use App\User;

class UsuariosSeed extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(User::class)->times(10)->create();
	}
}
