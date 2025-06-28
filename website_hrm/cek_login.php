<?php
session_start();
include('admin/koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'")
    or die(mysqli_error($koneksi));
$cek = mysqli_num_rows($sql);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($sql);
    if ($data['roles'] == "admin") {
        $_SESSION['username'] = $data['username'];
        $_SESSION['roles'] = $data['roles'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        header("location:admin/index.php");


    } elseif ($data['roles'] == "user") {
        $_SESSION['username'] = $data['username'];
        $_SESSION['roles'] = $data['roles'];
        $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
        header("location:user/index.php");
    } else {
        header("location:index.php");
    }
} else {
    header("location:index.php");
}
?>
