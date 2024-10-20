<?php
include 'database.php';

$db = new Database();
$detail = $db->editData($_GET['id']);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-3">
    <h1>OOP PHP CRUD</h1>
    <h4>Edit Data</h4>
    <hr class="mt-0">

    <form method="POST" action="proses.php?aksi=update">
        <input type="hidden" name="id" value="<?php echo $detail['id']; ?>">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $detail['nama']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" required><?php echo $detail['alamat']; ?></textarea>
        </div>
        <div class="mb-3">
            <label for="nohp" class="form-label">No HP</label>
            <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $detail['nohp']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Jaler" <?php if ($detail['jenis_kelamin'] == 'Jaler') echo 'selected'; ?>>Jaler</option>
                <option value="Estri" <?php if ($detail['jenis_kelamin'] == 'Estri') echo 'selected'; ?>>Estri</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $detail['email']; ?>" required>
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label">Foto (URL)</label>
            <input type="text" class="form-control" id="foto" name="foto" value="<?php echo $detail['foto']; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
