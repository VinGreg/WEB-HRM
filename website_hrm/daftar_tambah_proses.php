<?php
include 'koneksi.php';


$username = $_POST['username'];
$password = $_POST['password'];
$roles = $_POST['roles'];
$nama_lengkap = $_POST['nama_lengkap'];


$cek = mysqli_query($koneksi, "SELECT * FROM user WHERE roles='$roles'");
if (mysqli_num_rows($cek) > 0) {

	$simpan = mysqli_query($koneksi, "INSERT INTO user VALUES(NULL,'$username','$password','$roles','$nama_lengkap')") or die(mysqli_error($koneksi));


	if ($simpan) {
		echo "<script>alert('Daftar akun berhasil silahkan login')</script>";
		echo '<script type="text/javascript">window.location="index.php"</script>';
	} else {
		echo "<script>alert('Daftar akun gagal periksa data anda ')</script>";
		echo '<script type="text/javascript">window.location="daftar.php"</script>';
	}
} else {
	// NIK not found, show popup
	echo "<script>
		alert('Tidak terdapat role yang dimaksud');
		window.location = 'daftar.php'; // Redirect back to the input page
	</script>";
}
?>
