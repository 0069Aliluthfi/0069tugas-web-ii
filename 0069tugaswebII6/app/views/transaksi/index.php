<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Penjualan</title>
    <link rel="stylesheet" href="/public/assets/AdminLTE/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/public/assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include "app/views/navbar.php"; ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <h1>Transaksi Penjualan</h1>
            </div>
        </section>
        
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Transaksi</h3>
                        <button onclick="location.href='tambah.php'" class="btn btn-success float-right">
                            <i class="fas fa-plus"></i> Tambah Data
                        </button>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered">
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
                                    <tr><td colspan="8">Tidak ada data transaksi.</td></tr>
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
                                                <a href="detail.php?id=<?= $transaksi['id_transaksi']; ?>" class="btn btn-info btn-sm">
                                                    <i class="fas fa-eye"></i> Detail
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; 2024 <a href="#">Aplikasi Penjualan</a>.</strong>
        All rights reserved.
    </footer>
</div>

<script src="/public/assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<script src="/public/assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/public/assets/AdminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>
