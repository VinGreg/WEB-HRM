<?php
include 'koneksi.php';
include "koneksi.php";

$id = $_POST['id'];
$tanggal_efektif = $_POST['tanggal_efektif'];
$jam_masuk_set = $_POST['jam_masuk_set'];
$jam_keluar_set = $_POST['jam_keluar_set'];
$jam_masuk_old = $_POST['jam_masuk_old'];
$jam_keluar_old = $_POST['jam_keluar_old'];

$simpan = mysqli_query($koneksi, "UPDATE setup_jam SET tanggal_efektif='$tanggal_efektif', jam_masuk_set='$jam_masuk_set',jam_keluar_set='$jam_keluar_set',jam_masuk_old='$jam_masuk_old', jam_keluar_old='$jam_keluar_old' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="setup_jam_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="setup_jam.php"</script>';
}

?>