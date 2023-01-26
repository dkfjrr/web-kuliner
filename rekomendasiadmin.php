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
                     <li><a href="bandungadmin.php">Bandung</a></li>
                     <li><a href="jakartaadmin.php">Jakarta</a></li>
                  </ul>
                <li><a href="rekomendasiadmin.php">rekomendasi</a></li>
                <li><a href="logout.php">logout</a></li>
              </ul>
            </div>
    </head>

    <body>
        <h2 class="judul">Rekomendasi kuliner di Bandung</h2>

        <a href="tambahdata2.php">tambah data</a>


        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama kuliner</th>
                    <th>nama tempat</th>
                    <th>lokasi</th>
                    <th>jam operasi</th>
                    <th colspan="2">aksi</th>
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
                <td><a href='editdata2.php?kode=$data[id_rekomendasi]'>Edit</a></td>
                <td><a href='? kode=$data[id_rekomendasi]'> Delete </a></td> 
            </tr>";
            }
            ?>
        </table>
        <?php
            if (isset($_GET['kode'])){
                mysqli_query($kon,"delete from rekomendasi where id_rekomendasi='$_GET[kode]'");

                echo "<script>alert('data telah terhapus');</script>";
                echo "<meta http-equev=refresh content=0;URL='rekomendasiadmin.php'>";
            }
            ?>

    </body>
    <footer>
         <p class="footer"> &copy; diki 2022</p>
    </footer>
</html>