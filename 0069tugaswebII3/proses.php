<?php
include 'database.php';
$db = new Database();
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : '';

if ($aksi == "tambah") {
    if (isset($_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['jenis_kelamin'], $_POST['email'], $_POST['foto'])) {
        $db->tambahData($_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['jenis_kelamin'], $_POST['email'], $_POST['foto']);
        header("Location: index.php");
    } else {
        echo "Data tidak lengkap, silakan coba lagi.";
    }
} elseif ($aksi == "update") {
    if (isset($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['jenis_kelamin'], $_POST['email'], $_POST['foto'])) {
        $db->updateData($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['nohp'], $_POST['jenis_kelamin'], $_POST['email'], $_POST['foto']);
        header("Location: index.php");
    } else {
        echo "Data tidak lengkap, silakan coba lagi.";
    }
} elseif ($aksi == "hapus") {
    if (isset($_GET['id'])) {
        $db->hapusData($_GET['id']);
        header("Location: index.php");
    } else {
        echo "ID tidak ditemukan.";
    }
} else {
    echo "Aksi tidak dikenal.";
}
?>
