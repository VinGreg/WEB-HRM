<?php
include 'koneksi.php';


$id = $_POST['id'];
$nik_pel = $_POST['nik_pel'];
$nama_pelatihan = $_POST['nama_pelatihan'];
$tempat_pelatihan = $_POST['tempat_pelatihan'];
$tanggal_pelatihan = $_POST['tanggal_pelatihan'];


$simpan = mysqli_query($koneksi, "UPDATE pelatihan_karyawan SET nik_pel='$nik_pel',nama_pelatihan='$nama_pelatihan',tempat_pelatihan='$tempat_pelatihan',tanggal_pelatihan='$tanggal_pelatihan' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="pelatihan_karyawan_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="pelatihan_karyawan.php"</script>';
}

?>