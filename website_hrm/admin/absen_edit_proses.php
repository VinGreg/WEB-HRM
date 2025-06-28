<?php
include 'koneksi.php';

$id = $_POST['id'];
$nik = $_POST['nik'];
$tanggal = $_POST['tanggal'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];



$simpan = mysqli_query($koneksi, "UPDATE absen SET nik='$nik',tanggal='$tanggal', jam_masuk='$jam_masuk', jam_keluar='$jam_keluar' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="absen_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="absen.php"</script>';
}

?>