<?php
include 'koneksi.php';


$id = $_POST['id'];
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


$simpan = mysqli_query($koneksi, "UPDATE rekrutmen SET nik='$nik',nama='$nama',email='$email',no_hp='$no_hp',alamat='$alamat',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',
														jenis_kelamin='$jenis_kelamin',status_kar='$status_kar',jumlah_tanggungan='$jumlah_tanggungan'
														 WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="rekrutmen_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="rekrutmen.php"</script>';
}

?>