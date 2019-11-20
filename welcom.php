	
<?php
session_start();
?>
 
Selamat Datang Users <?php echo $_SESSION['nama_lengkap']?>
 
<a href="logout.php">Logout</a>