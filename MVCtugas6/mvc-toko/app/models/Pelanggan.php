<?php

     // Class Pelanggan
     class pelanggan {

          private $db;

          public function __construct($dbConnection)
          {
               $this -> db = $dbConnection;
          }

          // Function tampil data
          public function getAllPelanggan()
          {
               $stmt = $this -> db -> prepare("SELECT * FROM pelanggan");
               $stmt -> execute();
               return $stmt -> fetchAll(PDO::FETCH_ASSOC);
          }

          // Function menampilkan data berdasarkan id pelanggan
          public function getPelangganById($id)
          {
               $stmt = $this -> db -> prepare("SELECT * FROM pelanggan WHERE id = :id");
               $stmt -> bindParam(':id', $id);
               $stmt -> execute();
               return $stmt -> fetch(PDO::FETCH_ASSOC);
          }

          // Function insert pelanggan
          public function insert($id, $nama, $alamat)
          {
               $stmt = $this -> db -> prepare("INSERT INTO pelanggan VALUES(:id,:nama,:alamat)");
               $stmt -> bindParam(':id', $id);
               $stmt -> bindParam(':nama', $nama);
               $stmt -> bindParam(':alamat', $alamat);
               $stmt -> execute();
          }

          // Function update pelanggan
          public function update($id, $nama, $alamat)
          {
               $stmt = $this -> db -> prepare("UPDATE pelanggan SET nama = :nama, alamat = :alamat WHERE id = :id");
               $stmt -> bindParam(':id', $id);
               $stmt -> bindParam(':nama', $nama);
               $stmt -> bindParam(':alamat', $alamat);
               $stmt -> execute();
          }

          // Function hapus pelanggan
          public function delete($id)
          {
               $stmt = $this -> db -> prepare("DELETE FROM pelanggan WHERE id = :id");
               $stmt -> bindParam(':id', $id);
               $stmt -> execute();
               return $stmt -> fetchAll(PDO::FETCH_ASSOC);
          }

     }

?>