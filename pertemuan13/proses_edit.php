<?php

include "helper/koneksi.php";

if (isset($_POST['ubah'])) {
    $no_daftar = $_POST['no_daftar'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];

    $sql = "UPDATE tbl_pendaftar SET nama = '$nama',
                                     alamat = '$alamat',
                                     jenis_kelamin = '$jk',
                                     agama = '$agama',
                                     asal_sekolah = '$asal_sekolah' WHERE no_daftar = $no_daftar";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        header("location: list_siswa.php");
    } else {
        die("Gagal edit data ");
    }
}