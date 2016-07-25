<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('estudiantes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("nombres");
			$table->string("apellido_paterno");
			$table->string("apellido_materno");
			$table->longtext("intereses");
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('estudiantes');
	}

}
