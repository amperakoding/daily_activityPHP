<?php
include "koneksi.php";

if(isset($_POST['ubah']))
{  
  $id_kegiatan    = $_POST['id_kegiatan'];
  $nama_kegiatan  = $_POST['nama_kegiatan'];
  $tgl_kegiatan   = $_POST['tgl_kegiatan'];
  
  $query = "UPDATE kegiatan SET nama_kegiatan = '$nama_kegiatan', tgl_kegiatan = '$tgl_kegiatan' 
              WHERE id_kegiatan = '$id_kegiatan'";
  
  if(mysqli_query($koneksi, $query))
  {
    header("Location: kegiatan.php"); 
    // echo "Data berhasil ditambahkan";
    // echo "<p><a href='index.php'>Kembali ke halaman daftar kegiatan</a></p>";
  }
    else{
      echo "Proses update gagal, silahkan coba lagi";
    }
}
else{
  echo "Harap melalui proses penambahan data yang benar";
  echo "<p><a href='tambah.php'>Kembali ke halaman tambah kegiatan</a></p>";
}
?>