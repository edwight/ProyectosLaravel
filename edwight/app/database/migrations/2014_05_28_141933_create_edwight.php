<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEdwight extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('articulo', function($table)
		{	
			$table->create();
			$table->bigIncrements('id');
		    $table->string('titulo',100);
		    $table->string('etiquetas',50);
		    $table->string('imagen',50);
		    $table->text('leyenda');
		    $table->text('description');
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
		Schema::drop('articulo');
	}

}
