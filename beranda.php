<?php 
session_start();
if ($_SESSION['username'] == null) {
	header("location:login.php");
	// code...
}



echo $_SESSION['username'];
echo $_SESSION['nama'];


 ?>

 <a href="logout.php">logout</a>