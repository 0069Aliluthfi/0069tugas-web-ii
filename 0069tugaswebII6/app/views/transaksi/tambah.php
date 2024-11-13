<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <link rel="stylesheet" href="/public/assets/AdminLTE/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/public/assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php include "app/views/navbar.php"; ?>

    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <h1>Tambah Transaksi</h1>
            </div>
        </section>
        
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Tambah Transaksi</h3>
                    </div>

                    <form action="simpan.php" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="id_barang">ID Barang</label>
                                <input type="text" class="form-control" id="id_barang" name="id_barang" required>
                            </div>
                            <div class="form-group">
                                <label for="id_pelanggan">ID Pelanggan</label>
                                <input type="text" class="form-control" id="id_pelanggan" name="id_pelanggan" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                            </div>
                            <div class="form-group">
                                <label for="total_harga">Total Harga</label>
                                <input type="number" class="form-control" id="total_harga" name="total_harga" required>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="button" onclick="window.history.back()" class="btn btn-secondary">Kembali</button>
                        </div>
                    </form>
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
