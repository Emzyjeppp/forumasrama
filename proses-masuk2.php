<?php
include 'koneksi.php';

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if (empty($username) || empty($password)) {
    echo "<script>alert('Masukkan username dan kata sandi'); window.location.assign('index.php');</script>";
    exit();
}


$email = mysqli_real_escape_string($koneksi, $username);


$sql = "SELECT * FROM petugas WHERE username=?";
$stmt = mysqli_prepare($koneksi, $sql);
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);


if ($result) {
    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);
        // Debug: Output hashed password from the database
        $hashedPasswordFromDatabase = $data['password'];
        
        // Verify password using password_verify
            if (password_verify($password, $hashedPasswordFromDatabase)) {
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['nama'] = $data['nama'];
                $_SESSION['nik'] = $data['nik']; // Add user's unique identifier to the session if needed
                header("Location: masyarakat.php");
                exit();
            } else {
                echo "<script>alert('Maaf Anda Gagal Login. Password tidak sesuai.'); window.location.assign('index2.php');</script>";
            }
    } else {
        echo "<script>alert('Maaf Anda Gagal Login. Email tidak ditemukan.'); window.location.assign('index2.php');</script>";
    }
} else {
    // Check for SQL errors
    error_log("Error: " . mysqli_error($koneksi));
}
?>
