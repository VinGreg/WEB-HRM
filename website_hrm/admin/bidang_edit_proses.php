<?php
include 'koneksi.php';

$id = $_POST['id'];
$kode_bid = $_POST['kode_bid'];
$nama_bid = $_POST['nama_bid'];


$simpan = mysqli_query($koneksi, "UPDATE bidang SET kode_bid='$kode_bid',nama_bid='$nama_bid' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="bidang_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="bidang.php"</script>';
}

?>