<?php
$nik = isset($_POST['nik']) ? $_POST['nik'] : '';
$nama = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$telp = isset($_POST['telp']) ? $_POST['telp'] : '';

// Hash the password using bcrypt
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

include 'koneksi.php';

$sql = "INSERT INTO masyarakat (nik, nama, email, password, telp) VALUES ('$nik', '$nama', '$email', '$hashedPassword', '$telp')";

$query = mysqli_query($koneksi, $sql);

if ($query) {
    echo "<script>alert('Anda Berhasil Mendaftar.'); window.location.assign('index.php');</script>";
} else {
    echo "<script>alert('Anda Gagal Mendaftar.'); window.location.assign('register.php');</script>";
}
?>
