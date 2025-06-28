<?php
include 'koneksi.php';
include "koneksi.php";

$id = $_POST['id'];
$jumlah_hari = $_POST['jumlah_hari'];

$simpan = mysqli_query($koneksi, "UPDATE setup_absensi SET tanggal_efektif='$tanggal_efektif',jumlah_hari_cuti='$jumlah_hari_cuti',jumlah_hari_izin='$jumlah_hari_izin',jumlah_hari_sakit='$jumlah_hari_sakit' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="setup_absensi_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="setup_absensi.php"</script>';
}

?>