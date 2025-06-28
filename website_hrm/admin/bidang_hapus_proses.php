<?php
include 'koneksi.php';

$id = $_POST['id'];

// Dapatkan nilai kode_bid dari bidang yang akan dihapus
$result = mysqli_query($koneksi, "SELECT kode_bid FROM bidang WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
$kode_bid = $row['kode_bid'];

// Cek apakah kode_bid masih digunakan di tabel karyawan
$cek_penggunaan_kode_bid = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE kode_bid='$kode_bid'");
if (mysqli_num_rows($cek_penggunaan_kode_bid) > 0) {
    // Jika kode_bid masih digunakan di tabel karyawan, tampilkan pesan kesalahan
    echo "<script>alert('Tidak dapat menghapus bidang karena kode bidang digunakan pada menu karyawan')</script>";
    echo '<script type="text/javascript">window.location="bidang_tampil.php"</script>';
} else {
    // Jika kode_bid tidak digunakan di tabel karyawan, lanjutkan proses penghapusan
    $hapus = mysqli_query($koneksi, "DELETE FROM bidang WHERE id='$id'") or die(mysqli_error($koneksi));

    if ($hapus) {
        echo "<script>alert('Data Berhasil dihapus ')</script>";
        echo '<script type="text/javascript">window.location="bidang_tampil.php"</script>';
    } else {
        echo "<script>alert('Gagal Menyimpan Data ')</script>";
        echo '<script type="text/javascript">window.location="bidang_tampil.php"</script>';
    }
}
?>
