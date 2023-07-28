<?php 
include "helper/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
</head>
<body>
    <h2>Siswa yang sudah mendaftar</h2>
    <a href="form_daftar.php">[+] Tambah Data</a><br><br>
    <table border="2">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 0;
        $ambil = "select * from tbl_pendaftar";
        $query = mysqli_query($conn, $ambil);
        $jml_siswa = mysqli_num_rows($query);

        if (!$query) {
            die ("Gagal terhubung ke database ".mysqli_errno($conn) . " " .mysqli_error($conn));
        }

        while ($a = mysqli_fetch_array($query)) {
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $a['nama']; ?></td>
            <td><?= htmlspecialchars($a['alamat']); ?></td>
            <td><?= htmlspecialchars($a['jenis_kelamin']); ?></td>
            <td><?= htmlspecialchars($a['agama']); ?></td>
            <td><?= htmlspecialchars($a['asal_sekolah']); ?></td>
            <td>
            <a href="form_edit.php?no_daftar=<?= $a['no_daftar']; ?>">Edit</a>
            <a href="hapus.php?no_daftar=<?= $a['no_daftar']; ?>">Hapus</a>
            </td>
        </tr>
        <?php }?>
    </table>
    <p>Total :
        <?= $jml_siswa ?>
    </p>
</body>
</html>