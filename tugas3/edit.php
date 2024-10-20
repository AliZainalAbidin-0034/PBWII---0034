<?php
    include 'database.php';
    $db = new Database();
    $detail = $db->editData($_GET['id']);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
        <h1 class="text-center">CRUD OOP PHP</h1>
        <h3 class="text-center">Edit Data</h3>
        <hr>
        <!-- Form tambah data -->
        <form method="POST" action="proses.php?aksi=update" enctype="multipart/form-data">
            <?php
                foreach($detail as $dataUser) {

            ?>
            <!-- id -->
            <input type="hidden" id="id" name="id" value="<?php echo $dataUser['id']; ?>">


            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataUser['nama']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label fw-bold">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $dataUser['alamat']; ?>">
            </div>
            <div class="mb-3">
                <label for="nohp" class="form-label fw-bold">No HP</label>
                <input type="number" class="form-control" id="nohp" name="nohp" value="<?php echo $dataUser['nohp'];?>">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label fw-bold">Jenis Kelamin</label>
                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin" value="<?php echo $dataUser['jenis_kelamin'];?>">
            </div>
            <input type="hidden" name="foto_lama" value="<?php echo $dataUser['foto']; ?>">
            <div class="mb-3">
                <label for="foto" class="form-label fw-bold">Gambar</label>
                <br>
                <img src="foto/<?php echo $dataUser['foto']; ?>" alt="Foto" width="100">
                <input type="file" class="form-control mt-2" name="foto" id="foto">
            </div>
            <?php
                }
            ?>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>