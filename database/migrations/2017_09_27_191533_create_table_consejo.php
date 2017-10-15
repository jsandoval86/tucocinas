<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConsejo extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		if (!Schema::hasTable('consejo')) {
			Schema::create('consejo', function (Blueprint $table) {
				$table->increments('id');
				$table->text('descripcion');
				$table->integer('receta_id')->unsigned();
				$table->timestamps();
			});

			Schema::table('consejo', function (Blueprint $table) {
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
		Schema::dropIfExists('consejo');
	}
}
