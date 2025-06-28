<?php
include 'koneksi.php';

$nik = $_POST['nik'];
$tanggal = $_POST['tanggal'];
$jam_masuk = $_POST['jam_masuk'];
$jam_keluar = $_POST['jam_keluar'];
$keterangan = $_POST['keterangan'];
$waktu_telat = $_POST['waktu_telat'];

$nik = $_POST['nik'];

$cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$nik'");
if (mysqli_num_rows($cek) > 0) {

	$simpan = mysqli_query($koneksi, "INSERT INTO absen VALUES(NULL,'$nik','$tanggal','$jam_masuk','$jam_keluar','$keterangan','$waktu_telat')") or die(mysqli_error($koneksi));

	if ($simpan) {
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="absen_tampil.php"</script>';
	} else {
		echo "<script>alert('Gagal Menyimpan Data ')</script>";
		echo '<script type="text/javascript">window.location="absen_tambah.php"</script>';
	}
} else {
	// NIK not found, show popup
	echo "<script>
        alert('Tidak terdapat NIK yang dimaksud');
        window.location = 'absen_tambah.php'; // Redirect back to the input page
    </script>";
}
?>