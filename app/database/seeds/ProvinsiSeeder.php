<?php

class ProvinsiSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		
		$temp = array( 'nama' => 'Kalimantan Timur' );
		DB::table('provinsi')->insert($temp);
	}

}