<div class="card shadow">
<div class="card header">
<a href="masyarakat.php" class="btn btn-primary btc-icon-split">
    <span class="icon text-white-5">
        <i class="fa fa-arrow-left"></i>
    </span>
</a>
    <div class="card-body">
    <form method="post" action="proses-aduan.php" enctype="multipart/form-data">

    <div class="form-group">
        <label>Tanggal Aduan</label>
        <input type="text" name="tgl-pengaduan" class="form-control" readonly value="<?= date('Y-m-d'); ?>">
    </div>
    <div class="form-group">
        <label>Tulis Laporan</label>
        <textarea name="isi_laporan" class="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file"  required class="form-control" name="foto" accept="image/*">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Kirim</button>
    </div>
    </form>
</div>
</div>
</div>