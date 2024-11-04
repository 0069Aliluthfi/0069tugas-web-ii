<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<h2>Detail Transaksi</h2>

<?php if (isset($transaksi)): ?>
    <p>ID Transaksi: <?= htmlspecialchars($transaksi['id_transaksi']); ?></p>
    <p>Tanggal: <?= htmlspecialchars($transaksi['tanggal']); ?></p>
    <p>ID Pelanggan: <?= htmlspecialchars($transaksi['id_pelanggan']); ?></p>
    <p>ID Barang: <?= htmlspecialchars($transaksi['id_barang']); ?></p>
    <p>Jumlah: <?= htmlspecialchars($transaksi['jumlah']); ?></p>
    <p>Total Harga: Rp <?= number_format($transaksi['total_harga'], 2, ',', '.'); ?></p>
<?php else: ?>
    <p>Data transaksi tidak ditemukan.</p>
<?php endif; ?>

</body>
</html>
