<?php
include 'koneksi.php';


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
$foto_kar = $_FILES['foto_kar']['name'];

include 'koneksi.php';

if (isset($_GET['action']) && $_GET['action'] === 'submit') {
	$nik = $_POST['nik'];

	// Cek apakah NIK sudah ada di database
	$sql = "SELECT COUNT(*) as count FROM karyawan WHERE nik = '$nik'";
	$result = mysqli_query($koneksi, $sql);
	$row = mysqli_fetch_assoc($result);
	$count = $row['count'];

	if ($count > 0) {
		// Jika NIK sudah ada, beri pesan error dan redirect kembali ke halaman input
		echo '<script>alert("NIK Sudah dipakai Silahkan Masukkan NIK lain");</script>';
		echo '<script>window.location.href = "karyawan_tambah.php";</script>';
		exit();
	} else {
		$simpan = mysqli_query($koneksi, "INSERT INTO karyawan VALUES(NULL,'$nik','$nama','$email','$no_hp','$alamat','$tempat_lahir',
																	'$tanggal_lahir','$jenis_kelamin','$golongan_darah',
																	'$tanggal_masuk','$status_kar','$nama_bank',
																	'$no_rekening','$jumlah_tanggungan','$kode_jab','$kode_pendidikan',
																	'$golongan','$kode_gaji','$kode_tunjangan','$kode_bid','$foto_kar')") 
																	or die(mysqli_error($koneksi));

		if ($simpan) {
			echo "<script>alert('Data Berhasil disimpan ')</script>";
			echo '<script type="text/javascript">window.location="karyawan_tampil.php"</script>';
		}
	}
}

// FOTO

// Check if a file was uploaded successfully
if ($foto_kar != "") {

	$ekstensi_diperbolehkan = array('png', 'jpg');
	$x = explode('.', $foto_kar);
	$ekstensi = strtolower(end($x));
	$file_tmp = $_FILES['foto_kar']['tmp_name'];
	$angka_acak = rand(1, 999);
	$nama_gambar_baru = $angka_acak . '-' . $foto_kar;
	if (isset($_FILES['foto_kar']) && $_FILES['foto_kar']['error'] === UPLOAD_ERR_OK) {
		// File upload was successful, process the file
		$foto_kar = $_FILES['foto_kar']['name'];
		// Rest of the file upload processing code...
	} else {
		// File upload failed or no file selected, handle the error
		echo "<script>alert('File upload failed or no file selected');</script>";
	}


} else {

}
// AKHIR FOTO
// Other form processing code...
