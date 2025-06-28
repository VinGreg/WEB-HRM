<?php
include 'koneksi.php';
include "koneksi.php";

$nik_riw = $_POST['nik_riw'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$tanggal_lulus = $_POST['tanggal_lulus'];
$jurusan = $_POST['jurusan'];

$nik_riw = $_POST['nik_riw'];

$cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik_riw='$nik_riw'");
if (mysqli_num_rows($cek) > 0) {


	$simpan = mysqli_query($koneksi, "INSERT INTO riwayat_pendidikan VALUES(NULL,'$nik_riw','$pendidikan_terakhir','$tanggal_lulus','$jurusan')") or die(mysqli_error($koneksi));

	if ($simpan) {
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="riwayat_pendidikan_tampil.php"</script>';
	} else {
		echo "<script>alert('Gagal Menyimpan Data ')</script>";
		echo '<script type="text/javascript">window.location="riwayat_pendidikan_tambah.php"</script>';
	}
} else {
	// NIK not found, show popup
	echo "<script>
        alert('Tidak terdapat NIK yang dimaksud');
        window.location = 'riwayat_pendidikan_tambah.php'; // Redirect back to the input page
    </script>";
}

?>