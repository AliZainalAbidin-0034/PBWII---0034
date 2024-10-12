<?php
// Inheritance (Pewarisan)

     // Include/Terhubung dengan file
     require_once "4mobil.php";
     require_once "4mobilsport.php";

     // Objek dari class Mobil_4
     $avanza   = new Mobil_4("Avanza", "Toyota", 2020);
     // Menampilkan function info_mobil
     echo $avanza -> info_mobil();

     echo PHP_EOL;

     // Objek dari class mobil_sport
     $supra    = new Mobil_Sport("Supra","Toyota", 2021);
     // Menampilkan function
     echo $supra -> info_mobil();
     echo $supra -> jalankan_turbo();

?>