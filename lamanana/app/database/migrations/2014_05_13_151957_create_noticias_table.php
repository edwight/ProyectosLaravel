<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticiasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('Noticias',function($table)
		{
			$table ->create();
			$table ->increments('id');
			$table ->string('name');
			$table ->string('subtitulo');
			$table ->bigInteger('votes');
			$table ->text('description');
			$table ->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Shema::drop('Noticias');
	}

}
