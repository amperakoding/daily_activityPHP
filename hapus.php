<?php
include "koneksi.php";

$id_kegiatan    = $_GET['id_kegiatan'];

$query = "DELETE FROM kegiatan WHERE id_kegiatan = '$id_kegiatan'";

if(mysqli_query($koneksi, $query))
{
  header("Location: index.php"); 
}
else
{
  echo "Proses hapus data gagal, silahkan coba lagi";
}
?>