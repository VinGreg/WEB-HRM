<?php
include 'koneksi.php';

$id = $_POST['id'];
$nik_kes = $_POST['nik_kes'];
$tanggal = $_POST['tanggal'];
$riwayat_medis = $_POST['riwayat_medis'];


$simpan = mysqli_query($koneksi, "UPDATE data_kesehatan SET nik_kes='$nik_kes',tanggal='$tanggal',riwayat_medis='$riwayat_medis' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="data_kesehatan_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="data_kesehatan.php"</script>';
}

?>