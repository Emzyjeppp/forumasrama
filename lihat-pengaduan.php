<?php
$id = $_GET['id'];
echo "ID: $id"; 
if(empty($id)){
    header("Location:masyarakat.php");
    exit(); 
}

include 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT * FROM pengaduan WHERE id_pengaduan='$id'");

if (!$query) {
    die(mysqli_error($koneksi)); // Menampilkan pesan kesalahan MySQL
}

$data = mysqli_fetch_array($query);

?>

<div class="card shadow">
<div class="card header">
<a href="?url=detail-pengaduan" class="btn btn-primary btn-icon-split">

    <span class="icon text-white-5">
        <i class="fa fa-arrow-left"></i>
    </span>
</a>
<div class="card-body">
            <form method="post" action="proses-aduan.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Tanggal Aduan</label>
                    <input type="text" name="tgl_pengaduan" class="form-control" readonly value="<?= $data['tgl_pengaduan'];?>">
                </div>
                <div class="form-group">
                    <label>Tulis Laporan</label>
                    <textarea name="isi_laporan" class="form-control" id="" cols="30" rows="10"><?= $data['isi_laporan']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Foto</label>
                    <img class="img-thumbnail" src="foto/<?= $data['foto']; ?>" width="300 "alt="">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
