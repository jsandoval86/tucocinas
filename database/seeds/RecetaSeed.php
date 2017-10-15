<?php

use Illuminate\Database\Seeder;

use App\Receta;

class RecetaSeed extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(Receta::class)
			->times(20)
			->create()
			->each(function($receta) {
				// ingrediente
				$receta->ingredientes()->save(
					factory(App\Ingrediente::class)->make()
				);
				// imagen
				$receta->imagenes()->save(
					factory(App\Imagen::class)->make()
				);
				// consejo
				$receta->consejos()->save(
					factory(App\Consejo::class)->make()
				);
			});
	}
}
