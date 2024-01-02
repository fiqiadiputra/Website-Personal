<?php
include 'koneksi.php';
$awal = $_POST['awal'];
$akhir = $_POST['akhir'];
$tanggal = $_POST['tgl'];
$jam = $_POST['jam'];
$kuota = $_POST['kuota'];
$po = $_POST['po'];
$supir = $_POST['supir'];
$harga = $_POST['harga'];
$fasilitas = $_POST['fasilitas'];
$aksi = $_POST['aksi'];
$id = $_POST['id'];
if ($aksi == "simpan") {
    mysqli_query($k, "INSERT INTO tabel_tiket(titik_awal,titik_akhir,tgl,jam,harga,kuota,po,supir,fasilitas)VALUES('$awal','$akhir','$tanggal','$jam','$harga','$kuota','$po','$supir','$fasilitas')")or die(mysqli_error($k).mysqli_errno($k));
    echo "<script>alert('Data berhasil disimpan');location='tiket.php'</script>";
} elseif ($aksi == "ubah") {
    mysqli_query($k, "UPDATE tb_tiket set
        titik_awal = '$awal',
        titik_akhir = '$akhir',
        tgl = '$tanggal',
        jam = '$jam',
        harga = '$harga',
        kuota = '$kuota',
        po = '$po',
        supir = '$supir',
        fasilitas = '$fasilitas'
        WHERE id_tiket = '$id'")or die(mysqli_error($k).mysqli_errno($k));
    echo "<script>alert('Data berhasil diubah');location='tiket.php'</script>";
} else {
    echo "<script>alert('Error tidak dikenali');location='tiket.php'</script>";
}
