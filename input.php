<?php
include 'database.php';

$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];

    if ($db->tambah($nama, $alamat, $umur)) {
        echo "Data berhasil ditambahkan. <a href='tampil.php'>Lihat Data</a>";
    } else {
        echo "Error: ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <form action="input.php" method="post">
        <label for="nama">Nama</label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="alamat">Alamat</label><br>
        <input type="text" id="alamat" name="alamat" required><br>
        <label for="umur">Umur</label><br>
        <input type="text" id="umur" name="umur" required><br><br>
        <input type="submit" value="Tambah">
    </form>
</body>
</html>
