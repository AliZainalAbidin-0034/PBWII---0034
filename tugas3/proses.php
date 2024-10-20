<?php
    include 'database.php';
    $db = new Database();

    $aksi = $_GET['aksi'];

    if ($aksi == 'tambah') {
        
        $namaFile = $_FILES['foto']['name'];
        $tmpFile = $_FILES['foto']['tmp_name'];
        $ekstensiFile = explode('.', $namaFile);
        $ekstensiFile = strtolower(end($ekstensiFile));

        $gambar = uniqid() . "." . $ekstensiFile;
        move_uploaded_file($tmpFile, 'foto/' . $gambar);

        $db->tambahData($_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['jenis_kelamin'],$gambar);
        header("location:index.php");
    } else if ($aksi == 'update') {
        // Ambil gambar lama dari form (hidden input)
        $gambarLama = $_POST['foto_lama'];

        // Cek apakah ada gambar baru yang diunggah
        if ($_FILES["foto"]["error"] === 4) {
            // Jika tidak ada gambar baru, tetap gunakan gambar lama
            $gambar = $gambarLama;
        } else {
            // Jika ada gambar baru, hapus gambar lama
            $namaFile = $_FILES['foto']['name'];
            $tmpFile = $_FILES['foto']['tmp_name'];
            $ekstensiFile = explode('.', $namaFile);
            $ekstensiFile = strtolower(end($ekstensiFile));
            $gambar = uniqid() . "." . $ekstensiFile;

            // Hapus gambar lama jika file lama ada
            if (file_exists('foto/' . $gambarLama)) {
                unlink('foto/' . $gambarLama);
            }

            // Pindahkan file gambar baru
            move_uploaded_file($tmpFile, 'foto/' . $gambar);
        }

        $db->updateData($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['jenis_kelamin'],$gambar);
        header("location: index.php");
    } else if ($aksi == 'hapus') {
        $id = $_GET['id'];

        $ambilData = mysqli_query($db->connect, "SELECT foto FROM tb_user0053 WHERE id=$id");
        while($data = mysqli_fetch_assoc($ambilData)) {
            $gambar = $data['foto'];
        }
        unlink('foto/' . $gambar);

        $db->hapusData($_GET['id']);
        header("location: index.php");
    }


?>