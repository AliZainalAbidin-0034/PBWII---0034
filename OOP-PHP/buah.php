<?php
     class Buah { // Nama Class
          public $nama;
          public $warna;
          // public -> variable bisa di akses untuk umum
     }
     // Objek Pisang
     $pisang = new Buah();
     $pisang -> nama  = "Pisang Hijau";
     $pisang -> warna = "Hijau";

     // Objek Mangga
     $mangga = new Buah();
     $mangga -> nama  = "Mangga Harumanis";
     $mangga -> warna = "Hijau";

     // Output
     echo $pisang -> nama . PHP_EOL;
     echo $pisang -> warna;
     
     echo $mangga -> nama . PHP_EOL;
     echo $mangga -> warna;
?>