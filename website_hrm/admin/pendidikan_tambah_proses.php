<?php
include 'koneksi.php';

$kode_pendidikan = $_POST['kode_pendidikan'];
$nama_pendidikan = $_POST['nama_pendidikan'];

// Cek apakah kode_pendidikan sudah ada di database
$sql = "SELECT COUNT(*) as count FROM pendidikan WHERE kode_pendidikan = '$kode_pendidikan'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

if ($count > 0) {
    // Jika kode_pendidikan sudah ada, beri pesan error dan redirect kembali ke halaman input
    echo '<script>alert("Kode Pendidikan sudah ada. Silahkan gunakan Kode Pendidikan yang lain");</script>';
    echo '<script>window.location.href = "pendidikan_tambah.php";</script>';
    exit();
} else {
    // Jika kode_pendidikan belum ada, simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO pendidikan VALUES(NULL,'$kode_pendidikan','$nama_pendidikan')") or die(mysqli_error($koneksi));

    if ($simpan) {
        echo "<script>alert('Data Berhasil disimpan ')</script>";
        echo '<script type="text/javascript">window.location="pendidikan_tampil.php"</script>';
    } else {
        echo "<script>alert('Gagal Menyimpan Data ')</script>";
        echo '<script type="text/javascript">window.location="pendidikan_tambah.php"</script>';
    }
}
?>
