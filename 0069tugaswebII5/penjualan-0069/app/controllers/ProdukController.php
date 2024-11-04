<?php
require_once "config/database.php";
require_once "app/models/Produk.php";

class ProdukController {
    private $produk;
    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->produk = new Produk($db);
    }
    public function index() {
        $result = $this->produk->getAll();
        $produkList = [];
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $produkList[] = $row;
        }
        include "app/views/produk/index.php";
    }
}
?>
