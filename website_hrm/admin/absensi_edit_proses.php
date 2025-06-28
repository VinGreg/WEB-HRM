<?php
include 'koneksi.php';

$id = $_POST['id'];
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


$simpan = mysqli_query($koneksi, "UPDATE absensi SET nik_absensi='$nik_absensi',tanggal_mulai='$tanggal_mulai', tanggal_selesai='$tanggal_selesai', keterangan_cuti='$keterangan_cuti',jumlah_hari_cuti='$jumlah_hari_cuti',sisa_hari_cuti='$sisa_hari_cuti', keterangan_izin='$keterangan_izin',jumlah_hari_izin='$jumlah_hari_izin',sisa_hari_izin='$sisa_hari_izin', keterangan_sakit='$keterangan_sakit',jumlah_hari_sakit='$jumlah_hari_sakit',sisa_hari_sakit='$sisa_hari_sakit' WHERE id='$id'") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="absensi_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="absensi.php"</script>';
}

?>