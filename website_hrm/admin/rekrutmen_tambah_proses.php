<?php
include 'koneksi.php';


$nik = $_POST['nik'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$status_kar = $_POST['status_kar'];
$jumlah_tanggungan = $_POST['jumlah_tanggungan'];

$simpan = mysqli_query($koneksi, "INSERT INTO rekrutmen VALUES(NULL,'$nik','$nama','$email','$no_hp','$alamat','$tempat_lahir','$tanggal_lahir','$jenis_kelamin',
																	'$status_kar','$jumlah_tanggungan')") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="rekrutmen_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="rekrutmen_tambah.php"</script>';
}

?>