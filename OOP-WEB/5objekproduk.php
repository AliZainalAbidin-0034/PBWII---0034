<?php

     // Include/Terhubung
     require_once "5produk.php";
     require_once "5productturunan.php";

     // Membuat Objek baru
     $product  = new Product("Apple", 20000);

     // Menampilkan info name dan price
     // echo $product -> name();      // Error karena var name bersifat private
     // echo $product -> price();     // Error karena var price bersifat private

     // Altenatif, menggunakan function getName dan getPrice
     echo $product -> getName(); 
     echo PHP_EOL;
     echo $product -> getPrice();
     echo PHP_EOL; 

     // Membuat Objek baru
     $product2 = new Product_Turunan("Nanas", 30000);
     echo PHP_EOL;
     $product2 -> info();
?>