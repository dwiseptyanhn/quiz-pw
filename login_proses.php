<?php
$username   = $_POST['username'];
$pass       = md5($_POST['password']);
 
include 'koneksi.php';
 
$login = mysqli_query($connect,"select * from login where username='$username' and password='$pass'");
$chek = mysqli_num_rows($login);
if($chek>0)
{
    session_start();
    $row = mysqli_fetch_array($login);
    $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
    header("location:welcome.php");
}else
{
    header("location:login.php");
}
?>