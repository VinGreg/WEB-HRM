<?php
include 'koneksi.php';

$id = $_POST['id'];

// Dapatkan nilai kode_pel dari pelatihan yang akan dihapus
$result = mysqli_query($koneksi, "SELECT kode_pel FROM pelatihan WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
$kode_pel = $row['kode_pel'];

// Cek apakah kode_pel masih digunakan di tabel fasilitator sebagai foreign key
$cek_penggunaan_kode_pel = mysqli_query($koneksi, "SELECT * FROM fasilitator WHERE kode_pelatihan='$kode_pel'");
if (mysqli_num_rows($cek_penggunaan_kode_pel) > 0) {
    // Jika kode_pel masih digunakan di tabel fasilitator, tampilkan pesan kesalahan
    echo "<script>alert('Tidak dapat menghapus pelatihan karena kode pelatihan digunakan pada menu fasilitator')</script>";
    echo '<script type="text/javascript">window.location="pelatihan_tampil.php"</script>';
} else {
    // Jika kode_pel tidak digunakan di tabel fasilitator, lanjutkan proses penghapusan
    $hapus = mysqli_query($koneksi, "DELETE FROM pelatihan WHERE id='$id'") or die(mysqli_error($koneksi));

    if ($hapus) {
        echo "<script>alert('Data Berhasil dihapus ')</script>";
        echo '<script type="text/javascript">window.location="pelatihan_tampil.php"</script>';
    } else {
        echo "<script>alert('Gagal Menyimpan Data ')</script>";
        echo '<script type="text/javascript">window.location="pelatihan_tampil.php"</script>';
    }
}
?>
