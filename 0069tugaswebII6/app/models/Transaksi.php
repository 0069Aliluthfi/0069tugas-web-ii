<?php
class Transaksi {
    private $conn;
    private $table_name = "transaksi";
    public function __construct($db) {
        $this->conn = $db;
    }
    public function deleteByPelangganId($id_pelanggan) {
        $query = "DELETE FROM transaksi WHERE id_pelanggan = :id_pelanggan";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_pelanggan', $id_pelanggan);
        return $stmt->execute();
    }
    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function create($id_barang, $id_pelanggan, $jumlah, $total_harga, $tanggal) {
        $query = "INSERT INTO transaksi (id_barang, id_pelanggan, jumlah, total_harga, tanggal) VALUES (:id_barang, :id_pelanggan, :jumlah, :total_harga, :tanggal)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_barang', $id_barang);
        $stmt->bindParam(':id_pelanggan', $id_pelanggan);
        $stmt->bindParam(':jumlah', $jumlah);
        $stmt->bindParam(':total_harga', $total_harga);
        $stmt->bindParam(':tanggal', $tanggal);
        return $stmt->execute();
    }
    public function getDetailTransaksi($id_transaksi) {
        $query = "SELECT * FROM transaksi WHERE id_transaksi = :id_transaksi LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id_transaksi', $id_transaksi);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }       
    public function getById($id) {
        $query = "SELECT * FROM tb_transaksi WHERE id_transaksi = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }    
}
?>
