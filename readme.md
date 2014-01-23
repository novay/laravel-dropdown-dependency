# Laravel Dropdown Dependency

![demo](https://raw.github.com/novay/novay-gallery/master/My%20Screenshot/Demo/Demo%20Dropdown%20Dependency.gif)

### Fitur
 - AJAX Process
 - SQLITE sebagai driver databasenya (*poor*)
 - Daftar Lengkap Kabupaten/Kota di Kalimantan Timur
 - Daftar Lengkap Kecamatan di Kalimantan Timur
 - Daftar Lengkap Kelurahan/Desa di Kalimantan Timur

### Instalasi
 - Download zip lalu extract
 - `composer install`
 - `php artisan serv`
 - Kunjungi `localhost:8000` melalui browser

### Tutorial
 - Download [Laravel](https://github.com/laravel/laravel/archive/master.zip) dan Extract
 - Buka **Command Prompt** atau **Terminal** lalu tuju ke direktori proyek

 - ####Generate Key
   `php artisan key:generate`

 - ####Migrations
   - Eksekusi Perintah berikut untuk membuat migration tabel :

     `php artisan migrate:make buat_tabel_provinsi`
     `php artisan migrate:make buat_tabel_kabupaten_kota`
     `php artisan migrate:make buat_tabel_kecamatan`
     `php artisan migrate:make buat_tabel_kelurahan_desa`

   - Isi masing-masing file tabel yang dibuat di `app/database/migrations/*`

     - Untuk **Provinsi**

     	```
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
		```

     - Untuk **Kabupaten**

		```
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
		```

     - Untuk **Kecamatan**

		```
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
		```

     - Untuk **Kelurahan**

     	```
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
		```

   - Kembali ke **Terminal**, eksekusi perintah `php artisan migrate`

 - ####Seeds
   - Tuju ke direktori `app/database/seeds/*` lalu buat database yang dibutuhkan bila ada.
   - Atau bisa comot [DISINI](https://github.com/novay/laravel-dropdown-dependency/tree/master/app/database/seeds) sebagai contoh.
   - Kembali ke **Terminal**, eksekusi perintah `php artisan db:seed`

 - ####Models
   - Setiap model disini berfungsi menampung masing-masing data tabel yang berasal dari database.
   - Buat beberapa model sesuai dengan banyaknya tabel.
   - Untuk **Provinsi.php**
		```
		<?php

		class Provinsi extends Eloquent {
		     
		    # Tembak isi database berdasarkan tabel  
		    protected $table = 'provinsi';
		    # Disable fungsi timestamps
		    public $timestamps = false;
		     
		}
		```
   - Untuk **Kabupaten.php**
		```
		<?php

		class Kabupaten extends Eloquent {
		   
		   # Tembak isi database berdasarkan tabel  
		    protected $table = 'kabupaten_kota';
		    # Disable fungsi timestamps
		    public $timestamps = false;
		     
		}
		```
   - Untuk **Kecamatan.php**
		```
		<?php

		class Kecamatan extends Eloquent {
		     
		    # Tembak isi database berdasarkan tabel  
		    protected $table = 'kecamatan';
		    # Disable fungsi timestamps
		    public $timestamps = false;
		     
		}
		```
   - Untuk **Kelurahan.php**
		```
		<?php

		class Kelurahan extends Eloquent {
		     
		    # Tembak isi database berdasarkan tabel  
		    protected $table = 'kelurahan_desa';
		    # Disable fungsi timestamps
		    public $timestamps = false;
		     
		}
		```

 - ####Controllers

buat view

edit route

php artisan serv

localhost:8000

### Credit
 - Laravel 4.1
 - jQuery v1.8.2
 - Dida Nurwanda