<?php

use Illuminate\Database\Seeder;

use App\Categoria;

class CategoriaSeed extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(Categoria::class)->times(10)->create();
	}
}
