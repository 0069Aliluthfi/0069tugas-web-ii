<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Penjualan - Aplikasi Penjualan</title>
    <link rel="stylesheet" href="public/assets/css/style.css">
</head>
<body>
    <?php include "app/views/navbar.php"; ?>
    <div class="container">
        <h1>Transaksi Penjualan</h1>
        <button onclick="location.href='app/views/transaksi/tambah.php'" style="background-color: #4CAF50; color: white;">Tambah Data</button>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Transaksi</th>
                    <th>Kode Barang</th>
                    <th>ID Pelanggan</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($transaksiList)): ?>
                    <tr>
                        <td colspan="8">Tidak ada data transaksi.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($transaksiList as $index => $transaksi): ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($transaksi['id_transaksi']); ?></td>
                            <td><?= htmlspecialchars($transaksi['id_barang']); ?></td>
                            <td><?= htmlspecialchars($transaksi['id_pelanggan']); ?></td>
                            <td><?= htmlspecialchars($transaksi['jumlah']); ?></td>
                            <td>Rp <?= number_format($transaksi['total_harga'], 2, ',', '.'); ?></td>
                            <td><?= htmlspecialchars($transaksi['tanggal']); ?></td>
                            <td>
                                <button class="btn-detail" onclick="window.location.href='app/views/transaksi/detail.php?id=<?= $transaksi['id_transaksi']; ?>'">Detail Transaksi</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
