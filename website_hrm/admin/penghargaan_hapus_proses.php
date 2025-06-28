<?php
include 'koneksi.php';



$id = $_POST['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM penghargaan WHERE id='$id'") or die(mysqli_error($koneksi));

if ($hapus) {
	echo "<script>alert('Data Berhasil dihapus ')</script>";
	echo '<script type="text/javascript">window.location="penghargaan_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="penghargaan_tampil.php"</script>';
}

?>