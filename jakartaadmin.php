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
                <li><a href="indexadmin.php">Home</a></li>
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
        <h2 class="judul">Kuliner yang ada di Jakarta</h2>

            <a href="tdjakarta.php">tambah data</a>

            <table border='1'>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nama kuliner</th>
                        <th>keterangan</th>
                        <th colspan="3">aksi</th> 
                    </tr>
                </thead>
            <?php
                include "koneksi.php";
                $no = 1;
                $ambildata = mysqli_query($kon, 'SELECT * FROM jakarta');
                while ($data = mysqli_fetch_array($ambildata)) {
                    echo "
                <tr>
                    <td>$data[id]</td>
                    <td>$data[nama]</td>
                    <td>$data[keterangan]<td>
                    <td><a href='editjakarta.php?kode=$data[id]'>Edit</a></td> 
                    <td><a href='? kode=$data[id]'> Delete </a></td> 
                </tr>";
                }
                ?>
            </table>

            <?php
            if (isset($_GET['kode'])){
                mysqli_query($kon,"delete from jakarta where id='$_GET[kode]'");

                echo "<script>alert('data telah terhapus');</script>";
                echo "<meta http-equev=refresh content=0;URL='jakartaadmin.php'>";
            }
            ?>
       

        <footer>
           <p class="footer"> &copy; diki 2022</p>
        </footer>
    </body>
    
</html>
   
