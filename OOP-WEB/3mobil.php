<?php

     // Class Mobil
     class Mobil_3
     {
          // Properti
          var string  $nama;
          var ?string $merk   = null;
          var int     $tahun;

          // Constructor
          public function __construct(string $nama, ?string $merk)
          {
               $this -> nama  = $nama;
               $this -> merk  = $merk;
          }

          public function info_mobil()
          {
               return "$this->nama, $this->merk, $this->tahun;";
          }
     }

?>