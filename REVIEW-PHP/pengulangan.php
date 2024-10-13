<?php

// FOR

     // for (deklarasi awal; syarat pengkondisian ; format perulagan ) { 
     //      # code...
     //      statement kode yang akan dieksekusi
     // }

     // 1 - 10
     for ($i=0; $i < 10 ; $i++) { 
          echo $i + 1 . ". Selamat Datang di Pekalongan <br>";
     }
     
     echo "<br>";

     // //10 - 1
     // for ($i=10; $i > 0 ; $i--) { 
     //      echo $i  . ". Selamat Datang di Pekalongan <br>";
     // }

     $kota = array("Pekalongan", "Batang", "Pemalang");
     for ($i=0; $i < count($kota) ; $i++) { 
          echo $i + 1 . ". Selamat Datang di Kota " . $kota[$i] . "<br>";
     }

     echo "<br>";

// FOREACH

     $no = 1;
     foreach ($kota as $kota_detail) {
          echo $no++ . ". Kota $kota_detail <br>";
     }

     echo "<br>";

     // + percabangan/komparasi
     $no = 1;
     foreach ($kota as $kota_detail) {
          if ($kota_detail == "Pemalang") {
               echo "---";
          } else {
               echo $no++ . ". Kota $kota_detail <br>";
          }
     }

?>