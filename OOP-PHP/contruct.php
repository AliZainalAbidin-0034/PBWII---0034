<?php
     // Class
     class Buah1 {
          // Properti
          public $nama;
          public $warna;
          // Function Contruct (fungsi yg dipanggil ketika membuat objek baru)
          function __construct($a,$b)
          {
               $this -> nama  = $a;
               $this -> warna = $b;
          }
          // Function deskripsi (fungsi yg diakses oleh objek untuk menampilkan deskripsi objek)
          function deskripsi_buah() {
               echo "Nama Buah $this->nama memiliki warna $this->warna";
               // $this->nama/buah untuk memanggil objek nama/buah di bawah
          }
     }
     // Objek
     // Membuat Objek Baru
     $mangga = new Buah1("Mangga Harumanis", "Hijau");
     // Output
     // Mengakses Function 
     echo $mangga -> deskripsi_buah();
?>