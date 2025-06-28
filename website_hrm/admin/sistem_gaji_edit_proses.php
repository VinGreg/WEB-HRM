<?php
include 'koneksi.php';
include "koneksi.php";

$id = $_POST['id'];
$tanggal_efektif = $_POST['tanggal_efektif'];
$gajiAwalNew = $_POST['gajiAwalNew'];
$persenNaikGajiNew = $_POST['kenaikan_berkala'];
$persenNaikGajiGol1bNew = $_POST['persen_gaji_1b'];
$persenNaikGajiGol1cNew = $_POST['persen_gaji_1c'];
$persenNaikGajiGol1dNew = $_POST['persen_gaji_1d'];
$persenNaikGajiGol2bNew = $_POST['persen_gaji_2b'];
$persenNaikGajiGol2cNew = $_POST['persen_gaji_2c'];
$persenNaikGajiGol2dNew = $_POST['persen_gaji_2d'];
$persenNaikGajiGol3bNew = $_POST['persen_gaji_3b'];
$persenNaikGajiGol3cNew = $_POST['persen_gaji_3c'];
$persenNaikGajiGol3dNew = $_POST['persen_gaji_3d'];
$persenNaikGajiGol4bNew = $_POST['persen_gaji_4b'];
$persenNaikGajiGol4cNew = $_POST['persen_gaji_4c'];
$persenNaikGajiGol4dNew = $_POST['persen_gaji_4d'];


$simpan = mysqli_query($koneksi, "INSERT INTO setup_gaji VALUES(NULL,'$tanggal_efektif','','$gajiAwalNew','$persenNaikGajiNew','$persenNaikGajiGol1bNew',
      '$persenNaikGajiGol1cNew','$persenNaikGajiGol1dNew','$persenNaikGajiGol2bNew',
      '$persenNaikGajiGol2cNew','$persenNaikGajiGol2dNew','$persenNaikGajiGol3bNew','$persenNaikGajiGol3cNew',
      '$persenNaikGajiGol3dNew','$persenNaikGajiGol4bNew','$persenNaikGajiGol4cNew','$persenNaikGajiGol4dNew')") or die(mysqli_error($koneksi));

if ($simpan) {
	echo "<script>alert('Data Berhasil disimpan ')</script>";
	echo '<script type="text/javascript">window.location="sistem_gaji_tampil.php"</script>';
} else {
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="sistem_gaji.php"</script>';
}

?>