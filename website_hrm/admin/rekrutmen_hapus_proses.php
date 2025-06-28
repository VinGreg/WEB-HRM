<?php
include 'koneksi.php';


$id = $_POST['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM rekrutmen WHERE id='$id'") or die(mysqli_error($koneksi));

if ($hapus) {
	echo "<script>alert('Data Berhasil dihapus ')</script>";
	echo '<script type="text/javascript">window.location="rekrutmen_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="rekrutmen_tampil.php"</script>';
}

?>