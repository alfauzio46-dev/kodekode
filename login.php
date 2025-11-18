<?php
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    // login berhasil
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Username atau password salah'); window.location='index.html';</script>";
}
?>
