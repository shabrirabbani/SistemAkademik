<?php

class Database {
    private $servername = "127.0.0.1";
    private $username = "root"; 
    private $password = ""; 
    private $dbname = "db_akademik";
    private $conn;

    // Fungsi untuk membuat koneksi ke database
    public function __construct() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Koneksi gagal: " . $this->conn->connect_error);
        }
    }

    public function __destruct() {
        $this->conn->close();
    }

    // Fungsi untuk menambah data 
    public function tambah($nama, $alamat, $umur) {
        $sql = "INSERT INTO mahasiswa (nama, alamat, umur) VALUES ('$nama', '$alamat', '$umur')";
        return $this->conn->query($sql);
    }

    // Fungsi untuk menampilkan data 
    public function tampil() {
        $sql = "SELECT * FROM mahasiswa";
        return $this->conn->query($sql);
    }

    // Fungsi untuk menghapus data 
    public function hapus($id) {
        $sql = "DELETE FROM mahasiswa WHERE id=$id";
        return $this->conn->query($sql);
    }

    // Fungsi untuk memperbarui data 
    public function update($id, $nama, $alamat, $umur) {
        $sql = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', umur='$umur' WHERE id=$id";
        return $this->conn->query($sql);
    }
}
?>
