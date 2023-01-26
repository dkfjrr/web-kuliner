<?php
include "koneksi.php";
$sql=mysqli_query($kon,"select * from rekomendasi where id_rekomendasi='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>

<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/inicss.css">
    <div class="menu">
              <ul id="navigasi">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown"><a href="#">kuliner</a>
                  <ul class="isi_dropdown">
                     <li><a href="bandungadmin.php">Bandung</a></li>
                     <li><a href="jakartaadmin.php">Jakarta</a></li>
                  </ul>
                <li><a href="rekomendasiadmin.php">rekomendasi</a></li>
                <li><a href="logout.php">logout</a></li>
              </ul>
            </div>
    <header>
        <h3 style=text-align:center>Edit Data</h3>
    </header>
    </head>
    <body>
    <form action="" method="post">
    <table>
        <tr>
            <td width="130">id :</td>
            <td><input type="text" name="id_rekomendasi" value="<?php echo $data['id_rekomendasi'];?>"></td>
        </tr>
        <tr>
            <td width = "130">nama kuliner :</td>
            <td><input type="text" name="namaKuliner" value="<?php echo $data['namaKuliner'];?>"></td>
        </tr>
        <tr>
            <td width="130">nama tempat :</td>
            <td><input type="text" name="nama tempat" value="<?php echo $data['nama_tempat'];?>"></td>
        </tr>
        <tr>
            <td width="130">lokasi :</td>
            <td><input type="text" name="lokasi" value="<?php echo $data['lokasi'];?>"></td>
        </tr>
        <tr>
            <td width="130">jam operasi :</td>
            <td><input type="text" name="jam_operasi" value ="<?php echo $data['jam_operasi'];?>"></td>
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
        mysqli_query($kon,"update rekomendasi set
        namaKuliner = '$_POST[namaKuliner]',
        nama_tempat = '$_POST[nama_tempat]',
        lokasi = '$_POST[lokasi]',
        jam_operasi = '$_POST[jam_operasi]'
        where id_rekomendasi = '$_GET[kode]'");

        echo ("Data Telah Diubah");
        echo "<meta http-equev=refresh content=0;URL='rekomendasiadmin.php'>";
    }
?>

    <footer>
        <p class="footer"> &copy; diki 2022</p>
    </footer>

    </body>
</html>


