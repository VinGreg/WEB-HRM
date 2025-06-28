<?php
include 'koneksi.php';

$id = $_POST['id'];
$kode_pendidikan = $_POST['kode_pendidikan'];
$nama_pendidikan = $_POST['nama_pendidikan'];


$simpan = mysqli_query($koneksi, "UPDATE pendidikan SET kode_pendidikan='$kode_pendidikan',nama_pendidikan='$nama_pendidikan' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="pendidikan_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="pendidikan.php"</script>';
}

?>