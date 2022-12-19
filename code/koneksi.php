<?php 
$host = "localhost"; 
$user = "bramleo19"; 
$password = "";
$db = "latihan1";
$conn = mysqli_connect($host, $user, $password, $db);
if ($conn == false) 
{ 
    echo "Koneksi ke server gagal."; 
    die(); 
} else echo "Koneksi berhasil"; 
?>