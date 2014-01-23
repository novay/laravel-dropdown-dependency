<?php

class KabupatenSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		
		$temp = array(
			array('nama' => 'Balikpapan', 'id_provinsi' => '1'),
			array('nama' => 'Berau', 'id_provinsi'	=> '1'),
			array('nama' => 'Bontang', 'id_provinsi' => '1'),
			array('nama' => 'Bulungan', 'id_provinsi' => '1'),
			array('nama' => 'Kutai Barat', 'id_provinsi' => '1'),
			array('nama' => 'Kutai Kartanegara', 'id_provinsi' => '1'),
			array('nama' => 'Kutai Timur', 'id_provinsi' => '1'),
			array('nama' => 'Malinau', 'id_provinsi' => '1'),
			array('nama' => 'Nunukan', 'id_provinsi' => '1'),
			array('nama' => 'Paser', 'id_provinsi' => '1'),
			array('nama' => 'Penajam Paser Utara', 'id_provinsi' => '1'),
			array('nama' => 'Samarinda', 'id_provinsi' => '1'),
			array('nama' => 'Tana Tidung', 'id_provinsi' => '1'),
			array('nama' => 'Tarakan', 'id_provinsi' => '1'),
		);
		
		DB::table('kabupaten_kota')->insert($temp);
	}

}