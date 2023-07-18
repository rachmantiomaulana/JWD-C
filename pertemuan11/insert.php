<?php 
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $no = $_POST['no'];
    $nama_merk = $_POST['nama_merk'];
    $warna = $_POST['warna'];
    $jumlah = $_POST['jumlah'];

    $sql = "INSERT INTO printer VALUES ('$no', '$nama_merk', '$warna', '$jumlah')";
    $hasil = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if ($hasil) {
        echo '<script>window.location="index.php"</script>';
    } else {
        echo "Error: ".$sql."<br>".mysqli_error($conn);
    }
}
?>