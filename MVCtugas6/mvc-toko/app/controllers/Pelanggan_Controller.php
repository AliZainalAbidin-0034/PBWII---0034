<?php
require_once 'app/models/Pelanggan.php';

     class PelangganController
     {
          private $pelangganModel;

          public function __construct($dbConnection)
          {
               $this -> pelangganModel = new Pelanggan($dbConnection);
          }

          // Function menampilkan semua data kode
          public function showAllPelanggan()
          {
               $pelanggan = $this -> pelangganModel -> getAllPelanggan();
               require_once 'app/views/Pelanggan_View.php';
          }

          // Function menampilkan data pelanggan berdasarkan kode
          public function show_id($id)
          {
               // Mengambil data dari model
               $pelanggan = $this -> pelangganModel -> getPelangganById($id);

               // Membuat view dan meneruskan data pengguna
               require_once 'app/views/View.php';
          }

          // Function tambah data pelanggan
          public function add()
          {
               // Jika data dari Form tambah sudah di isi
               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Mengambil data dari form
                    $id     = $_POST['id'];
                    $nama   = $_POST['nama'];
                    $alamat = $_POST['alamat'];
            
                    // Memanggil metode insert pelanggan dari model
                    $this -> pelangganModel -> insert($id, $nama, $alamat);
                    header("Location: index.php?pindah=pelanggan");
               }
               // Memuat file Pelanggan_Tambah.php
               require_once 'app/views/Pelanggan_Tambah.php';
          }

          // Function edit data pelanggan
          public function edit($id)
          {
               // Mengambil data pelanggan tergantung id
               $pelanggan = $this -> pelangganModel -> getPelangganByid($id);

               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Mengambil data dari form
                    $nama   = $_POST['nama'];
                    $alamat = $_POST['alamat'];
            
                    // Memanggil metode update pelanggan dari model
                    $this -> pelangganModel -> update($id, $nama, $alamat);
                    header("Location: index.php?pindah=pelanggan");
               }
               // Memuat file FormEditUser.php
               require_once 'app/views/Pelanggan_Edit.php';
          }

          // Funtion delete pelanggan
          public function delete($id)
          {
               $this -> pelangganModel -> delete($id);
               header('location: index.php?pindah=pelanggan');
          }

     }

?>