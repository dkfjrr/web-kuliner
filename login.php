<?php
session_start();
include "koneksi.php";
?>

<header>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <title>web kuliner</title>
         <link rel="stylesheet" type="text/css" href="css/inicss.css">
            <div class="menu">
              <ul id="navigasi">
                <li><a href="index.php">Home</a></li>
                <li class="dropdown"><a href="#">kuliner</a>
                  <ul class="isi_dropdown">
                     <li><a href="bandung.php">Bandung</a></li>
                     <li><a href="jakarta.php">Jakarta</a></li>
                  </ul>
                <li><a href="rekomendasi.php">rekomendasi</a></li>
                <li><a href="login.php">login</a></li>
              </ul>
            </div>
</header>

<form action="" method="POST">
    <table align="center">
        <tr>
            <th colspan="2" height="40">LOGIN FORM</th>
        </tr>
        <tr>
            <td width="100"> Username </td>
            <td> <input type="text" name="username"> </td>
        </tr>
        <tr>
            <td width="100"> Password </td>
            <td> <input type="password" name="password"> </td>
        </tr>
        <tr>
            <td></td>
            <td> <input type="submit" value="login" name="proseslog"> </td>
        </tr>
    </table>
</form>

    <footer>
         <p class="footer"> &copy; diki 2022</p>
    </footer>

<?php
if(isset($_POST['proseslog'])){
    $sql = mysqli_query($kon, "SELECT * FROM user where username = '$_POST[username]'
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if($cek > 0){
        $_SESSION['username'] = $_POST['username'];

        echo "<meta http-equiv=refresh content=0;URL='indexadmin.php'>";
    }else{
        echo "<p align=center><b> Username dan Password salah! </b></p>";
        echo "<meta http-equiv=refresh content=3;URL='login.php'>";
    }
}