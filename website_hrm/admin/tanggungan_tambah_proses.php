<?php
include 'koneksi.php';
include "koneksi.php";

$nik_kar = $_POST['nik_kar'];
$nama_tanggungan = $_POST['nama_tanggungan'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$hubungan_dgn_kar = $_POST['hubungan_dgn_kar'];

$nik = $_POST['nik_kar'];

$cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$nik'");
if (mysqli_num_rows($cek) > 0) {


	$simpan = mysqli_query($koneksi, "INSERT INTO tanggungan VALUES(NULL,'$nik_kar','$nama_tanggungan','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$hubungan_dgn_kar')") or die(mysqli_error($koneksi));

	if ($simpan) {
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="tanggungan_tampil.php"</script>';
	} else {
		echo "<script>alert('Gagal Menyimpan Data ')</script>";
		echo '<script type="text/javascript">window.location="tanggungan_tambah.php"</script>';
	}
} else {
	// NIK not found, show popup
	echo "<script>
        alert('Tidak terdapat NIK yang dimaksud');
        window.location = 'tanggungan_tambah.php'; // Redirect back to the input page
    </script>";
}

?>