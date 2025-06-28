<?php
include 'koneksi.php';

$kode_bid = $_POST['kode_bid'];
$nama_bid = $_POST['nama_bid'];

// Cek apakah kode_bid sudah ada di database
$sql = "SELECT COUNT(*) as count FROM bidang WHERE kode_bid = '$kode_bid'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

if ($count > 0) {
    // Jika kode_bid sudah ada, beri pesan error dan redirect kembali ke halaman input
    echo '<script>alert("Kode Bidang sudah ada. Silahkan gunakan Kode Bidang yang lain");</script>';
    echo '<script>window.location.href = "bidang_tambah.php";</script>';
    exit();
} else {
    // Jika kode_bid belum ada, simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO bidang VALUES(NULL,'$kode_bid','$nama_bid')") or die(mysqli_error($koneksi));

    if ($simpan) {
        echo "<script>alert('Data Berhasil disimpan ')</script>";
        echo '<script type="text/javascript">window.location="bidang_tampil.php"</script>';
    } else {
        echo "<script>alert('Gagal Menyimpan Data ')</script>";
        echo '<script type="text/javascript">window.location="bidang_tambah.php"</script>';
    }
}
?>
