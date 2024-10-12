<?php
// Inheritance (Pewarisan)
     // Mewarisi properti yg ada pada class Mobil_4 di file 4mobil.php
     class Mobil_Sport extends Mobil_4
     {
          public $turbo  = false;

          // Function
          function jalankan_turbo()
          {
               $this -> turbo = true;
               return "Jalankan Turbo!";
          }

          // Function Overriding
          function info_mobil()
          {
               return "Nama mobil : $this->nama " . PHP_EOL . "Brand : $this->brand " . PHP_EOL . "Tahun : $this->tahun " . PHP_EOL . "Turbo : " . ($this->turbo ? "true" : "false") . PHP_EOL;
          }
     }

?>