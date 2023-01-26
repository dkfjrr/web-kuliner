<?php
$hostname = "localhost";
$database = "kuliner";
$username = "root";
$password = "";

$kon = mysqli_connect($hostname, $username, $password, $database);
if (!$kon) {
    die("koneksi tidak berhasil : " . mysqli_connect_error());
}

?>