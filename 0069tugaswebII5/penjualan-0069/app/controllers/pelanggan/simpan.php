<?php
require_once "../../../config/database.php";
require_once "../../models/Pelanggan.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_pelanggan = $_POST['nama_pelanggan'] ?? '';
    $alamat = $_POST['alamat'] ?? '';

    $database = new Database();
    $db = $database->getConnection();
    $pelanggan = new Pelanggan($db);

    if ($pelanggan->create($nama_pelanggan, $alamat)) {
        header("Location: http://localhost/penjualan-0069/index.php?menu=pelanggan");
        exit();
    } else {
        echo "Gagal menyimpan data pelanggan.";
    }
} else {
    echo "Akses tidak valid.";
}
?>
