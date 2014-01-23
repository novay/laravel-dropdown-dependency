<?php

use Illuminate\Database\Migrations\Migration;

class BuatTabelKelurahanDesa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('kelurahan_desa', function($t) {
			$t->increments('id');
			$t->string('nama', 50);
			$t->unsignedInteger('id_kecamatan');
			$t->foreign('id_kecamatan')
				->references('id')->on('kecamatan')
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
		Schema::drop('kelurahan_desa');
	}

}