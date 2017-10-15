<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableImagen extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('imagen')) {
			Schema::create('imagen', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('receta_id')->unsigned();
				$table->string('ruta');
				$table->timestamps();
			});

			Schema::table('imagen', function (Blueprint $table) {
				$table->foreign('receta_id')
					->references('id')
					->on('receta');
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
		Schema::dropIfExists('imagen');
	}
}
