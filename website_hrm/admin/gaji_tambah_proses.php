<?php
include 'koneksi.php';

$nik_gaji = $_POST['nik_gaji'];
$gaji = $_POST['gaji'];
$potongan = $_POST['potongan'];
$tunjangan = $_POST['tunjangan'];
$gaji_akhir = $_POST['gaji_akhir'];
$tanggal = $_POST['tanggal'];

$nik = $_POST['nik_gaji'];

$cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$nik'");
if (mysqli_num_rows($cek) > 0) {


	$simpan = mysqli_query($koneksi, "INSERT INTO gaji VALUES(NULL,'$nik_gaji','$gaji','$potongan','$tunjangan','$gaji_akhir','$tanggal')") or die(mysqli_error($koneksi));

	if ($simpan) {
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="gaji_tampil.php"</script>';
	} else {
		echo "<script>alert('Gagal Menyimpan Data ')</script>";
		echo '<script type="text/javascript">window.location="gaji_tambah.php"</script>';
	}
} else {
	// NIK not found, show popup
	echo "<script>
        alert('Tidak terdapat NIK yang dimaksud');
        window.location = 'gaji_tambah.php'; // Redirect back to the input page
    </script>";
}

?>