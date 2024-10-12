<?php
     class Product_Turunan extends Product
     {
          // Function
          public function info()
          {
               echo "Name  : $this->name  " . PHP_EOL;
               echo "Price : $this->price " . PHP_EOL;
          }
     }
?>