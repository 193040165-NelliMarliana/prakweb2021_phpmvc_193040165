<?php

class About { 
    public function index($nama = 'Nelli', $pekerjaan = 'Mahasiswa') {
        echo "Halo, nama saya $nama, saya adalah $pekerjaan UNPAS";
    }  

    public function page() {
        echo 'About/page';
    }  
}