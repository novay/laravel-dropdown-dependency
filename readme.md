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
 - Buka Command Prompt atau Terminal lalu tuju ke direktori proyek

 - ####Generate Key
   `php artisan key:generate`

 - ####Migrations
   - Eksekusi Perintah berikut untuk membuat migration tabel :

     `php artisan migrate:make buat_tabel_provinsi`
     `php artisan migrate:make buat_tabel_kabupaten_kota`
     `php artisan migrate:make buat_tabel_kecamatan`
     `php artisan migrate:make buat_tabel_kelurahan_desa`

   - Isi masing-masing file tabel yang dibuat di `app/database/migrations/*`

     - Untuk *Provinsi*
     
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

     - Untuk *Kabupaten*
     - Untuk *Kecamatan*
     - Untuk *Kelurahan*



php artisan migrate

isi data "app/database/seeds/*"

php artisan db:seed

buat model tiap tabel

buat controller

buat view

edit route

php artisan serv

localhost:8000

### Credit
 - Laravel 4.1
 - jQuery v1.8.2
 - Dida Nurwanda



 ```
public function buildMenu($menu, $parentid = 0) 
{ 
  $result = null;
  foreach ($menu as $item) 
    if ($item->parent_id == $parentid) { 
      $result .= "<li class='dd-item nested-list-item' data-order='{$item->order}' data-id='{$item->id}'>
      <div class='dd-handle nested-list-handle'>
        <span class='glyphicon glyphicon-move'></span>
      </div>
      <div class='nested-list-content'>{$item->label}
        <div class='pull-right'>
          <a href='".url("admin/menu/edit/{$item->id}")."'>Edit</a> |
          <a href='#' class='delete_toggle' rel='{$item->id}'>Delete</a>
        </div>
      </div>".$this->buildMenu($menu, $item->id) . "</li>"; 
    } 
  return $result ?  "\n<ol class=\"dd-list\">\n$result</ol>\n" : null; 
} 

```