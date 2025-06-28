<?php
include 'koneksi.php';

$id = $_POST['id'];

// Dapatkan nilai kode_pendidikan dari pendidikan yang akan dihapus
$result = mysqli_query($koneksi, "SELECT kode_pendidikan FROM pendidikan WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
$kode_pendidikan = $row['kode_pendidikan'];

// Cek apakah kode_pendidikan masih digunakan di tabel karyawan
$cek_penggunaan_kode_pendidikan = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE kode_pendidikan='$kode_pendidikan'");
if (mysqli_num_rows($cek_penggunaan_kode_pendidikan) > 0) {
    // Jika kode_pendidikan masih digunakan di tabel karyawan, tampilkan pesan kesalahan
    echo "<script>alert('Tidak dapat menghapus pendidikan karena kode_pendidikan digunakan pada menu lain')</script>";
    echo '<script type="text/javascript">window.location="pendidikan_tampil.php"</script>';
} else {
    // Jika kode_pendidikan tidak digunakan di tabel karyawan, lanjutkan proses penghapusan
    $hapus = mysqli_query($koneksi, "DELETE FROM pendidikan WHERE id='$id'") or die(mysqli_error($koneksi));

    if ($hapus) {
        echo "<script>alert('Data Berhasil dihapus ')</script>";
        echo '<script type="text/javascript">window.location="pendidikan_tampil.php"</script>';
    } else {
        echo "<script>alert('Gagal Menyimpan Data ')</script>";
        echo '<script type="text/javascript">window.location="pendidikan_tampil.php"</script>';
    }
}
?>
