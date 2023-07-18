<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "data";

$conn = mysqli_connect($host, $user, $password, $db);

if (!$conn) {
    die ("Gagal terhubung ke database ".mysqli_connect_errno($conn) ."-" .mysqli_connect_error());
}

?>