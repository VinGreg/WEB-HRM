<?php
include 'koneksi.php';
include "koneksi.php";

$nik_pek_rek = $_POST['nik_pek_rek'];
$bidang = $_POST['bidang'];
$nama_instansi = $_POST['nama_instansi'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_selesai = $_POST['tanggal_selesai'];
$lokasi_pekerjaan = $_POST['lokasi_pekerjaan'];

$nik = $_POST['nik_pek_rek'];

$cek = mysqli_query($koneksi, "SELECT * FROM rekrutmen WHERE nik='$nik'");
if (mysqli_num_rows($cek) > 0) {

	$simpan = mysqli_query($koneksi, "INSERT INTO riwayat_pekerjaan_rek VALUES(NULL,'$nik_pek_rek','$bidang','$nama_instansi','$tanggal_mulai','$tanggal_selesai','$lokasi_pekerjaan')") or die(mysqli_error($koneksi));

	if ($simpan) {
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="riwayat_pekerjaan_rek_tampil.php"</script>';
	} else {
		echo "<script>alert('Gagal Menyimpan Data ')</script>";
		echo '<script type="text/javascript">window.location="riwayat_pekerjaan_rek_tambah.php"</script>';
	}
} else {
	// NIK not found, show popup
	echo "<script>
        alert('Tidak terdapat NIK yang dimaksud');
        window.location = 'riwayat_pekerjaan_rek_tambah.php'; // Redirect back to the input page
    </script>";
}

?>