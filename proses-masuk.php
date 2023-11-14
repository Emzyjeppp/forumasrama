<?php
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (empty($email) || empty($password)) {
    echo "<script>alert('Masukkan email dan kata sandi'); window.location.assign('index.php');</script>";
    exit();
}

include 'koneksi.php';

$email = mysqli_real_escape_string($koneksi, $email);

$sql = "SELECT * FROM masyarakat WHERE email='$email'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_assoc($query);

        // Verify password using password_verify
        if (password_verify($password, $data['password'])) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['nama'] = $data['nama'];
            $_SESSION['nik'] = $data['nik']; // Add user's unique identifier to the session if needed
            header("Location: masyarakat.php");
            exit();
        } else {
            echo "<script>alert('Maaf Anda Gagal Login. Password tidak sesuai.'); window.location.assign('index.php');</script>";
        }
    } else {
        echo "<script>alert('Maaf Anda Gagal Login. Email tidak ditemukan.'); window.location.assign('index.php');</script>";
    }
} else {
    // Check for SQL errors
    echo "Error: " . mysqli_error($koneksi);
}
?>
