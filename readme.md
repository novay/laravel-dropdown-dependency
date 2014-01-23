# Laravel Dropdown Dependency

### Demo
<img src="https://raw.github.com/novay/novay-gallery/master/My%20Screenshot/Demo/Demo%20Dropdown%20Dependency.gif" border="1px"/>

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
 - #### Download [Laravel](https://github.com/laravel/laravel/archive/master.zip)




php artisan migrate:make buat_tabel_provinsi
php artisan migrate:make buat_tabel_kabupaten_kota
php artisan migrate:make buat_tabel_kecamatan
php artisan migrate:make buat_tabel_kelurahan_desa

isi data "app/database/migrations/*"

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