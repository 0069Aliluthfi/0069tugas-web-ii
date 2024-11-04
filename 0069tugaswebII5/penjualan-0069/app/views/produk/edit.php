<?php
require_once "../../../config/database.php";
require_once "../../models/Produk.php";

$database = new Database();
$db = $database->getConnection();
$produk = new Produk($db);
$id = $_GET['id'] ?? null;

if ($id) {
    $produkData = $produk->getById($id);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    if ($produk->update($id, $kode_barang, $nama_barang, $harga, $stok)) {
        header("Location: ../../../index.php?menu=barang");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
        }
        .container {
            width: 90%;
            max-width: 500px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            width: 100%;
            background-color: #FFFF00;
            color: black;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }
        button:hover {
            background-color: #FFD700;
        }
        .back-link {
            text-align: center;
            display: block;
            margin-top: 10px;
            background-color: #FFFF00;
            color: black;
            text-decoration: none;
            font-size: 14px;
        }
        .back-link:hover {
            background-color: #FFD700;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Produk</h2>
        <form action="" method="POST">
            <label for="kode_barang">Kode Barang:</label>
            <input type="text" id="kode_barang" name="kode_barang" value="<?= htmlspecialchars($produkData['kode_barang']); ?>" required>

            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" value="<?= htmlspecialchars($produkData['nama_barang']); ?>" required>

            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga" value="<?= htmlspecialchars($produkData['harga']); ?>" required>

            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" value="<?= htmlspecialchars($produkData['stok']); ?>" required>

            <button type="submit">Simpan Perubahan</button>
        </form>
        <a href="http://localhost/penjualan-0069/index.php?menu=barang" class="back-link">Kembali</a>
    </div>
</body>
</html>