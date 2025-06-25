<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h2>Data Mahasiswa</h2>
    <a href="tambah.php">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $no . "</td>";
            echo "<td>" . $row['nim'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['jurusan'] . "</td>";
            echo "<td>" . $row['semester'] . "</td>";
            echo "<td>
                    <a href='edit.php?id=" . $row['id'] . "'>Edit</a> |
                    <a href='hapus.php?id=" . $row['id'] . "' onclick=\"return confirm('Yakin ingin menghapus?')\">Hapus</a>
                  </td>";
            echo "</tr>";
            $no++; // tambahkan di luar echo agar tidak error
        }
        ?>
    </table>
</body>
</html>
