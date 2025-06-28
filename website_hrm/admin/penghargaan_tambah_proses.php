<?php
include 'koneksi.php';


$kode_peng = $_POST['nik_peng'];
$nama_peng = $_POST['nama_peng'];
$jenis_peng = $_POST['jenis_peng'];

//ambil data dari inputan
$nik = $_POST['nik_peng'];

$cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$nik'");
if (mysqli_num_rows($cek) > 0) {


	$simpan = mysqli_query($koneksi, "INSERT INTO penghargaan VALUES(NULL,'$kode_peng','$nama_peng','$jenis_peng')") or die(mysqli_error($koneksi));

	if ($simpan) {
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="penghargaan_tampil.php"</script>';
	} else {
		echo "<script>alert('Gagal Menyimpan Data ')</script>";
		echo '<script type="text/javascript">window.location="penghargaan_tambah.php"</script>';
	}
} else {
	// NIK not found, show popup
	echo "<script>
        alert('Tidak terdapat NIK yang dimaksud');
        window.location = 'penghargaan_tambah.php'; // Redirect back to the input page
    </script>";
}