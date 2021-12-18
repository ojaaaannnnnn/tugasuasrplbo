<?php
$host="localhost";
$user="root";
$password="";
$db="multilogin";
$connection = mysqli_connect($host,$user,$password,$db);
if (!$connection){
	  die("Koneksi gagal:".mysqli_connect_error());
}

?>
