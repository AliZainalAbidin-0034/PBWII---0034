<?php

     $warna_lampu = "merah";
     
     echo "Warna Lampu : " . $warna_lampu; 
     switch ($warna_lampu) {
          case 'hijau':
               echo "<br> Jalan";
               break;

          case 'kuning':
               echo "<br> Hati - hati";
               break;

          case 'merah':
               echo "<br> Berhenti";
               break;
          
          default:
               echo "<br> Lampu lalu lintas rusak";
               break;
     }

?>