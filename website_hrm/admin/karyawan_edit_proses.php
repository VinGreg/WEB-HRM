<?php
include 'koneksi.php';

$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$golongan_darah = $_POST['golongan_darah'];
$tanggal_masuk = $_POST['tanggal_masuk'];
$status_kar = $_POST['status_kar'];
$nama_bank = $_POST['nama_bank'];
$no_rekening = $_POST['no_rekening'];
$jumlah_tanggungan = $_POST['jumlah_tanggungan'];
$kode_jab = $_POST['kode_jab'];
$kode_pendidikan = $_POST['kode_pendidikan'];
$golongan = $_POST['golongan'];
$kode_gaji = $_POST['kode_gaji'];
$kode_tunjangan = $_POST['kode_tunjangan'];
$kode_bid = $_POST['kode_bid'];
$foto_kar = $_POST['foto_kar'];


$simpan = mysqli_query($koneksi, "UPDATE karyawan SET nik='$nik',nama='$nama',email='$email',
														no_hp='$no_hp',alamat='$alamat',
														tempat_lahir='$tempat_lahir',
														tanggal_lahir='$tanggal_lahir',
														jenis_kelamin='$jenis_kelamin',
														golongan_darah='$golongan_darah',
														tanggal_masuk='$tanggal_masuk',
														status_kar='$status_kar',nama_bank='$nama_bank',
														no_rekening='$no_rekening',jumlah_tanggungan='$jumlah_tanggungan',
														kode_jab='$kode_jab',kode_pendidikan='$kode_pendidikan',
														golongan='$golongan',kode_gaji='$kode_gaji',
														kode_tunjangan='$kode_tunjangan',kode_bid='$kode_bid',
														foto_kar='$foto_kar' WHERE id='$id'") 
														or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="karyawan_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="karyawan.php"</script>';
}

?>