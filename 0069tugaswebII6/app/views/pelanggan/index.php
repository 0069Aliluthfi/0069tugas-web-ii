<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
    <link rel="stylesheet" href="/public/assets/AdminLTE/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/public/assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include "app/views/navbar.php"; ?>

    <div class="content-wrapper">
        <section class="content-header">
            <h1>Daftar Pelanggan</h1>
        </section>
        
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pelanggan</h3>
                        <button onclick="location.href='tambah.php'" class="btn btn-success float-right">
                            <i class="fas fa-plus"></i> Tambah Pelanggan
                        </button>
                    </div>
                    
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>ID Pelanggan</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (empty($pelangganList)): ?>
                                    <tr><td colspan="6">Tidak ada data pelanggan.</td></tr>
                                <?php else: ?>
                                    <?php foreach ($pelangganList as $index => $pelanggan): ?>
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td><?= htmlspecialchars($pelanggan['id_pelanggan']); ?></td>
                                            <td><?= htmlspecialchars($pelanggan['nama']); ?></td>
                                            <td><?= htmlspecialchars($pelanggan['email']); ?></td>
                                            <td><?= htmlspecialchars($pelanggan['alamat']); ?></td>
                                            <td>
                                                <a href="edit.php?id=<?= $pelanggan['id_pelanggan']; ?>" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="hapus.php?id=<?= $pelanggan['id_pelanggan']; ?>" class="btn btn-danger btn-sm">
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
