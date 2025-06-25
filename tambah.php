<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <h2>Form Tambah Mahasiswa</h2>
    <form method="post">
        NIM: <input type="text" name="nim" required><br><br>
        Nama: <input type="text" name="nama" required><br><br>
        Jurusan: <input type="text" name="jurusan" required><br><br>
        Semester: <input type="number" name="semester" required><br><br>
        <input type="submit" name="simpan" value="Simpan">
    </form>

    <?php
    if (isset($_POST['simpan'])) {
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jurusan = $_POST['jurusan'];
        $semester = $_POST['semester'];

        $sql = "INSERT INTO mahasiswa (nim, nama, jurusan, semester)
                VALUES ('$nim', '$nama', '$jurusan', '$semester')";
        mysqli_query($conn, $sql);
        echo "<br>Data berhasil ditambahkan! <a href='index.php'>Kembali</a>";
    }
    ?>
</body>
</html>
