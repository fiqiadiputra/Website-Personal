<?php
include 'koneksi.php';
$id = "";
$tipe = "simpan";
$awal = "";
$akhir = "";
$tanggal = "";
$jam = "";
$kuota = "";
$po = "";
$supir = "";
$harga = "";
$fasilitas = "";

if (@$_GET['tipe'] == "ubah") {
    $tipe = "ubah";
    $id = $_GET['id'];
    $q = mysqli_query($k, "SELECT * FROM tabel_tiket WHERE id_tiket='$id'");
    $r = mysqli_fetch_assoc($q);
    $awal = $r['titik_awal'];
    $akhir = $r['titik_akhir'];
    $tanggal = $r['tgl'];
    $jam = $r['jam'];
    $kuota = $r['kuota'];
    $po = $r['po'];
    $supir = $r['supir'];
    $harga = $r['harga'];
    $fasilitas = $r['fasilitas'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Tiket</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>

<body>
    <form action="aksi.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="aksi" value="<?= $tipe ?>">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="card">
                        <div class="card-header bg-secondary text-white">
                            <h2>Form Tiket</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Titik Awal</label>
                                        <input type="text" name="awal" class="form-control" value="<?= $awal ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Titik Akhir</label>
                                        <input type="text" name="akhir" class="form-control" value="<?= $akhir ?>">
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Tanggal</label>
                                        <input type="date" name="tgl" class="form-control" value="<?= $tanggal ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Jam</label>
                                        <input type="time" name="jam" class="form-control" value="<?= $jam ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Kuota</label>
                                        <input type="number" name="kuota" class="form-control" value="<?= $kuota ?>">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">PO</label>
                                        <input type="text" name="po" class="form-control" value="<?= $po ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Supir</label>
                                        <input type="text" name="supir" class="form-control" value="<?= $supir ?>">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Harga</label>
                                        <input type="number" name="harga" class="form-control" value="<?= $harga ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Fasilitas</label>
                                        <input type="text" name="fasilitas" class="form-control"
                                            value="<?= $fasilitas ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="tiket.php" class="btn btn-secondary">Kembali</a>
                            <input type="submit" value="simpan" class="btn btn-secondary">
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>