<?php
include 'koneksi.php';


$nik_absensi = $_POST['nik_absensi'];
$tanggal_mulai = $_POST['tanggal_mulai'];
$tanggal_selesai = $_POST['tanggal_selesai'];
$keterangan_cuti = $_POST['keterangan_cuti'];
$jumlah_hari_cuti = $_POST['jumlah_hari_cuti'];
$sisa_hari_cuti = $_POST['sisa_hari_cuti'];
$keterangan_izin = $_POST['keterangan_izin'];
$jumlah_hari_izin = $_POST['jumlah_hari_izin'];
$sisa_hari_izin = $_POST['sisa_hari_izin'];
$keterangan_sakit = $_POST['keterangan_sakit'];
$jumlah_hari_sakit = $_POST['jumlah_hari_sakit'];
$sisa_hari_sakit = $_POST['sisa_hari_sakit'];

$nik = $_POST['nik_absensi'];

$cek = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE nik='$nik'");
if (mysqli_num_rows($cek) > 0) {

	$simpan = mysqli_query($koneksi, "INSERT INTO absensi VALUES(NULL,'$nik_absensi','$tanggal_mulai','$tanggal_selesai','$keterangan_cuti','$jumlah_hari_cuti','$sisa_hari_cuti','$keterangan_izin','$jumlah_hari_izin','$sisa_hari_izin','$keterangan_sakit','$jumlah_hari_sakit','$sisa_hari_sakit')") or die(mysqli_error($koneksi));

	if ($simpan) {
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="absensi_tampil.php"</script>';
	} else {
		echo "<script>alert('Gagal Menyimpan Data ')</script>";
		echo '<script type="text/javascript">window.location="absensi_tambah.php"</script>';
	}
} else {
	// NIK not found, show popup
	echo "<script>
        alert('Tidak terdapat NIK yang dimaksud');
        window.location = 'absensi_tambah.php'; // Redirect back to the input page
    </script>";
}

?>