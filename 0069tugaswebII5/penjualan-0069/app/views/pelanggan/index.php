<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan - Aplikasi Penjualan</title>
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
    <?php include "app/views/navbar.php"; ?>
    <div class="container">
        <h1>Daftar Pelanggan</h1>
        <button onclick="location.href='app/views/pelanggan/tambah.php'" style="background-color: #4CAF50; color: white;">Tambah Data</button>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($pelangganList as $index => $pelanggan): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($pelanggan['id']); ?></td>
                        <td><?= htmlspecialchars($pelanggan['nama_pelanggan']); ?></td>
                        <td><?= htmlspecialchars($pelanggan['alamat']); ?></td>
                        <td>
                            <a href="http://localhost/penjualan-0069/app/views/pelanggan/edit.php?id=<?= $pelanggan['id']; ?>" class="btn-edit">Edit</a>
                            <a href="app/controllers/pelanggan/hapus.php?id=<?= $pelanggan['id']; ?>" class="btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
