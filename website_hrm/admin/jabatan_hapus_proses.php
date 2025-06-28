<?php
include 'koneksi.php';

$id = $_POST['id'];

// Dapatkan nilai kode_jab dari jabatan yang akan dihapus
$result = mysqli_query($koneksi, "SELECT kode_jab FROM jabatan WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
$kode_jab = $row['kode_jab'];

// Cek apakah kode_jab masih digunakan di tabel karyawan sebagai foreign key
$cek_penggunaan_kode_jab = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE kode_jab='$kode_jab'");
if (mysqli_num_rows($cek_penggunaan_kode_jab) > 0) {
    // Jika kode_jab masih digunakan di tabel karyawan, tampilkan pesan kesalahan
    echo "<script>alert('Tidak dapat menghapus jabatan karena kode jabatan digunakan pada menu karyawan')</script>";
    echo '<script type="text/javascript">window.location="jabatan_tampil.php"</script>';
} else {
    // Jika kode_jab tidak digunakan di tabel karyawan, lanjutkan proses penghapusan
    $hapus = mysqli_query($koneksi, "DELETE FROM jabatan WHERE id='$id'") or die(mysqli_error($koneksi));

    if ($hapus) {
        echo "<script>alert('Data Berhasil dihapus ')</script>";
        echo '<script type="text/javascript">window.location="jabatan_tampil.php"</script>';
    } else {
        echo "<script>alert('Gagal Menyimpan Data ')</script>";
        echo '<script type="text/javascript">window.location="jabatan_tampil.php"</script>';
    }
}
?>
