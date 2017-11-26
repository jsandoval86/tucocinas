<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReceta extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('receta')) {
			Schema::create('receta', function (Blueprint $table) {
				$table->increments('id');
				$table->string('nombre');
				$table->string('descripcion');
				$table->integer('num_personas_min')->nullable();
				$table->integer('num_personas_max')->nullable();
				$table->decimal('costo', 10, 2);
				$table->string('duracion')->nullable();
				$table->boolean('es_publicada')->default(false);
				$table->integer('categoria_id')->unsigned();
				$table->integer('usuario_id')->unsigned()->nullable();
				$table->timestamps();
			});

			Schema::table('receta', function (Blueprint $table) {
				$table->foreign('categoria_id')
					->references('id')
					->on('categoria');

				$table->foreign('usuario_id')
					->references('id')
					->on('users');
			});
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('receta');
	}
}
