<?php

     class Mobil_4
     {
          var string $nama;
          var string $brand;
          var int    $tahun;

          // Constructor
          function __construct(string $nama, string $brand, int $tahun)
          {
               $this -> nama  = $nama;
               $this -> brand = $brand;
               $this -> tahun = $tahun;
          }

          // Function
          function info_mobil()
          {
               return "Nama mobil : $this->nama " . PHP_EOL . "Brand : $this->brand " . PHP_EOL . "Tahun : $this->tahun" . PHP_EOL . PHP_EOL;
          }
     }
