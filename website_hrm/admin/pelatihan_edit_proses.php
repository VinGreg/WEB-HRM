<?php
include 'koneksi.php';


$id = $_POST['id'];
$kode_pel = $_POST['kode_pel'];
$nama_pel = $_POST['nama_pel'];

$simpan = mysqli_query($koneksi, "UPDATE pelatihan SET kode_pel='$kode_pel',nama_pel='$nama_pel' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="pelatihan_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="pelatihan.php"</script>';
}

?>