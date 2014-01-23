<?php

class Kelurahan extends Eloquent {
     
    # Tembak isi database berdasarkan tabel  
    protected $table = 'kelurahan_desa';
    # Disable fungsi timestamps
    public $timestamps = false;
     
}