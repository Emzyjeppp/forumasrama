<?php
session_start();

// Mengatur error reporting untuk menampilkan semua jenis kesalahan
error_reporting(E_ALL);
ini_set('display_errors', 1);

try {
    // Ambil data dari formulir
    $tgl_pengaduan = $_POST['tgl_pengaduan'];
    $nik = $_SESSION["nik"];
    $isi_laporan = $_POST['isi_laporan'];
    $lokasi_foto = $_FILES["foto"]['tmp_name'];
    $nama_foto = $_FILES["foto"]['name'];
    $status = 0;

    // Pindahkan file foto ke direktori yang diinginkan
    if (move_uploaded_file($lokasi_foto, "foto/" . $nama_foto)) {
        // Koneksi ke database
        include "koneksi.php";

        // Query SQL untuk menyimpan pengaduan
        $sql = "INSERT INTO pengaduan (tgl_pengaduan, nik, isi_laporan, foto, status) 
                VALUES ('$tgl_pengaduan', '$nik', '$isi_laporan', '$nama_foto', '$status')";

        // Eksekusi query
        if (mysqli_query($koneksi, $sql)) {
            // Jika berhasil, tampilkan pesan sukses dan kembali ke halaman masyarakat.php
            echo "<script>alert('Pengaduan Sudah Tersimpan'); window.location.assign('masyarakat.php');</script>";
        } else {
            // Jika gagal, tampilkan pesan kesalahan dan kembali ke halaman formulir
            echo "<script>alert('Pengaduan Gagal Tersimpan: " . mysqli_error($koneksi) . "'); window.location.assign('masyarakat.php?url-tulis-pengaduan');</script>";
        }
    } else {
        // Jika gagal mengunggah foto, tampilkan pesan kesalahan dan kembali ke halaman formulir
        echo "<script>alert('Upload foto gagal'); window.location.assign('masyarakat.php?url=tulis');</script>";
    }
} catch (Exception $e) {
    echo 'Terjadi kesalahan: ' . $e->getMessage();
}
?>
