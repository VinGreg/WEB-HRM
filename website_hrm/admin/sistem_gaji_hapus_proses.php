<?php
include 'koneksi.php';
include "koneksi.php";

$id = $_POST['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM sistem_gaji WHERE id='$id'") or die(mysqli_error($koneksi));

if ($hapus) {
	echo "<script>alert('Data Berhasil dihapus ')</script>";
	echo '<script type="text/javascript">window.location="sistem_gaji_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="sistem_gaji_tampil.php"</script>';
}

?>