<?php
include 'koneksi.php';
include "koneksi.php";

$id = $_POST['id'];
$nik_pek_rek = $_POST['nik_pek_rek'];
$bidang = $_POST['bidang'];
$nama_instansi = $_POST['nama_instansi'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_selesai = $_POST['tanggal_selesai'];
$lokasi_pekerjaan = $_POST['lokasi_pekerjaan'];


$simpan = mysqli_query($koneksi, "UPDATE riwayat_pekerjaan_rek SET nik_pek_rek='$nik_pek_rek',bidang='$bidang',nama_instansi='$nama_instansi',tanggal_mulai='$tanggal_mulai',tanggal_selesai='$tanggal_selesai',lokasi_pekerjaan='$lokasi_pekerjaan' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="riwayat_pekerjaan_rek_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="riwayat_pekerjaan_rek.php"</script>';
}

?>