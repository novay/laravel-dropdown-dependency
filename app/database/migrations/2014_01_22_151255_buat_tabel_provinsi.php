<?php

use Illuminate\Database\Migrations\Migration;

class BuatTabelProvinsi extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('provinsi', function($t) {
			$t->increments('id');
			$t->string('nama', 50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('provinsi');
	}

}