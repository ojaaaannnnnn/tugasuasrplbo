<?php
//Include file koneksi ke database
include "connection.php";

$username = $_POST["username"];
$password = $_POST["password"];
$level = $_POST["level"];

$sql2 = "insert into user (username, password, level) values ('$username', '$password', '$level')";

if (mysqli_query($connection, $sql2)) {
      echo "<h1>Username $username berhasil terdaftar</h1>
            <a href='pages/index.php'>Kembali Login</h1>
         ";
} else {
      echo "Pendaftaran Gagal : " . mysqli_error($connection);
}
?>