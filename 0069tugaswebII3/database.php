<?php

class Database
{
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $database = "db_php";
    public $connect;

    function __construct()
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if (!$this->connect) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    function tampilData()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_users");
        return mysqli_fetch_all($data, MYSQLI_ASSOC);
    }

    function tambahData($nama, $alamat, $nohp, $jenisKelamin, $email, $foto)
    {
        $stmt = mysqli_prepare($this->connect, "INSERT INTO tb_users (nama, alamat, nohp, jenis_kelamin, email, foto) VALUES (?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "ssssss", $nama, $alamat, $nohp, $jenisKelamin, $email, $foto);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    function editData($id)
    {
        $stmt = mysqli_prepare($this->connect, "SELECT * FROM tb_users WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rows = mysqli_fetch_assoc($result);
        mysqli_stmt_close($stmt);
        return $rows;
    }

    function updateData($id, $nama, $alamat, $nohp, $jenisKelamin, $email, $foto)
    {
        $stmt = mysqli_prepare($this->connect, "UPDATE tb_users SET nama = ?, alamat = ?, nohp = ?, jenis_kelamin = ?, email = ?, foto = ? WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "ssssssi", $nama, $alamat, $nohp, $jenisKelamin, $email, $foto, $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    function hapusData($id)
    {
        $stmt = mysqli_prepare($this->connect, "DELETE FROM tb_users WHERE id = ?");
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
    }

    function closeConnection()
    {
        if ($this->connect) {
            mysqli_close($this->connect);
        }
    }
}

?>
