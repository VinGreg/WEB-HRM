<?php
include 'koneksi.php';

$kode_tunjangan = $_POST['kode_tunjangan'];
$nama_tunjangan = $_POST['jumlah_tunjangan'];

// Cek apakah kode_tunjangan sudah ada di database
$sql = "SELECT COUNT(*) as count FROM sistem_tunjangan WHERE kode_tunjangan = '$kode_tunjangan'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

if ($count > 0) {
    // Jika kode_tunjangan sudah ada, beri pesan error dan redirect kembali ke halaman input
    echo '<script>alert("Kode Tunjangan sudah ada. Silahkan gunakan Kode Tunjangan yang lain");</script>';
    echo '<script>window.location.href = "sistem_tunjangan_tambah.php";</script>';
    exit();
} else {
    // Jika kode_tunjangan belum ada, simpan data baru
    $simpan = mysqli_query($koneksi, "INSERT INTO sistem_tunjangan VALUES(NULL,'$kode_tunjangan','$jumlah_tunjangan')") or die(mysqli_error($koneksi));

    if ($simpan) {
        echo "<script>alert('Data Berhasil disimpan ')</script>";
        echo '<script type="text/javascript">window.location="sistem_tunjangan_tampil.php"</script>';
    } else {
        echo "<script>alert('Gagal Menyimpan Data ')</script>";
        echo '<script type="text/javascript">window.location="sistem_tunjangan_tambah.php"</script>';
    }
}
?>
