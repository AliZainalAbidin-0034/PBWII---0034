<?php

     // Class Transaksi
     class transaksi {

          private $db;

          public function __construct($dbConnection)
          {
               $this -> db = $dbConnection;
          }

          // Function tampil data
          public function getAllTransaksi()
          {
               $stmt = $this -> db -> prepare("SELECT * FROM transaksi");
               $stmt -> execute();
               return $stmt -> fetchAll(PDO::FETCH_ASSOC);
          }

          // Function menampilkan data berdasarkan id Transaksi
          public function getTransaksiById($id)
          {
               $stmt = $this -> db -> prepare("SELECT * FROM transaksi WHERE id_transaksi = :id");
               $stmt -> bindParam(':id', $id);
               $stmt -> execute();
               return $stmt -> fetch(PDO::FETCH_ASSOC);
          }

          // Function insert transaksi
          public function insert($kode_b, $id_p, $jumlah)
          {
               $stmt_harga = $this->db->prepare("SELECT harga FROM barang WHERE kode = :kode");
               $stmt_harga->bindParam(':kode', $kode_b);
               $stmt_harga->execute();
               $harga = $stmt_harga->fetchColumn();

               if ($harga === false) {
                    throw new Exception("Barang dengan kode tersebut tidak ditemukan.");
               }

               $bayar = $jumlah * $harga;

               try {
            
                    $this->db->beginTransaction();
        
                    // Insert data transaksi
                    $stmt = $this->db->prepare("INSERT INTO transaksi VALUES(NULL, :kode, :id_p, :jumlah, :bayar, NOW())");
                    $stmt->bindParam(':kode', $kode_b);
                    $stmt->bindParam(':id_p', $id_p);
                    $stmt->bindParam(':jumlah', $jumlah);
                    $stmt->bindParam(':bayar', $bayar);
                    $stmt->execute();

                    // Kurangi stok barang
                    $this->kurangstok($kode_b, $jumlah);
                    $this->db->commit();
               } catch (Exception $e) {
                    $this->db->rollBack();
                    throw $e;
               }
               
          }

          // Function Kurang Stok
          public function kurangstok($kode_b, $jumlah) {
               $stmt = $this -> db -> prepare("UPDATE barang SET stok = stok - :jumlah WHERE kode = :kode");
               $stmt -> bindParam(':kode', $kode_b);
               $stmt -> bindParam(':jumlah', $jumlah);
               $stmt -> execute();
          }

          // Function update transaksi
          public function update($id, $kode_b, $id_p, $jumlah)
          {
               $stmt = $this -> db -> prepare("UPDATE transaksi SET kode_barang = :kode, id_pelanggan = :id_p, jumlah = :jumlah, bayar = jumlah * (SELECT harga FROM barang WHERE barang.kode = :kode), tanggal = NOW() WHERE id_transaksi = :id");
               $stmt -> bindParam(':id', $id);
               $stmt -> bindParam(':kode', $kode_b);
               $stmt -> bindParam(':id_p', $id_p);
               $stmt -> bindParam(':jumlah', $jumlah);
               $stmt -> execute();
          }

          // Function hapus pelanggan
          public function delete($id)
          {
               $stmt = $this -> db -> prepare("DELETE FROM transaksi WHERE id_transaksi = :id");
               $stmt -> bindParam(':id', $id);
               $stmt -> execute();
               return $stmt -> fetchAll(PDO::FETCH_ASSOC);
          }

     }

?>