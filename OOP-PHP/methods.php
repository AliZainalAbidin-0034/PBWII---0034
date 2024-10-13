<?php

     class Buah {
          // properti
          public $nama;
          public $warna;

          // Function/Method
          function deskripsi_buah() {
               echo "Nama Buah $this->nama memiliki warna $this->warna";
               // $this->nama/buah untuk memanggil objek nama/buah di bawah
               // pada $this->nama/buah pada echo String tidak boleh terdapat spasi ($this -> nama/buah) 
          }
     }
     
     // Membuat Objek Mangga
     $mangga = new Buah();
     $mangga -> nama  = "Mangga Harumanis";
     $mangga -> warna = "Hijau";

     // Mengakses Function 
     echo $mangga -> deskripsi_buah();

?>