# Laravel Dropdown Dependency

![demo](https://raw.github.com/novay/novay-gallery/master/My%20Screenshot/Demo/Demo%20Dropdown%20Dependency.gif)

### Fitur
 - AJAX Process
 - SQLITE sebagai driver databasenya (*poor*)
 - **Daftar Lengkap** Kabupaten/Kota di Kalimantan Timur
 - **Daftar Lengkap** Kecamatan di Kalimantan Timur
 - **Daftar Lengkap** Kelurahan/Desa di Kalimantan Timur

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
   - Tuju ke direktori `app/controllers/` lalu buat file baru bernama `DropdownController.php`.
   		```
		<?php

		class DropdownController extends BaseController {

			public function getIndex() 
			{
				# Ambil semua isi tabel tujuan dari model
				$provinsi = Provinsi::all();
				# Inisialisasi variabel daftar dengan array
				$daftar = array('' => '');
				# lakukan perulangan untuk provinsi
				foreach($provinsi as $temp)
					# Isi daftar dengan nama (provinsi) berdasarkan id
					$daftar[$temp->id] = $temp->nama;
				# Tampilkan halaman index beserta variabel daftar
				return View::make('index', compact('daftar'));
			}

			public function postDropdown() 
			{	
				# Tarik ID inputan
				$set = Input::get('id');

				# Inisialisasi variabel berdasarkan masing-masing tabel dari model
				# dimana ID target sama dengan ID inputan
				$kabupaten = Kabupaten::where('id_provinsi', $set)->get();
				$kecamatan = Kecamatan::where('id_kabupaten_kota', $set)->get();
				$kelurahan = Kelurahan::where('id_kecamatan', $set)->get();

				# Buat pilihan "Switch Case" berdasarkan variabel "type" dari form
				switch(Input::get('type')):
					# untuk kasus "kabupaten"
					case 'kabupaten':
						# buat nilai default
						$return = '<option value="">Pilih Kabupaten...</option>';
						# lakukan perulangan untuk tabel kabupaten lalu kirim
						foreach($kabupaten as $temp) 
							# isi nilai return
							$return .= "<option value='$temp->id'>$temp->nama</option>";
						# kirim
						return $return;
					break;
					# untuk kasus "kecamatan"
					case 'kecamatan':
						$return = '<option value="">Pilih Kecamatan...</option>';
						foreach($kecamatan as $temp) 
							$return .= "<option value='$temp->id'>$temp->nama</option>";
						return $return;
					break;
					# untuk kasus "kelurahan"
					case 'kelurahan':
						$return = '<option value="">Pilih Kelurahan...</option>';
						foreach($kelurahan as $temp) 
							$return .= "<option value='$temp->id'>$temp->nama</option>";
						return $return;
					break;
				# pilihan berakhir
				endswitch;    
			}

		}
		```

 - ####Routes
   - Edit file `app/routes.php`.
   		```
   		<?php

		Route::controller('/', 'DropdownController');
   		```

 - ####Views
   - Buat Layout di `app/views/_layouts/` dengan nama `index.blade.php` (buat folder `_layouts` manual).
   		
   		<a href="https://raw.github.com/novay/laravel-dropdown-dependency/master/app/views/_layouts/index.blade.php" target="_blank">SEPERTI INI XD</a>

   - Unduh [jQuery](https://raw.github.com/novay/laravel-dropdown-dependency/master/public/assets/js/jquery.js), lalu letakkan di `public/assets/js/` atau dimanapun Anda mau.

   - Buat halaman target di `app/views/` juga dengan nama `index.blade.php`.
   		```
   		@extends('_layouts.index')
 
		@section('content')
		    {{ Form::open(array('url' => '#')) }}

		    <h2>Demo Dropdown Dependency</h2>
		    <table>
		        <tr>
		            <td> {{ Form::label('provinsi', 'Provinsi') }} </td>
		            <td> : </td> 
		            <td> {{ Form::select('provinsi', $daftar, null, array('id' => 'sProvinsi', 'style'=>'width: 200px'))  }} </td>
		        </tr>
		        <tr>
		            <td> {{ Form::label('kabupaten', 'Kabupaten/Kota') }} </td>
		            <td> : </td> 
		            <td> {{ Form::select('kabupaten', array(), null, array('id' => 'sKabupaten', 'style'=>'width: 200px'))  }} </td>
		        </tr>
		        <tr>
		            <td> {{ Form::label('kecamatan', 'Kecamatan') }} </td>
		            <td> : </td>
		            <td> {{ Form::select('kecamatan', array(), null, array('id' => 'sKecamatan', 'style'=>'width: 200px'))  }} </td>
		        </tr>
		        <tr>
		            <td> {{ Form::label('kelurahan', 'Kelurahan/Desa') }} </td>
		            <td> : </td>
		            <td> {{ Form::select('kelurahan', array(), null, array('id' => 'sKelurahan', 'style'=>'width: 200px'))  }} </td>
		        </tr>
		    </table>

		    {{ Form::close() }}
		@stop
		 
		@section('script')
		    $('#sProvinsi').on('change', function(){
		        $.post('{{ URL::to('/dropdown') }}', {type: 'kabupaten', id: $('#sProvinsi').val()}, function(e){
		            $('#sKabupaten').html(e);
		        });
		        $('#sKecamatan').html('');
		        $('#sKelurahan').html('');
		    });
		    $('#sKabupaten').on('change', function(){
		        $.post('{{ URL::to('/dropdown') }}', {type: 'kecamatan', id: $('#sKabupaten').val()}, function(e){
		            $('#sKecamatan').html(e);
		        });
		        $('#sKelurahan').html('');
		    });
		    $('#sKecamatan').on('change', function(){
		        $.post('{{ URL::to('/dropdown') }}', {type: 'kelurahan', id: $('#sKecamatan').val()}, function(e){
		            $('#sKelurahan').html(e);
		        });
		    });
		@stop
   		```

 - ####Selesai		
   - Kembali ke **Terminal** lalu jalankan perintah `php artisan serv`.
   - Buka Browser kesayangan Anda, dan akses `localhost:8000`.

### Credit
 - Laravel 4.1
 - jQuery v1.8.2
 - Dida Nurwanda

#### Maaf Kalo Kurang Jelas, **Just Be Initiative**. Regard [Novay](www.novay.web.id).