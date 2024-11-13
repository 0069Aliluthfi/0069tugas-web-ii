<?php
require_once "config/database.php";
require_once "app/models/Pelanggan.php";

class PelangganController {
    private $pelanggan;
    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->pelanggan = new Pelanggan($db);
    }
    public function index() {
        $result = $this->pelanggan->getAll();
        $pelangganList = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $pelangganList[] = $row;
        }
        include "app/views/pelanggan/index.php";
    }
    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $alamat = $_POST['alamat'];

            if ($this->pelanggan->create($nama_pelanggan, $alamat)) {
                header("Location: ../index.php?menu=pelanggan");
                exit();
            }
        }
        include "../views/pelanggan/tambah.php";
    }
    public function edit($id) {
        $pelangganData = $this->pelanggan->getById($id);
        if (!$pelangganData) {
            echo "Pelanggan tidak ditemukan.";
            return;
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama_pelanggan = $_POST['nama_pelanggan'];
            $alamat = $_POST['alamat'];
    
            if ($this->pelanggan->update($id, $nama_pelanggan, $alamat)) {
                header("Location: ../index.php?menu=pelanggan");
                exit();
            }
        }
    
        include "../views/pelanggan/edit.php";
    }
    public function delete($id) {
        if ($this->pelanggan->delete($id)) {
            header("Location: ../index.php?menu=pelanggan");
            exit();
        } else {
            echo "Gagal menghapus pelanggan.";
        }
    }
}
?>
