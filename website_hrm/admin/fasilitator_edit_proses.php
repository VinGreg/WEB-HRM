<?php
include 'koneksi.php';

$id = $_POST['id'];
$kode_pelatihan = $_POST['kode_pelatihan'];
$nik_fas = $_POST['nik_fas'];
$tanggal_pelatihan = $_POST['tanggal_pelatihan'];
$lokasi_pelatihan = $_POST['lokasi_pelatihan'];


$simpan = mysqli_query($koneksi, "UPDATE fasilitator SET kode_pelatihan='$kode_pelatihan',nik_fas='$nik_fas',tanggal_pelatihan='$tanggal_pelatihan',lokasi_pelatihan='$lokasi_pelatihan' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="fasilitator_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="fasilitator.php"</script>';
}

?>