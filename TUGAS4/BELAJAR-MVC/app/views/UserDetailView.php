<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>User Details</h1>
    <ul class="list-group">
        <li class="list-group-item"><strong>ID:</strong> <?php echo htmlspecialchars($user['id']); ?></li>
        <li class="list-group-item"><strong>Nama:</strong> <?php echo htmlspecialchars($user['nama']); ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></li>
    </ul>
    <a href="../BELAJAR-MVC" class="btn btn-primary mt-3">Back to List</a>
</div>
</body>
</html>
