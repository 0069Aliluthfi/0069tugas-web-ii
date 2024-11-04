<?php
require_once "../../../config/database.php"; 
require_once "../../models/Pelanggan.php"; 
require_once "../../models/Transaksi.php";

$id = $_GET['id'] ?? null;

$database = new Database();
$db = $database->getConnection();
$pelangganModel = new Pelanggan($db);
$transaksiModel = new Transaksi($db);

if ($id) {
    $transaksiModel->deleteByPelangganId($id);
    if ($pelangganModel->delete($id)) {
        header("Location: ../../../index.php?menu=pelanggan"); 
        exit();
    } else {
        echo "Gagal menghapus pelanggan.";
    }
} else {
    echo "ID pelanggan tidak valid.";
}
?>
