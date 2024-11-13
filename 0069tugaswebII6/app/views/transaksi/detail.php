<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Transaksi</title>
    <link rel="stylesheet" href="/public/assets/AdminLTE/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/public/assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include "app/views/navbar.php"; ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <h1>Detail Transaksi</h1>
            </div>
        </section>
        
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Transaksi</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($transaksi)): ?>
                            <p><strong>ID Transaksi:</strong> <?= htmlspecialchars($transaksi['id_transaksi']); ?></p>
                            <p><strong>Tanggal:</strong> <?= htmlspecialchars($transaksi['tanggal']); ?></p>
                            <p><strong>ID Pelanggan:</strong> <?= htmlspecialchars($transaksi['id_pelanggan']); ?></p>
                            <p><strong>ID Barang:</strong> <?= htmlspecialchars($transaksi['id_barang']); ?></p>
                            <p><strong>Jumlah:</strong> <?= htmlspecialchars($transaksi['jumlah']); ?></p>
                            <p><strong>Total Harga:</strong> Rp <?= number_format($transaksi['total_harga'], 2, ',', '.'); ?></p>
                        <?php else: ?>
                            <p>Data transaksi tidak ditemukan.</p>
                        <?php endif; ?>
                    </div>
                    <div class="card-footer">
                        <button onclick="window.history.back()" class="btn btn-secondary">Kembali</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<script src="/public/assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<script src="/public/assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/public/assets/AdminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>
