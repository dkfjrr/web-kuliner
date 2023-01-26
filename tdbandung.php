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
                     <li><a href="bandungadmin.php">Bandung</a></li>
                     <li><a href="jakartaadmin.php">Jakarta</a></li>
                  </ul>
                <li><a href="rekomendasiadmin.php">rekomendasi</a></li>
                <li><a href="logout.php">logout</a></li>
              </ul>
            </div>
    </head>
    <header>
        <h3 style=text-align:center; >Tambah data</h3>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td width="130">id :</td>
                    <td><input type="text" name="idkuliner"></td>
                </tr>
                <tr>
                    <td width = "130">nama kuliner :</td>
                    <td><input type="text" name="namakuliner"></td>
                </tr>
                    <td width = "130">keterangan :</td>
                    <td><input type="text" name="keterangan"></td>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan" name="proses"></td>
                </tr>
            </table>
        </form>

        <a href="bandungadmin.php">kembali</a>

        <?php
        include "koneksi.php";

        if(isset($_POST['proses'])){
            mysqli_query($kon,"insert into bandung set
            id = '$_POST[idkuliner]',
            nama_kuliner = '$_POST[namakuliner]',
            keterangan = '$_POST[keterangan]'");
            
            echo("data tersimpan");
        }

        ?>

        <footer>
           <p class="footer"> &copy; diki 2022</p>
        </footer>
    </body>