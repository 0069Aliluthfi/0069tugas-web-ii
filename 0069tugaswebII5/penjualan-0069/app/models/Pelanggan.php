<?php
class Pelanggan {
    private $conn;
    private $table_name = "pelanggan";
    public function __construct($db) {
        $this->conn = $db;
    }
    public function getAll() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function create($nama_pelanggan, $alamat) {
        $query = "INSERT INTO " . $this->table_name . " (nama_pelanggan, alamat) VALUES (:nama_pelanggan, :alamat)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_pelanggan', $nama_pelanggan);
        $stmt->bindParam(':alamat', $alamat);
        return $stmt->execute();
    }
    public function getById($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id LIMIT 0,1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function update($id, $nama_pelanggan, $alamat) {
        $query = "UPDATE " . $this->table_name . " SET nama_pelanggan = :nama_pelanggan, alamat = :alamat WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nama_pelanggan', $nama_pelanggan);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    public function delete($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
?>
