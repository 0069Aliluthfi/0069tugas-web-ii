<?php
include 'database.php';
$db = new Database();
$dataUser = $db->editData($_GET['id']);

if ($dataUser === null) {
    echo "Pengguna tidak ditemukan.";
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-3">
    <h1>Detail Data Pengguna</h1>
    <div class="card">
        <img src="<?php echo $dataUser['foto']; ?>" class="card-img-top" alt="Foto Pengguna">
        <div class="card-body">
            <h5 class="card-title"><?php echo $dataUser['nama']; ?></h5>
            <p class="card-text"><strong>Jenis Kelamin:</strong> <?php echo $dataUser['jenis_kelamin']; ?></p>
            <p class="card-text"><strong>No HP:</strong> <?php echo $dataUser['nohp']; ?></p>
            <p class="card-text"><strong>Email:</strong> <?php echo $dataUser['email']; ?></p>
            <p class="card-text"><strong>Alamat:</strong> <?php echo $dataUser['alamat']; ?></p>
        </div>
    </div>
    <a href="index.php" class="btn btn-primary mt-3">Kembali</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
