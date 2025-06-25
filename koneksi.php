<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_mahasiswa"; 

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    echo "Koneksi ke database GAGAL!<br>";
    echo "Error: " . mysqli_connect_error();
    exit;
}

echo "BERHASIL ya dek yak";
?>
