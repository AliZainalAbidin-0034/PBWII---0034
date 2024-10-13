<?php
     class Buah {
          // Properti/var
          protected $nama;
          // public      -> bisa di akses untuk umum
          // protected   -> hanya bisa diakses dalam class dan turunan nya
          // privat      -> hanya bisa diakses dalam class saja

          // Function
          function ganti_nama($nama_buah) {
               $this -> nama = $nama_buah;
          }

          function tampil_nama() {
               echo $this->nama;
          }
     }

     class Jambu extends Buah {
          function tampil_data() {
               echo $this -> nama;
          }
     }

     $apel = new Buah();
     // Menangkses var nama public
     // $apel -> nama = "Apel Malang";
     // echo $apel->nama;

     // Menangkses var nama protected dengan function
     // $apel -> ganti_nama("Apel Malang 1");
     // $apel -> tampil_nama();

     // Menangkses var nama protected dengan class turunan dan function
     $jambu = new Jambu;
     $jambu -> nama = "jambu Mandarin";
     $jambu -> tampil_data(); 

?>