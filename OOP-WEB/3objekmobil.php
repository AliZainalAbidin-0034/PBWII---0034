<?php

     // Include/Terhubung dengan class Mobil (3mobil.php)
     require_once "3mobil.php";

     // Inisialisasi variabel (Objek) mobil_satu
     $mobil_satu    = new Mobil_3("Avanza", "Toyota");
     $mobil_satu   -> tahun   = 2019;

     $mobil_dua     = new Mobil_3("Brio", null);
     $mobil_dua    -> tahun   = 2020;

     // Output
     echo $mobil_satu -> info_mobil();
     echo PHP_EOL;
     echo $mobil_dua -> info_mobil();

?>