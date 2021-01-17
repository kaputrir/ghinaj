<?php
include'koneksi.php';
?>
<?php
session_start();
if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $login = ("SELECT * FROM login WHERE username = '$username'");
        $hasil = mysql_query($login) or die("Error");
        $d = mysql_fetch_array($hasil);
        if($password == $d['password'])
        {
            $_SESSION['username'] = $username;
        echo"<script>alert('Selamat Datang')</script>";
	echo "<meta http-equiv='refresh' content='0;url=tranksasi.php'>";
        }else{
            echo"<script>alert('Username atau password salah')</script>";
        }
}


?>