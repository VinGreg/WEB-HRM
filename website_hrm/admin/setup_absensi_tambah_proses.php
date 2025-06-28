<?php
include 'koneksi.php';
include "koneksi.php";

$jtanggal_efektif = $_POST['tanggal_efektif'];
$jumlah_hari_cuti = $_POST['jumlah_hari_cuti'];
$jumlah_hari_izin = $_POST['jumlah_hari_izin'];
$jumlah_hari_sakit = $_POST['jumlah_hari_sakit'];

$simpan = mysqli_query($koneksi, "INSERT INTO setup_absensi VALUES(NULL,'$tanggal_efektif','$jumlah_hari_cuti','$jumlah_hari_izin','$jumlah_hari_sakit')") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="setup_absensi_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="setup_absensi_tambah.php"</script>';
}

?>