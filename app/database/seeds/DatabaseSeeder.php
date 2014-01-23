<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('ProvinsiSeeder');
		$this->command->info('####### Tabel provinsi berhasil terisi! #######');
		$this->call('KabupatenSeeder');
		$this->command->info('####### Tabel kabupaten berhasil terisi! #######');
		$this->call('KecamatanSeeder');
		$this->command->info('####### Tabel kecamatan berhasil terisi! #######');
		$this->call('KelurahanSeeder');
		$this->command->info('####### Tabel kelurahan berhasil terisi! #######');
	}

}