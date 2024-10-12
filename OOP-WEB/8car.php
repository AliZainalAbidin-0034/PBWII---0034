<?php
// Interface
// Interface Inheritance

     interface HasBrand
     {
          function getBrand() : string;
     }

     interface IsMaintenance
     {
          function isMaintenance() : bool;
     }

     // Menyatakan bahwa care merupakan turunan dari class Hasbrand, dan menambahkan function getBrand() 
     interface Car extends HasBrand
     {
          // Interitance tidak boleh memiliki properti
          function drive()   : void;
          function getTire() : int;
     }

     // Implementasi interface pada class child nya
     // Menambakan parent isMaintenance dan function isMantenance() 
     class Avanza implements Car, isMaintenance
     {
          public function drive()   : void
          {
               echo "Drive Avanza" . PHP_EOL;
          }

          public function getTire() : int
          {
               return 4;
          }

          public function getBrand() : string
          {
               return "Toyota";
          }

          public function isMaintenance() : bool
          {
               return false;
          }
          
     }

?>