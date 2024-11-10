<!DOCTYPE html>
<html lang="en">
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <!-- Bootstrap CSS -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

          <title>Management Toko</title>
          
     </head>
     <body>
          
          <div class="container">
               <!-- Judul -->
               <div class="judul my-3">
                    <h2>Edit Pelanggan</h2>
                    <hr>
               </div>
               
               <!-- Tampilkan pesan jika data barang tidak ditemukan -->
               <?php if (!$pelanggan): ?>
                    <div class="alert alert-danger">
                         Data pelanggan tidak ditemukan atau kode tidak valid.
                    </div>
               <?php else: ?>

               <!-- Form Edit Data  -->
               <form method="POST" class ="my-2">

                    <div class="mb-3">
                         <label for="id" class="form-label fw-bold">ID Pelanggan</label>
                         <input type="text"  class="form-control" id="id" name="id"  value="<?php echo $pelanggan['id'] ?>" readonly>
                    </div>
                    <div class="mb-3">
                         <label for="nama" class="form-label fw-bold">Nama</label>
                         <input type="text"  class="form-control" id="nama" name="nama"  value="<?php echo $pelanggan['nama'] ?>" required>
                    </div>
                    <div class="mb-3">
                         <label for="alamat"   class="form-label fw-bold">Alamat</label>
                         <input type="alamat"  class="form-control" id="alamat" name="alamat"  value="<?php echo $pelanggan['alamat'] ?>" required>
                    </div>                    

                    <div class="mb-4">
                         <a href="index.php"      class="btn btn-info btn-sm">Kembali</a>
                         <button type="submit"    class="btn btn-success btn-sm" onclick="return confirm('Sudah Benar Semua??');">Update</button>
                    </div>
               </form>
               <?php endif; ?>
          </div>
          

          <!-- Bootstrap JavaScript -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     </body>
</html>