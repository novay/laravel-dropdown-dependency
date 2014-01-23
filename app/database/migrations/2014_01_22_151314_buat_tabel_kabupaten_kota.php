<?php

use Illuminate\Database\Migrations\Migration;

class BuatTabelKabupatenKota extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kabupaten_kota', function($t) {
			$t->increments('id');
			$t->string('nama', 50);
			$t->unsignedInteger('id_provinsi');
			$t->foreign('id_provinsi')
				->references('id')->on('provinsi')
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('kabupaten_kota');
	}

}