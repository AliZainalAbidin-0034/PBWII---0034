<?php
     $a = 4;
     $b = 8;
     echo "$a + $b = " . $a + $b ;
     echo "<br>";

     function tambah_bilangan($var1, $var2){
          return $var1 + $var2;
     }

     echo tambah_bilangan(5, 6) ;
     echo "<br>";
     echo tambah_bilangan(123, 42);
     echo "<br>";
     echo tambah_bilangan($a, $b);

?>