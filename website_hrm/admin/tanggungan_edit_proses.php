<?php
include 'koneksi.php';
include "koneksi.php";

$id = $_POST['id'];
$nik_kar = $_POST['nik_kar'];
$nama_tanggungan = $_POST['nama_tanggungan'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hubungan_dgn_kar = $_POST['hubungan_dgn_kar'];


$simpan = mysqli_query($koneksi, "UPDATE tanggungan SET nik_kar='$nik_kar',nama_tanggungan='$nama_tanggungan',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',jenis_kelamin='$jenis_kelamin',hubungan_dgn_kar='$hubungan_dgn_kar' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="tanggungan_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="tanggungan.php"</script>';
}

?>