<?php
include 'database.php';
$db = new Database();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OOP PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-custom {
            background-color: #007bff;
            color: white;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container mt-3">
    <h1>OOP PHP CRUD</h1>
    <hr>
    <a href="input.php" class="btn btn-custom">Tambah Data</a>
    <hr>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">No HP</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($db->tampilData() as $dataUser) {
            ?>
                <tr>
                    <th scope="row"><?php echo $nomor++; ?></th>
                    <td><?php echo $dataUser['nama']; ?></td>
                    <td><?php echo $dataUser['alamat']; ?></td>
                    <td><?php echo $dataUser['nohp']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $dataUser['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="proses.php?id=<?php echo $dataUser['id']; ?>&aksi=hapus" class="btn btn-danger btn-sm">Hapus</a>
                        <a href="detail.php?id=<?php echo $dataUser['id']; ?>" class="btn btn-info btn-sm">Detail</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
