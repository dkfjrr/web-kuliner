<?php
include "koneksi.php";
$sql=mysqli_query($kon,"select * from jakarta where id='$_GET[kode]'");
$data=mysqli_fetch_array($sql);
?>

<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/inicss.css">
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
            <td><input type="text" name="id" value="<?php echo $data['id'];?>"></td>
        </tr>
        <tr>
            <td width = "130">nama kuliner :</td>
            <td><input type="text" name="nama" value="<?php echo $data['nama'];?>"></td>
        </tr>
        <tr>
            <td width="130">keterangan :</td>
            <td><input type="text" name="keterangan" value="<?php echo $data['keterangan'];?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
        </tr>
    </table>
</form>

<a href="jakartaadmin.php">kembali</a>

<?php
    include "koneksi.php";

    if(isset($_POST['proses'])){
        mysqli_query($kon,"update jakarta set
        nama = '$_POST[nama]',
        keterangan = '$_POST[keterangan]'
        where id = '$_GET[kode]'");

        echo ("Data Telah Diubah");
        echo "<meta http-equev=refresh content=0;URL='jakartaadmin.php'>";
    }
?>

    <footer>
        <p class="footer"> &copy; diki 2022</p>
    </footer>

    </body>
</html>


