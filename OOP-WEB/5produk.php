<?php
// Visibility / Access Modifier
     class Product
     {
          // Deklarasi Variabel
          // private string $name;
          // private int    $price;
          protected string $name;
          protected int    $price;
          // public      -> dpt diakses untuk umum
          // protected   -> hanya bisa diakses pada class nya dan class yg diwariskan
          // privat      -> hanya bisa diakses oleh class nya saja
          // Deklarasi Konstruktor
          public function __construct(string $name, int $price)
          {
               $this -> name  = $name;
               $this -> price = $price;
          }
          // Agar pada file 5product.php baris 10 dan 11 tidak error karena tidak bisa mengakses var name dan price karena bersifat private
          public function getName() : string
          {
               return $this -> name;
          }
          public function getPrice() : int
          {
               return $this -> price;
          }
     }

?>