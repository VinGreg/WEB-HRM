<?php
include 'koneksi.php';

$kode_pel = $_POST['kode_pel'];
$nik_fas = $_POST['nik_fas'];
$tanggal_pelatihan = $_POST['tanggal_pelatihan'];
$lokasi_pelatihan = $_POST['lokasi_pelatihan'];

$nik = $_POST['nik_fas'];

$cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$nik'");
if (mysqli_num_rows($cek) > 0) {

	$simpan = mysqli_query($koneksi, "INSERT INTO fasilitator VALUES(NULL,'$kode_pel','$nik_fas','$tanggal_pelatihan','$lokasi_pelatihan')") or die(mysqli_error($koneksi));

	if ($simpan) {
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="fasilitator_tampil.php"</script>';
	} else {
		echo "<script>alert('Gagal Menyimpan Data ')</script>";
		echo '<script type="text/javascript">window.location="fasilitator_tambah.php"</script>';
	}
} else {
	// NIK not found, show popup
	echo "<script>
        alert('Tidak terdapat NIK yang dimaksud');
        window.location = 'fasilitator_tambah.php'; // Redirect back to the input page
    </script>";
}

?>