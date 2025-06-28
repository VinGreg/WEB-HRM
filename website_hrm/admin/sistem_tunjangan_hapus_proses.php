<?php
include 'koneksi.php';

$id = $_POST['id'];

// Dapatkan nilai kode_tunjangan dari sistem_tunjangan yang akan dihapus
$result = mysqli_query($koneksi, "SELECT kode_tunjangan FROM sistem_tunjangan WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
$kode_tunjangan = $row['kode_tunjangan'];

// Cek apakah kode_tunjangan masih digunakan di tabel karyawan sebagai foreign key
$cek_penggunaan_kode_tunjangan = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE kode_tunjangan='$kode_tunjangan'");
if (mysqli_num_rows($cek_penggunaan_kode_tunjangan) > 0) {
    // Jika kode_tunjangan masih digunakan di tabel karyawan, tampilkan pesan kesalahan
    echo "<script>alert('Tidak dapat menghapus sistem tunjangan karena kode tunjangan digunakan pada menu karyawan')</script>";
    echo '<script type="text/javascript">window.location="sistem_tunjangan_tampil.php"</script>';
} else {
    // Jika kode_tunjangan tidak digunakan di tabel karyawan, lanjutkan proses penghapusan
    $hapus = mysqli_query($koneksi, "DELETE FROM sistem_tunjangan WHERE id='$id'") or die(mysqli_error($koneksi));

    if ($hapus) {
        echo "<script>alert('Data Berhasil dihapus ')</script>";
        echo '<script type="text/javascript">window.location="sistem_tunjangan_tampil.php"</script>';
    } else {
        echo "<script>alert('Gagal Menyimpan Data ')</script>";
        echo '<script type="text/javascript">window.location="sistem_tunjangan_tampil.php"</script>';
    }
}
?>
