<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Transaksi</title>
    <style>
        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #4cae4c;
        }

        .btn-back {
            display: inline-block;
            margin-top: 10px;
            text-align: center;
            padding: 10px 15px;
            background-color: #d9534f;
            color: white;
            border-radius: 4px;
            text-decoration: none;
        }

        .btn-back:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Transaksi</h1>
        <form action="http://localhost/penjualan-0069/app/controllers/transaksi/simpan.php" method="POST">
            <div class="form-group">
                <label for="id_barang">ID Barang:</label>
                <input type="text" name="id_barang" required>
            </div>
            <div class="form-group">
                <label for="id_pelanggan">ID Pelanggan:</label>
                <input type="text" name="id_pelanggan" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah:</label>
                <input type="number" name="jumlah" required>
            </div>
            <div class="form-group">
                <label for="total_harga">Total Harga:</label>
                <input type="number" step="0.01" name="total_harga" required>
            </div>
            <div class="form-group">
                <label for="tanggal">Tanggal:</label>
                <input type="date" name="tanggal" required>
            </div>
            <input type="submit" value="Simpan">
        </form>
        <a href="http://localhost/penjualan-0069/index.php?menu=transaksi" class="btn-back">Kembali</a>
    </div>
</body>
</html>
