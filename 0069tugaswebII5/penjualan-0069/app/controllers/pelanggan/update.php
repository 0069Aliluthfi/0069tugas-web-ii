<?php
require_once "../../../config/database.php";
require_once "../../models/Pelanggan.php";

$database = new Database();
$db = $database->getConnection();
$pelanggan = new Pelanggan($db);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];

    if ($pelanggan->update($id, $nama_pelanggan, $alamat)) {
        header("Location: ../../../index.php?menu=pelanggan");
        exit();
    } else {
        echo "Gagal memperbarui data pelanggan.";
    }
} else {
    echo "Request tidak valid.";
}
?>
