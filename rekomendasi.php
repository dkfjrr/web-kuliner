<!DOCTYPE html>
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

    <body>
        <h2 class="judul">Rekomendasi kuliner di Bandung</h2>


        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama kuliner</th>
                    <th>nama tempat</th>
                    <th>lokasi</th>
                    <th>jam operasi</th>
                </tr>
            </thead>
            <?php
            include "koneksi.php";
            $no = 1;
            $ambildata = mysqli_query($kon, 'SELECT * FROM rb');
            while ($data = mysqli_fetch_array($ambildata)) {
             echo "
            <tr>
                <td>$data[id_rekomendasi]</td>
                <td>$data[namaKuliner]</td>
                <td>$data[nama_tempat]</td>
                <td>$data[lokasi]</td>
                <td>$data[jam_operasi]</td>
            </tr>";
            }
            ?>
        </table>
    </body>
    <footer>
         <p class="footer"> &copy; diki 2022</p>
    </footer>
</html>