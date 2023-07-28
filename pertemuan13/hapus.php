<?php
include "helper/koneksi.php";

if (isset($_GET['no_daftar'])) {
    $no = $_GET['no_daftar'];

    $hapus = "DELETE FROM tbl_pendaftar WHERE no_daftar='$no'";
    $query = mysqli_query($conn, $hapus);

    if ($query) {
        header("location: list_siswa.php");
    }else {
        die("Gagal menghapus...");
    }
} 
?>