<?php
require_once "../../../config/database.php";
require_once "../../models/Pelanggan.php";

$id = $_GET['id'] ?? null;
$database = new Database();
$db = $database->getConnection();
$pelangganModel = new Pelanggan($db);
$pelanggan = $pelangganModel->getById($id);

if (!$pelanggan) {
    echo "Pelanggan tidak ditemukan.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pelanggan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 400px;
        }
        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="submit"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 15px;
            font-size: 14px;
        }
        input[type="submit"] {
            background-color: #FFFF00;
            color: black;
            border: none;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
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
        <h1>Edit Pelanggan</h1>
        <form action="http://localhost/penjualan-0069/app/controllers/pelanggan/update.php" method="POST">
            <input type="hidden" name="id" value="<?= htmlspecialchars($pelanggan['id']); ?>">
            
            <label for="nama_pelanggan">Nama Pelanggan:</label>
            <input type="text" name="nama_pelanggan" value="<?= htmlspecialchars($pelanggan['nama_pelanggan']); ?>" required>
            
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" value="<?= htmlspecialchars($pelanggan['alamat']); ?>" required>
            
            <input type="submit" value="Update">
        </form>
        <a href="http://localhost/penjualan-0069/index.php?menu=pelanggan" class="back-link">Kembali</a>
    </div>
</body>
</html>
