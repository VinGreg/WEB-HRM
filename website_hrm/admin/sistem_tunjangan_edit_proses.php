<?php
include 'koneksi.php';
include "koneksi.php";

$id = $_POST['id'];
$kode_tunjangan = $_POST['kode_tunjangan'];
$jumlah_tunjangan = $_POST['jumlah_tunjangan'];


$simpan = mysqli_query($koneksi, "UPDATE sistem_tunjangan SET kode_tunjangan='$kode_tunjangan',jumlah_tunjangan='$jumlah_tunjangan' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="sistem_tunjangan_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="sistem_tunjangan.php"</script>';
}

?>