<?php

     $kota = array("Pekalongan","Batang","Pemalang");

     // Cek jenis variable
     // var_dump($kota);
     echo "Urutan kota berdasarkan abjad : $kota[1], $kota[0], $kota[2]";
     echo "<br>";

     $umrKota = array("Pekalongan" => 2500000, "Batang" => 2400000, "Pemalang" => 2000000);
     echo "Kota $kota[1]" . " UMR nya adalah " .$umrKota["Batang"];
?>