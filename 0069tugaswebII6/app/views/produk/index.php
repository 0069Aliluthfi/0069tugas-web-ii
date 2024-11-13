<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="/public/assets/AdminLTE/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/public/assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include "app/views/navbar.php"; ?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Daftar Produk</h1>
        </section>
        
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Produk</h3>
                        <button onclick="location.href='tambah.php'" class="btn btn-success float-right">
                            <i class="fas fa-plus"></i> Tambah Produk
                        </button>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Produk</th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Stok</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($produkList)): ?>
                                    <tr><td colspan="6">Tidak ada data produk.</td></tr>
                                <?php else: ?>
                                    <?php foreach ($produkList as $index => $produk): ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?= htmlspecialchars($produk['kode_produk']); ?></td>
                                            <td><?= htmlspecialchars($produk['nama_produk']); ?></td>
                                            <td>Rp <?= number_format($produk['harga'], 2, ',', '.'); ?></td>
                                            <td><?= htmlspecialchars($produk['stok']); ?></td>
                                            <td>
                                                <a href="edit.php?id=<?= $produk['kode_produk']; ?>" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="hapus.php?id=<?= $produk['kode_produk']; ?>" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i> Hapus
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
</div>

<script src="/public/assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<script src="/public/assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/public/assets/AdminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>
