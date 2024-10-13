<?php

     // Class
     class Buah {
          // Properti
          public $nama;
          public $warna;
     }

     // Class Pisang pewarisan dari class Buah
     class Pisang extends Buah {
          // Tidak mendeklarasi properti, karena bisa memakai properti class Buah

          // Function deskripsi (fungsi yg diakses oleh objek untuk menampilkan deskripsi objek)
          function deskripsi_buah() {
               echo "Nama buah $this->nama dan warna buah $this->warna";
               // $this->nama/buah untuk memanggil objek nama/buah di bawah
          }
     }
     // Objek
          // Membuat Objek Baru
          $objek_pisang = new Pisang();
          $objek_pisang -> nama  = "Pisang Raja";
          $objek_pisang -> warna = "Kuning";
          // Output
          $objek_pisang -> deskripsi_buah();
     
          // Membuat Objek Baru
          $objek_buah   = new Buah();
          $objek_buah   -> nama  = "Jambu";
          $objek_buah   -> warna = "Hijau";
          // Output
          $objek_buah   -> deskripsi_buah(); 
          // Tidak bisa mengakses function dari class turunannya (class Pisang)

?>