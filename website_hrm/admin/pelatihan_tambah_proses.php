<?php
include 'koneksi.php';

$kode_pel = $_POST['kode_pel'];
$nama_pel = $_POST['nama_pel'];

// Cek apakah kode_pel sudah ada di database
$sql = "SELECT COUNT(*) as count FROM pelatihan WHERE kode_pel = '$kode_pel'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

if ($count > 0) {
    // Jika kode_pel sudah ada, beri pesan error dan redirect kembali ke halaman input
    echo '<script>alert("Kode Pelatihan sudah ada. Silahkan gunakan Kode Pelatihan yang lain");</script>';
    echo '<script>window.location.href = "pelatihan_tambah.php";</script>';
    exit();
} else {
    // Jika kode_pel belum ada, simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO pelatihan VALUES(NULL,'$kode_pel','$nama_pel')") or die(mysqli_error($koneksi));

    if ($simpan) {
        echo "<script>alert('Data Berhasil disimpan ')</script>";
        echo '<script type="text/javascript">window.location="pelatihan_tampil.php"</script>';
    } else {
        echo "<script>alert('Gagal Menyimpan Data ')</script>";
        echo '<script type="text/javascript">window.location="pelatihan_tambah.php"</script>';
    }
}
?>
