<?php
$server = "localhost";
$username = "root";
$pass = "";
$db = "db_crud"; 
$koneksi = mysqli_connect($server, $username, $pass, $db);

 if(mysqli_connect_errno()){
     echo "Koneksi database gagal : " . mysqli_connect_error();
 }
?>
