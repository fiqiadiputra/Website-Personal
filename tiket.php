<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LATIHAN LSP</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="card">
                    <div class="card-header bg-secondary text-white">
                    <h1> DAFTAR TIKET</h1>
                    </div>
                    
                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Rute</td>
                                    <td>Tanggal</td>
                                    <td>PO</td>
                                    <td>Fasilitas</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $q = mysqli_query($k,"select * from tabel_tiket");
                                    $no = 1;
                                    while($d = mysqli_fetch_assoc($q)){
                                ?>
                                <tr>
                                    <td> <?=$no++?> </td>
                                    <td> <?=$d['titik_awal']?> - <?=$d['titik_akhir']?> </td>
                                    <td> <?=$d['tgl']?> - <?=$d['jam']?></td>
                                    <td> <?=$d['po']?> / <?=$d['supir']?> </td>
                                    <td> <?=$d['fasilitas']?></td>
                                    <td>
                                        <a onclick="return confirm('Apakah anda yakin Dek ?')" 
                                        href="hapus.php?id=<?=$d['id_tiket']?>"
                                        class="btn btn-sm btn-outline-danger">Hapus</a>
                                    
                                    <a href="formtiket.php?tipe=ubah&id=<?=$d['id_tiket']?>"
                                     class="btn btn-sm btn-outline-primary">Edit</a>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                    <a href="formtiket.php" class="btn btn-outline-secondary">Tambah</a>
                    
                    </div>
                </div>
            </div>
        </div> 
    </div>

</body>
</html>