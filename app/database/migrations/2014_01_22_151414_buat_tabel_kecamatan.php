<?php

use Illuminate\Database\Migrations\Migration;

class BuatTabelKecamatan extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kecamatan', function($t) {
			$t->increments('id');
			$t->string('nama', 50);
			$t->unsignedInteger('id_kabupaten_kota');
			$t->foreign('id_kabupaten_kota')
				->references('id')->on('kabupaten_kota')
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
		Schema::drop('kecamatan');
	}

}