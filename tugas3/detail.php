<?php
date_default_timezone_set('Asia/Jakarta');
include 'database.php';
$db = new Database();

// Ambil ID dari query string
$id = $_GET['id'];

$dataUser = mysqli_fetch_assoc(mysqli_query($db->connect, "SELECT * FROM tb_user0034 WHERE id='$id'"));
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
        <h1 class="text-center pb-3">Detail Data</h1>
        <div class="card mb-3 bg-secondary bg-info-subtle" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="foto/<?php echo $dataUser['foto']; ?>" class="img-fluid rounded-start" alt="<?php echo $dataUser['nama']; ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $dataUser['nama']; ?></h5>
                        <p class="card-text">Alamat: <?php echo $dataUser['alamat']; ?></p>
                        <p class="card-text">No HP: <?php echo $dataUser['nohp']; ?></p>
                        <p class="card-text">Jenis Kelamin: <?php echo $dataUser['jenis_kelamin']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <a href="index.php" class="btn btn-success">Kembali</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
