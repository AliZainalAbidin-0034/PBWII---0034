<?php

     // Class Barang
     class barang {

          private $db;

          public function __construct($dbConnection)
          {
               $this -> db = $dbConnection;
          }

          // Function tampil data
          public function getAllBarang()
          {
               $stmt = $this -> db -> prepare("SELECT * FROM barang");
               $stmt -> execute();
               return $stmt -> fetchAll(PDO::FETCH_ASSOC);
          }

          // Function menampilkan data berdasarkan kode barang
          public function getBarangByKode($kode)
          {
               $stmt = $this -> db -> prepare("SELECT * FROM barang WHERE kode = :kode");
               $stmt -> bindParam(':kode', $kode);
               $stmt -> execute();
               return $stmt -> fetch(PDO::FETCH_ASSOC);
          }

          // Function tambah barang
          public function insert($kode, $nama, $harga, $stok)
          {
               $stmt = $this -> db -> prepare("INSERT INTO barang VALUES(:kode, :nama, :harga, :stok)");
               $stmt -> bindParam(':kode', $kode);
               $stmt -> bindParam(':nama', $nama);
               $stmt -> bindParam(':harga', $harga);
               $stmt -> bindParam(':stok', $stok);
               $stmt -> execute();
          }

          // Function update barang
          public function update($kode, $nama, $harga, $stok)
          {
               $stmt = $this -> db -> prepare("UPDATE barang SET nama = :nama, harga = :harga, stok = :stok WHERE kode = :kode");
               $stmt -> bindParam(':kode', $kode);
               $stmt -> bindParam(':nama', $nama);
               $stmt -> bindParam(':harga', $harga);
               $stmt -> bindParam(':stok', $stok);
               $stmt -> execute();
          }

          // Function hapus barang
          public function delete($kode)
          {
               $stmt = $this -> db -> prepare("DELETE FROM barang WHERE kode = :kode");
               $stmt -> bindParam(':kode', $kode);
               $stmt -> execute();
          }

     }

?>