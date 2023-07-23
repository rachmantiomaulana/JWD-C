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
        </tr>
        <?php
        $query = "select * from tbl_pendaftar";
        $list = mysqli_query($conn, $query);
        $jml_siswa = mysqli_num_rows($list);

        if (!$list) {
            die ("Gagal terhubung ke database ".mysqli_errno($conn) . " " .mysqli_error($conn));
        }

        while ($a = mysqli_fetch_assoc($list)) {
        ?>
        <tr>
            <td><?= htmlspecialchars($a['no']); ?></td>
            <td><?= $a['nama']; ?></td>
            <td><?= htmlspecialchars($a['alamat']); ?></td>
            <td><?= htmlspecialchars($a['jenis_kelamin']); ?></td>
            <td><?= htmlspecialchars($a['agama']); ?></td>
            <td><?= htmlspecialchars($a['asal_sekolah']); ?></td>
        </tr>
        <?php }?>
    </table>
    <p>Total :
        <?= $jml_siswa ?>
    </p>
</body>
</html>