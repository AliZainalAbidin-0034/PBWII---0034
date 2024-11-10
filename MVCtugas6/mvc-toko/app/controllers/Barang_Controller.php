<?php
require_once 'app/models/Barang.php';

     class BarangController
     {
          private $barangModel;

          public function __construct($dbConnection)
          {
               $this -> barangModel = new Barang($dbConnection);
          }

          // Function menampilkan semua data kode
          public function showAllBarang()
          {
               $barang = $this -> barangModel -> getAllBarang();
               require_once 'app/views/Barang_View.php';
          }

          // Function menampilkan data barang berdasarkan kode
          public function show($kode)
          {
               // Mengambil data dari model
               $barang = $this -> barangModel -> getBarangByKode($kode);

               // Membuat view dan meneruskan data pengguna
               require_once 'app/views/View.php';
          }

          // Function tambah barang
          public function add()
          {
               // Jika data dari Form tambah sudah di isi
               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Mengambil data dari form
                    $kode  = $_POST['kode'];
                    $nama  = $_POST['nama'];
                    $harga = $_POST['harga'];
                    $stok  = $_POST['stok'];
            
                    // Memanggil metode update barang dari model
                    $this -> barangModel -> insert($kode, $nama, $harga, $stok);
                    header("Location: index.php?pindah=barang");
               }
               // Memuat file Barang_Tambah.php
               require_once 'app/views/Barang_Tambah.php';
          }

          // Function edit barang
          public function edit($kode)
          {
               // Mengambil data barang tergantung kode
               $barang = $this -> barangModel -> getBarangByKode($kode);

               if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    // Mengambil data dari form
                    $nama  = $_POST['nama'];
                    $harga = $_POST['harga'];
                    $stok  = $_POST['stok'];
            
                    // Memanggil metode update barang dari model
                    $this -> barangModel -> update($kode, $nama, $harga, $stok);
                    header("Location: index.php?pindah=barang");
               }
               // Memuat file FormEditUser.php
               require_once 'app/views/Barang_Edit.php';
          }

          // Funtion delete barang
          public function delete($kode)
          {
               $this -> barangModel -> delete($kode);
               header('location: index.php?pindah=barang');
          }

     }

?>