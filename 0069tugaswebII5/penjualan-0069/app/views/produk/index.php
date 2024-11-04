<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang - Aplikasi Penjualan</title>
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
    <?php include "app/views/navbar.php"; ?>
    <div class="container">
        <h1>Daftar Barang</h1>
        <button onclick="location.href='app/views/produk/tambah.php'" style="background-color: #4CAF50; color: white;">Tambah Data</button>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produkList as $index => $produk): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($produk['kode_barang']); ?></td>
                        <td><?= htmlspecialchars($produk['nama_barang']); ?></td>
                        <td>Rp <?= number_format($produk['harga'], 2, ',', '.'); ?></td>
                        <td><?= htmlspecialchars($produk['stok']); ?></td>
                        <td>
                        <a href="app/views/produk/edit.php?id=<?= $produk['id']; ?>" class="btn-edit">Edit</a>
                        <a href="app/controllers/produk/hapus.php?id=<?= $produk['id']; ?>" class="btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
