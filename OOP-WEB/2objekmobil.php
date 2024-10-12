<?php
     // Include/Terhubung dengan class Mobil (2mobil.php)
     require_once "2mobil.php";

     // Inisialisasi variabel (Objek) mobilsatu
     $mobilsatu    = new Mobil();

     // Menambahkan properti pada objek mobilsatu
     // $mobilsatu -> nama  = null;            // Error karena pada deklarasi tidak dibuat null
     $mobilsatu -> nama  = "Avanza";
     $mobilsatu -> merk;                    // Tidak perlu isi data karena sudah terisi pada saat deklarasi (Default Properties Value)
     $mobilsatu -> warna = null;            // Valid, karena sudah dideklarasikan boleh null
     $mobilsatu -> tahun = 2019;
     $mobilsatu -> kecepatan_max  = 1300;

     // Menampilkan informasi Objek mobilsatu
     var_dump($mobilsatu) ; 
     echo PHP_EOL . PHP_EOL;
     //
     echo "Nama     : $mobilsatu->nama"  . PHP_EOL;
     echo "Merk     : $mobilsatu->merk"  . PHP_EOL;
     echo "Warna    : $mobilsatu->warna" . PHP_EOL;
     echo "Tahun    : $mobilsatu->tahun" . PHP_EOL;
     echo "Kecepatan Maksimal : $mobilsatu->kecepatan_max" . PHP_EOL;

     // Mengakses function/method tambah_kecepatan
     $mobilsatu -> tambah_kecepatan();

     echo PHP_EOL;

     // Mengakses function/method info_mobil
     $mobilsatu -> info_mobil(null);        // dengan parameter null, maka yg ditampilkan adalah properti dari objek Mobil

     $mobilsatu -> info_mobil("Xenia");     // dengan parameter nilai, maka yg ditampilkan adalah properti dari function yg diakses pada saat ini
     echo PHP_EOL;
     // Memanggil dan menampilkan Constant
     echo Mobil::AUTOR;
?>