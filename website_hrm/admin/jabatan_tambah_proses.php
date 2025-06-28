<?php
include 'koneksi.php';

$kode_jab = $_POST['kode_jab'];
$nama_jab = $_POST['nama_jab'];

// Cek apakah kode_jab sudah ada di database
$sql = "SELECT COUNT(*) as count FROM jabatan WHERE kode_jab = '$kode_jab'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

if ($count > 0) {
    // Jika kode_jab sudah ada, beri pesan error dan redirect kembali ke halaman input
    echo '<script>alert("Kode Jabatan sudah ada. Silahkan gunakan Kode Jabatan yang lain");</script>';
    echo '<script>window.location.href = "jabatan_tambah.php";</script>';
    exit();
} else {
    // Jika kode_jab belum ada, simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO jabatan VALUES(NULL,'$kode_jab','$nama_jab')") or die(mysqli_error($koneksi));

    if ($simpan) {
        echo "<script>alert('Data Berhasil disimpan ')</script>";
        echo '<script type="text/javascript">window.location="jabatan_tampil.php"</script>';
    } else {
        echo "<script>alert('Gagal Menyimpan Data ')</script>";
        echo '<script type="text/javascript">window.location="jabatan_tambah.php"</script>';
    }
}
?>
