<?php
include 'koneksi.php';

$nik_kes = $_POST['nik_kes'];
$tanggal = $_POST['tanggal'];
$riwayat_medis = $_POST['riwayat_medis'];

$nik = $_POST['nik_kes'];

$cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$nik'");
if (mysqli_num_rows($cek) > 0) {


	$simpan = mysqli_query($koneksi, "INSERT INTO data_kesehatan VALUES(NULL,'$nik_kes','$tanggal','$riwayat_medis')") or die(mysqli_error($koneksi));

	if ($simpan) {
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="data_kesehatan_tampil.php"</script>';
	} else {
		echo "<script>alert('Gagal Menyimpan Data ')</script>";
		echo '<script type="text/javascript">window.location="data_kesehatan_tambah.php"</script>';
	}
} else {
	// NIK not found, show popup
	echo "<script>
        alert('Tidak terdapat NIK yang dimaksud');
        window.location = 'data_kesehatan_tambah.php'; // Redirect back to the input page
    </script>";
}
?>