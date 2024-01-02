<?php
   
   include 'koneksi.php';
   $id = $_GET['id'];
   mysqli_query($k, "DELETE FROM tabel_tiket WHERE id_tiket='$id'");
   echo "<script>alert('data berhasil di hapus'); location='tiket.php'</script>";