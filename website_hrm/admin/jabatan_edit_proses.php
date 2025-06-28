<?php
include 'koneksi.php';

$id = $_POST['id'];
$kode_jab = $_POST['kode_jab'];
$nama_jab = $_POST['nama_jab'];


$simpan = mysqli_query($koneksi, "UPDATE jabatan SET kode_jab='$kode_jab',nama_jab='$nama_jab' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="jabatan_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="jabatan.php"</script>';
}

?>