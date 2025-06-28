<?php
include 'koneksi.php';


$nik_pel = $_POST['nik_pel'];
$nama_pelatihan = $_POST['nama_pelatihan'];
$tempat_pelatihan = $_POST['tempat_pelatihan'];
$tanggal_pelatihan = $_POST['tanggal_pelatihan'];

$nik = $_POST['nik_pel'];

$cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$nik'");
if (mysqli_num_rows($cek) > 0) {

	$simpan = mysqli_query($koneksi, "INSERT INTO pelatihan_karyawan VALUES(NULL,'$nik_pel','$nama_pelatihan','$tempat_pelatihan','$tanggal_pelatihan')") or die(mysqli_error($koneksi));

	if ($simpan) {
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="pelatihan_karyawan_tampil.php"</script>';
	} else {
		echo "<script>alert('Gagal Menyimpan Data ')</script>";
		echo '<script type="text/javascript">window.location="pelatihan_karyawan_tambah.php"</script>';
	}
} else {
	// NIK not found, show popup
	echo "<script>
        alert('Tidak terdapat NIK yang dimaksud');
        window.location = 'pelatihan_karyawan_tambah.php'; // Redirect back to the input page
    </script>";
}

?>