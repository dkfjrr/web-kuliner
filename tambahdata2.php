<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>web kuliner</title>
         <link rel="stylesheet" type="text/css" href="css/inicss.css">
            <div class="menu">
              <ul id="navigasi">
                <li><a href="#">Home</a></li>
                <li class="dropdown"><a href="#">kuliner</a>
                  <ul class="isi_dropdown">
                     <li><a href="bandung.php">Bandung</a></li>
                     <li><a href="jakarta.php">Jakarta</a></li>
                  </ul>
                <li><a href="rekomendasi.php">rekomendasi</a></li>
                <li><a href="login.php">login</a></li>
              </ul>
            </div>
    </head>

<h3 style=text-align:center>Tambah Data Rekomendasi</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">id :</td>
            <td><input type="text" name="id_rekomendasi"></td>
        </tr>
        <tr>
            <td width = "130">nama kuliner :</td>
            <td><input type="text" name="namaKuliner"></td>
        </tr>
        <tr>
            <td width="130">nama tempat :</td>
            <td><input type="text" name="nama tempat"></td>
        </tr>
        <tr>
            <td width="130">lokasi :</td>
            <td><input type="text" name="lokasi"></td>
        </tr>
        <tr>
            <td width="130">jam operasi :</td>
            <td><input type="text" name="jam operasi"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
        </tr>
    </table>
</form>

<a href="rekomendasiadmin.php">kembali</a>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){

    mysqli_query($kon,"insert into rekomendasi set
    id_rekomendasi = '$_POST[id_rekomendasi]',
    namaKuliner = '$_POST[namaKuliner]',
    nama_tempat= '$_POST[nama_tempat]',
    lokasi= '$_POST[lokasi]',
    jam_operasi= '$_POST[jam_operasi]'");


    echo("data tersimpan");

}
?>

    <footer>
        <p class="footer"> &copy; diki 2022</p>
    </footer>