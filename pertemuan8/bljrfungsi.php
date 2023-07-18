<?php 
function perkenalan(){
    // instruksi
    echo "Selamat Datang, ";
    echo ("Pada Digital Talent ");
    echo '2023<br/>';
}

// memanggil fungsi
perkenalan();

function perkenalan_input($nama, $salam){
    echo "<hr>";
    echo $salam.",";
    echo "perkenalkan, nama saya ".$nama."<br>";
    echo "Senang berkenalan dengan anda";

}

perkenalan_input("rachman tio", "Selamat Pagi");

$nama = "Yanto";
$salam = "Selamat Siang";
perkenalan_input($nama, $salam);
perkenalan_input($salam = "Selamat Pagi", $nama ="Andi");

function hitungumur($thn_lahir, $thn_sekarang=2023){
    $umur = $thn_sekarang-$thn_lahir;
    return $umur;
}

echo ("\n umur saya adalah ".hitungumur(2003));