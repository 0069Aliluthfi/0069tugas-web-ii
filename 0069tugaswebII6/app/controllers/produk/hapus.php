<?php
require_once "../../../config/database.php";
require_once "../../models/Produk.php";

$database = new Database();
$db = $database->getConnection();
$produk = new Produk($db);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if ($produk->delete($id)) {
        header("Location: ../../../index.php?menu=barang");
        exit();
    } else {
        echo "Gagal menghapus produk.";
    }
} else {
    echo "ID produk tidak ditemukan.";
}
?>
