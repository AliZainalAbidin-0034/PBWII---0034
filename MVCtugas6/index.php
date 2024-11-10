<?php
     require_once 'config/database.php';
     require_once 'app/controllers/Barang_Controller.php';
     require_once 'app/controllers/Pelanggan_Controller.php';
     require_once 'app/controllers/Transaksi_Controller.php';

     // Koneksi ke database
     $dbConnection = getDBConnection();

     // Fungsi untuk mengambil parameter URL dengan default value
     function getParam($key, $default = '') {
          return isset($_GET[$key]) ? $_GET[$key] : $default;
     }

     // Membuat instance Controller
     $controller_brg = new BarangController($dbConnection);
     $controller_plg = new PelangganController($dbConnection);
     $controller_trs = new TransaksiController($dbConnection);

     // Mendapatkan parameter dari URL
     $pindah     = getParam('pindah');
     $action_brg = getParam('action_brg');
     $action_plg = getParam('action_plg');
     $action_trs = getParam('action_trs');

     // Menangani aksi barang
     if ($action_brg == 'tambah') {
          $controller_brg->add();
          exit();  // Hentikan eksekusi untuk mencegah tampilan ganda
     } else if ($action_brg == 'edit') {
          $kode = getParam('kode');
          $controller_brg->edit($kode);
          exit();
     } else if ($action_brg == 'hapus') {
          $kode = getParam('kode');
          $controller_brg->delete($kode);
          exit();
     }

     // Menangani aksi pelanggan
     if ($action_plg == 'tambah') {
          $controller_plg->add();
          exit();
     } else if ($action_plg == 'edit') {
          $id = getParam('id');
          $controller_plg->edit($id);
          exit();
     } else if ($action_plg == 'hapus') {
          $id = getParam('id');
          $controller_plg->delete($id);
          exit();
     }

     // Menangani aksi transaksi
     if ($action_trs == 'tambah') {
          $controller_trs->add();
          exit();
     } else if ($action_trs == 'edit') {
          $id = getParam('id');
          $controller_trs->edit($id);
          exit();
     } else if ($action_trs == 'hapus') {
          $id = getParam('id');
          $controller_trs->delete($id);
          exit();
     }

     // Menentukan halaman utama berdasarkan parameter 'pindah'
     if ($pindah == 'barang') {
          $controller_brg->showAllBarang();
     } else if ($pindah == 'pelanggan') {
          $controller_plg->showAllPelanggan();
     } else if ($pindah == 'transaksi') {
          $controller_trs->showAllTransaksi();
     } else {
          require_once 'app/views/Home_View.php';
     }
?>