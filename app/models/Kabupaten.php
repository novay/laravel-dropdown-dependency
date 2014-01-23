<?php

class Kabupaten extends Eloquent {
   
   # Tembak isi database berdasarkan tabel  
    protected $table = 'kabupaten_kota';
    # Disable fungsi timestamps
    public $timestamps = false;
     
}