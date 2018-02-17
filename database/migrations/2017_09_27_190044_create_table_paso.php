<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePaso extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('paso')) {
			// creando la table paso
			Schema::create('paso', function (Blueprint $table) {
				$table->increments('id');
				$table->text('descripcion');
				$table->integer('receta_id')->unsigned();
				$table->timestamps();
			});

			// creando llaves foraneas
			Schema::table('paso', function (Blueprint $table) {
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
		Schema::dropIfExists('paso');
	}
}
