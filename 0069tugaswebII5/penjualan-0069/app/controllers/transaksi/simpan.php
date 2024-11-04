<?php
require_once "../../../config/database.php";
require_once "../../models/Transaksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_barang = $_POST['id_barang'];
    $id_pelanggan = $_POST['id_pelanggan'];
    $jumlah = $_POST['jumlah'];
    $total_harga = $_POST['total_harga'];
    $tanggal = $_POST['tanggal'];

    $database = new Database();
    $db = $database->getConnection();
    $transaksiModel = new Transaksi($db);
    if ($transaksiModel->create($id_barang, $id_pelanggan, $jumlah, $total_harga, $tanggal)) {
        header("Location: http://localhost/penjualan-0069/index.php?menu=transaksi");
        exit();
    } else {
        echo "Gagal menambah data transaksi.";
    }
}
?>
