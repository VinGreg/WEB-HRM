<?php
include 'koneksi.php';
$id = $_POST['id'];

// Dapatkan nilai nik dari karyawan yang akan dihapus
$result = mysqli_query($koneksi, "SELECT nik FROM karyawan WHERE id='$id'");
$row = mysqli_fetch_assoc($result);
$nik = $row['nik'];

// Daftar tabel yang menggunakan nik sebagai foreign key
$tabel_yang_menggunakan_nik = array(
    'absen' => 'nik',
    'absensi' => 'nik_absensi',
    'data_kesehatan' => 'nik_kes',
    'fasilitator' => 'nik_fas',
    'gaji' => 'nik_gaji',
    'pelatihan_karyawan' => 'nik_pel',
    'penghargaan' => 'nik_peng',
    'riwayat_pekerjaan_kary' => 'nik_pek',
    'riwayat_pendidikan' => 'nik_riw',
    'tanggungan' => 'nik_kar'
);

// Cek apakah nik masih digunakan di salah satu tabel
$nik_digunakan = false;
foreach ($tabel_yang_menggunakan_nik as $tabel => $kolom_nik) {
    $cek_penggunaan_nik = mysqli_query($koneksi, "SELECT * FROM $tabel WHERE $kolom_nik='$nik'");
    if (mysqli_num_rows($cek_penggunaan_nik) > 0) {
        $nik_digunakan = true;
        break;
    }
}

if ($nik_digunakan) {
    // Jika nik masih digunakan di salah satu tabel, tampilkan pesan kesalahan
    echo "<script>alert('Tidak dapat menghapus karyawan karena nik digunakan pada menu lain')</script>";
    echo '<script type="text/javascript">window.location="karyawan_tampil.php"</script>';
} else {
    // Jika nik tidak digunakan di semua tabel, lanjutkan proses penghapusan
    $hapus = mysqli_query($koneksi, "DELETE FROM karyawan WHERE id='$id'") or die(mysqli_error($koneksi));

    if ($hapus) {
        echo "<script>alert('Data Berhasil dihapus')</script>";
        echo '<script type="text/javascript">window.location="karyawan_tampil.php"</script>';
    } else {
        echo "<script>alert('Gagal Menyimpan Data')</script>";
        echo '<script type="text/javascript">window.location="karyawan_tampil.php"</script>';
    }
}
?>
