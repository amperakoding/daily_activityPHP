<?php 
$host     = "localhost";
$username = "root";
$password = "";
$database = "daily_activityPHP";

$koneksi = new mysqli($host, $username, $password, $database);
if($koneksi->connect_error)
{
  die("Koneksi ke database tidak berhasil: ".$koneksi->connect_error);
}

?>
