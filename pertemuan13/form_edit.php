<?php
include ("helper/koneksi.php");

if( !isset($_GET['no_daftar']) ){
    header('Location: list_siswa.php');
}

$no_daftar = $_GET['no_daftar'];

$edit = "SELECT * FROM tbl_pendaftar WHERE no_daftar=$no_daftar";
$query = mysqli_query($conn, $edit);
$siswa = mysqli_fetch_assoc($query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa</title>
</head>
<body>
    <h2>Formulir Edit Siswa</h2>
    <div style="border: 2px solid #000; padding: 5px;">
    
        <form action="form_edit.php" method="post">
            <label for="nama">Nama :</label>
            <input type="hidden" name="no_daftar" value="<?= htmlspecialchars($siswa['no_daftar']);?>" />
            <input type="text" name="nama" value="<?= $siswa['nama'];?>" placeholder="nama lengkap"><br><br>
            <label for="alamat">Alamat :</label>
            <textarea name="alamat" cols="30" rows="3"><?= htmlspecialchars($siswa['alamat']);?></textarea><br><br>
            <label for="gender">Jenis Kelamin :</label>
            <?= $jk = $siswa['jenis_kelamin'];?>
            <input type="radio" name="jenis_kelamin" value="L" <?= htmlspecialchars($jk == 'L') ? "checked": ""?>> Laki - Laki
            <input type="radio" name="jenis_kelamin" value="P" <?= htmlspecialchars($jk == 'P') ? "checked": ""?>> Perempuan
            <br><br>
            <label for="agama">Agama :</label>
            <?= $agama = $siswa['agama']; ?>
            <select name="agama">
                <option <?= htmlspecialchars($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                <option <?= htmlspecialchars($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                <option <?= htmlspecialchars($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                <option <?= htmlspecialchars($agama == 'Buddha') ? "selected": "" ?>>Buddha</option>
                <option <?= htmlspecialchars($agama == 'Protestan') ? "selected": "" ?>>Protestan</option>
            </select><br><br>
            <label for="asal">Asal Sekolah :</label>
            <input type="text" name="asal_sekolah" value="<?= htmlspecialchars($siswa['asal_sekolah']);?>" placeholder="nama sekolah"><br><br>
            <input type="submit" name="ubah" value="Update"> 
        </form>
    </div>
</body>
</html>

<?php

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