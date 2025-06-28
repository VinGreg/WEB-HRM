<?php
include 'koneksi.php';

$id = $_POST['id'];
$nik_gaji = $_POST['nik_gaji'];
$gaji = $_POST['gaji'];
$potongan = $_POST['potongan'];
$tunjangan = $_POST['tunjangan'];
$gaji_akhir = $_POST['gaji_akhir'];
$tanggal = $_POST['tanggal'];




$simpan = mysqli_query($koneksi, "UPDATE gaji SET nik_gaji='$nik_gaji',gaji='$gaji',potongan='$potongan',tunjangan='$tunjangan',gaji_akhir='$gaji_akhir',tanggal='$tanggal' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="gaji_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="gaji.php"</script>';
}

?>