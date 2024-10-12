<?php
     class Category
     {
          // Properti
          private string $name;
          private bool   $expensive;

          // Function
          public function getName() : string 
          {
               return $this -> name;
          }

          public function setName(string $name) : void
          {
               $this -> name = $name;
          }

          public function isExpensive() : bool
          {
               return $this -> expensive;
          }

          public function setExpensive(bool $expensive) : void
          {
               $this -> expensive = $expensive;
          }
     }

?>