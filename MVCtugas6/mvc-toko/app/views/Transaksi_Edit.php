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
                    <h2>Edit Transaksi</h2>
                    <hr>
               </div>

               <!-- Tampilkan pesan jika data transaksi tidak ditemukan -->
               <?php if (!$transaksi): ?>
                    <div class="alert alert-danger">
                         Data transaksi tidak ditemukan atau kode tidak valid.
                    </div>
               <?php else: ?>

               <!-- Form Edit Data  -->
               <form method="POST" class ="my-2">
                    
                    <div class="mb-3">
                         <label for="kode_barang" class="form-label fw-bold">Kode Barang</label>
                         <input type="text"  class="form-control" id="kode_barang" name="kode_barang"  value="<?php echo $transaksi['kode_barang'] ?>" required>
                    </div>
                    <div class="mb-3">
                         <label for="id_pelanggan" class="form-label fw-bold">ID Pelanggan</label>
                         <input type="text"  class="form-control" id="id_pelanggan" name="id_pelanggan"  value="<?php echo $transaksi['id_pelanggan'] ?>" required>
                    </div>                   
                    <div class="mb-3">
                         <label for="jumlah" class="form-label fw-bold">Jumlah</label>
                         <input type="number"  class="form-control" id="jumlah" name="jumlah"  value="<?php echo $transaksi['jumlah'] ?>" required>
                    </div>                

                    <div class="mb-4">
                         <a href="index.php?pindah=transaksi"      class="btn btn-info btn-sm">Kembali</a>
                         <button type="submit"    class="btn btn-success btn-sm" onclick="return confirm('Sudah Benar Semua??');">Update</button>
                    </div>
               </form>
               <?php endif; ?>
          </div>
          

          <!-- Bootstrap JavaScript -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

     </body>
</html>