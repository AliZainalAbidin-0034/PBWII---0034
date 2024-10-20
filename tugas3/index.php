<?php
include 'database.php';
$db = new Database;
$db->tampilData();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP</title>
    <script>
        function confirmDelete(id) {
                // Tampilkan konfirmasi
                if (confirm("Apakah data ini ingin anda hapus?")) {
                    window.location.href = 'proses.php?id=' + id + '&aksi=hapus';
                } else {
                    return false;
                }
    }
    function confirmEdit(id) {
        // Tampilkan konfirmasi
        if (confirm("Apakah Anda ingin mengedit data ini?")) {
            window.location.href = 'edit.php?id=' + id;
        } else {
            return false;
        }
    }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3 col-md-12">
        <h1 class="text-center">CRUD OOP PHP</h1>
        <hr>
        <!-- Tombol tambah data -->
        <a href="input.php" class="btn btn-success mt-2 mb-2">Tambah</a>

        <table class="table table-hover table-secondary table-striped">
            <thead>
                <tr>
                <th scope="col" class="col-md-1">ID</th>
                <th scope="col" class="col-md-2">Nama</th>
                <th scope="col" class="col-md-2">Alamat</th>
                <th scope="col" class="col-md-2">No Hp</th>
                <th scope="col" class="col-md-2">Jenis Kelamin</th>
                <th scope="col" class="col-md-2">Foto</th>
                <th scope="col" class="col-md-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    foreach ($db->tampilData() as $dataUser){
                ?>
                <tr>
                <th scope="row"><?php echo $nomor++; ?></th>
                <td><?php echo $dataUser ['nama']; ?></td>
                <td><?php echo $dataUser ['alamat']; ?></td>
                <td><?php echo $dataUser ['nohp']; ?></td>
                <td><?php echo $dataUser ['jenis_kelamin']; ?></td>
                <td>
                    <img src="foto/<?php echo $dataUser['foto'] ?>" width="100">
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $dataUser['id']; ?>" onclick="return confirmEdit('<?php echo $dataUser['id']; ?>')" class="btn btn-warning btn-sm m-1">Edit</a>
                    <a href="proses.php?id=<?php echo $dataUser['id']; ?>&aksi=hapus" onclick="return confirmDelete('<?php echo $dataUser['id']; ?>')" class="btn btn-danger btn-sm m-1">Hapus</a>
                    <a href="detail.php?id=<?php echo $dataUser['id']; ?>" class="btn btn-secondary btn-sm m-1">Detail</a>
                </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>