<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(UsuariosSeed::class);
		$this->call(CategoriaSeed::class);
		$this->call(RecetaSeed::class);
	}
}
