<?php
require_once "../../../config/database.php";
require_once "../../models/Produk.php";

$database = new Database();
$db = $database->getConnection();
$produk = new Produk($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode_barang = $_POST['kode_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

if ($produk->create($kode_barang, $nama_barang, $harga, $stok)) {
    header("Location: ../../../index.php?menu=barang");
    exit();
    }
}
?>
