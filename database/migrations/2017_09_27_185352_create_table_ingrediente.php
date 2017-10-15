<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIngrediente extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('ingrediente')) {
			// creando la tabla
			Schema::create('ingrediente', function (Blueprint $table) {
				$table->increments('id');
				$table->string('cantidad');
				$table->string('nombre');
				$table->integer('receta_id')->unsigned();
				$table->timestamps();
			});

			// creando llaves foraneas
			Schema::table('ingrediente', function (Blueprint $table) {
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
		Schema::dropIfExists('ingrediente');
	}
}
