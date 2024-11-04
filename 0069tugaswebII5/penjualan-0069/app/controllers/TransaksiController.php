<?php
require_once "config/database.php";
require_once "app/models/Transaksi.php";
require_once "app/models/Pelanggan.php";
class TransaksiController {
    private $transaksi;
    private $pelanggan;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->transaksi = new Transaksi($db);
        $this->pelanggan = new Pelanggan($db);
    }

    public function index() {
        $result = $this->transaksi->getAll();
        $transaksiList = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $transaksiList[] = $row;
        }
        include "app/views/transaksi/index.php";
    }
    public function detail($id_transaksi) {
        require_once "app/models/Transaksi.php";
        $this->transaksi = new Transaksi($this->db);
        $transaksi = $this->transaksi->getDetailTransaksi($id_transaksi);
        var_dump($transaksi);
    exit;
        if (!$transaksi) {
            echo "Transaksi tidak ditemukan.";
            return;
        }
        include "app/views/transaksi/detail.php";
    }    
}
?>
