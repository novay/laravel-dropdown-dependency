## Dropdown Dependency menggunakan Laravel

download github.com/laravel/laravel

composer install

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