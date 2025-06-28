<?php
include 'koneksi.php';
include "koneksi.php";

$id = $_POST['id'];
$nik_riw = $_POST['nik_riw'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$tanggal_lulus = $_POST['tanggal_lulus'];
$jurusan = $_POST['jurusan'];


$simpan = mysqli_query($koneksi, "UPDATE riwayat_pendidikan SET nik_riw='$nik_riw',pendidikan_terakhir='$pendidikan_terakhir',tanggal_lulus='$tanggal_lulus',jurusan='$jurusan' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="riwayat_pendidikan_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="riwayat_pendidikan.php"</script>';
}

?>