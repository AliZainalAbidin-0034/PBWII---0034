<?php
     class Mobil
     {
          //Constant
          const AUTOR = "Ali Zainal Abidin";

          // Properties
          var  string $nama;
          var  string $merk    = "Toyota";
          var ?string $warna   = null;
          var  int    $tahun;
          var  int    $kecepatan_max;

          // Membuat Function tambah_kecepatan
          function tambah_kecepatan()
          {
               echo "Kecepatan Bertambah!";    
          }

          // Membuat Function info_mobil
          function info_mobil(?string $nama)
          {
               // Kondisi jika parameter kosong maka akan ditampilkan properties dari objek
               if (is_null($nama)) {
                    echo "Nama mobil adalah {$this->nama}" . PHP_EOL;
               } else {
                    echo "Mobil anda adalah $nama" . PHP_EOL;
               }
          }
     }

?>