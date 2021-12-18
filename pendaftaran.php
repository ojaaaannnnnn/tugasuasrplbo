<?php
//Include file koneksi ke database
include "connection.php";

//menerima nilai dari kiriman form pendaftaran
$nama_band=$_POST["nama_band"];
$jumlah_personil=$_POST["jumlah_personil"];
$no_hp=$_POST["no_hp"];
$lagu=$_POST["lagu"];

$username = $_POST["username"];
$password = $_POST["password"];
$level = $_POST["level"];


  $sql="insert into Pendaftaran (nama_band,jumlah_personil,no_hp,lagu) values
		('$nama_band','$jumlah_personil','$no_hp','$lagu')";
  $sql2 = "insert into user (username, password, level) values ('$username', '$password', '$level')";


//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($connection,$sql);
  $hasil2=mysqli_query($connection,$sql2);
  
//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "<h1>Username $nama_band berhasil terdaftar</h1>
            <a href='halstudent.php'>Kembali</h1>
         ";
	
  }
else {
	echo "Pendaftaran Gagal : "  .mysqli_error($connection);
	
}  

?>