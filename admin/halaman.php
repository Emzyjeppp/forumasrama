<?php
if(isset($_GET['url'])){
    switch ($_GET['url']) {
        case 'tulis':
            include 'tulis-pengaduan.php';
            break;

        case 'lihat':
            include 'lihat-aduan.php';
            break;

        case 'detail-pengaduan':
                include 'lihat-aduan.php';
                break;

         default:
            echo "Halaman Tidak Ditemukan";
            break;
    }
} else {
    echo "Selamat Datang Di Aplikasi LaporAspirasi, Dimana Aplikasi ini dibuat untuk melaporkan tindakan yang menyimpang dari ketentuan.<br>";
    echo "Anda Login Sebagai: ".$_SESSION['nama']; 
}
?>
