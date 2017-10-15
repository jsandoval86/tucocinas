<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMegusta extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('me_gusta')) {
			Schema::create('me_gusta', function (Blueprint $table) {
				$table->integer('usuario_id')->unsigned();
				$table->integer('receta_id')->unsigned();
				$table->primary(['usuario_id', 'receta_id']);

				$table->foreign('usuario_id')
					->references('id')
					->on('users');

				$table->foreign('receta_id')
					->references('id')
					->on('receta');

				$table->timestamps();
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
		Schema::dropIfExists('me_gusta');
	}
}
