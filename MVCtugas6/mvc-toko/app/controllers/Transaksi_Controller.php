<?php
require_once 'app/models/Transaksi.php';

     class TransaksiController
     {
          private $transaksiModel;

          public function __construct($dbConnection)
          {
               $this -> transaksiModel = new Transaksi($dbConnection);
          }

          // Function menampilkan semua data kode
          public function showAllTransaksi()
          {
               $transaksi = $this -> transaksiModel -> getAllTransaksi();
               require_once 'app/views/Transaksi_View.php';
          }

          // Function menampilkan data pelanggan berdasarkan kode
          public function show_id($id)
          {
               // Mengambil data dari model
               $transaksi = $this -> transaksiModel -> getTransaksiById($id);

               // Membuat view dan meneruskan data pengguna
               require_once 'app/views/View.php';
          }

          // Function tambah data pelanggan
          public function add()
          {
               // Jika data dari Form tambah sudah di isi
               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Mengambil data dari form
                    $kode_b   = $_POST['kode_barang'];
                    $id_p     = $_POST['id_pelanggan'];
                    $jumlah   = $_POST['jumlah'];
            
                    // Memanggil metode insert pelanggan dari model
                    $this -> transaksiModel -> insert($kode_b, $id_p, $jumlah);
                    header("Location: index.php?pindah=transaksi");
               }
               // Memuat file Pelanggan_Tambah.php
               require_once 'app/views/Transaksi_Tambah.php';
          }

          // Function edit data pelanggan
          public function edit($id)
          {
               // Mengambil data pelanggan tergantung id
               $transaksi = $this -> transaksiModel -> getTransaksiById($id);

               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Mengambil data dari form
                    $kode_b   = $_POST['kode_barang'];
                    $id_p     = $_POST['id_pelanggan'];
                    $jumlah   = $_POST['jumlah'];
            
                    // Memanggil metode update pelanggan dari model
                    $this -> transaksiModel -> update($id, $kode_b, $id_p, $jumlah);
                    header("Location: index.php?pindah=transaksi");
               }
               // Memuat file FormEditUser.php
               require_once 'app/views/Transaksi_Edit.php';
          }

          // Funtion delete pelanggan
          public function delete($id)
          {
               $this -> transaksiModel -> delete($id);
               header('location: index.php?pindah=transaksi');
          }

     }

?>