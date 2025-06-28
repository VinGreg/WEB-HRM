<?php
include 'koneksi.php';


$id = $_POST['id'];
$nik_peng = $_POST['nik_peng'];
$nama_peng = $_POST['nama_peng'];
$jenis_peng = $_POST['jenis_peng'];

$simpan = mysqli_query($koneksi, "UPDATE penghargaan SET nik_peng='$nik_peng',nama_peng='$nama_peng',jenis_peng='$jenis_peng' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="penghargaan_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="penghargaan.php"</script>';
}

?>