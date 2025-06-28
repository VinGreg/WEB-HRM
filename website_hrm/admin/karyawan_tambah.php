<!DOCTYPE html>
<html>
<head>
  <?php include 'header.php' ?>
  <?php include 'koneksi.php';
  ?>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <?php include 'nav.php' ?>
    </nav>
    <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?php include 'sidebar.php' ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6]">
            <h1>Data karyawan</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

          <div class="card">
            <div class="card-header">
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Inputkan Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="karyawan_tambah_proses.php?action=submit" method="POST" enctype="multipart/form-data">


                <div class="card-body">
                <div class="form-group">
                        <label>NIK</label>
                        <input type="text" minlength="16" maxlength="16" pattern="[0-9]+" name="nik" value="<?= @$vnik ?>" class="form-control" placeholder="Masukan NIK" required>
                    </div>
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" value="<?= @$nama ?>" class="form-control" pattern="^[a-zA-Z ]+$" placeholder="Masukan Nama" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="<?= @$email ?>" class="form-control" placeholder="Masukan email@gmail.com" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="text" name="no_hp" value="<?= @$no_hp ?>" class="form-control" pattern="^[0-9]+$" minlength="10" maxlength="12" placeholder="Masukan Nomor Handphone" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" placeholder="Masukan Alamat" required><?= @$alamat ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" value="<?= @$tempat_lahir ?>" class="form-control" placeholder="Masukan Tempat Lahir" pattern="^[a-zA-Z ]+$" required>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" value="<?= @$tanggal_lahir ?>" class="form-control" placeholder="Masukan Tanggal Lahir" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Golongan Darah</label>
                        <select name="golongan_darah" class="form-control" required>
                            <option value="O">O</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" value="<?= @$tanggal_masuk ?>" class="form-control" placeholder="Masukan Tanggal Masuk" required>
                    </div>
                    <div class="form-group">
                        <label>Status Karyawan</label>
                        <select name="status_kar" class="form-control" required>
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Bank</label>
                        <input type="text" name="nama_bank" value="<?= @$nama_bank ?>" class="form-control" pattern="^[a-zA-Z ]+$" placeholder="Masukan Nama Bank" required>
                    </div>

                    <div class="form-group">
                        <label>Nomor Rekening</label>
                        <input type="text" name="no_rekening" value="<?= @$no_rekening ?>" class="form-control" pattern="^[0-9]+$" placeholder="9-18 digit" required>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tanggungan</label>
                        <input type="text" name="jumlah_tanggungan" value="<?= @$jumlah_tanggungan ?>" class="form-control" placeholder="Masukan Jumlah Tanggungan" pattern="^[0-9]+$" required>
                    </div>
                    <div class="form-group">
                        <label>Kode Bidang</label>
                        <?php
                        $readonly = '';
                        if (isset($_GET['hal']) && $_GET['hal'] === 'edit') {
                          $readonly = 'readonly';
                        }
                        // Pengambilan data foreign key
                        $sql = "SELECT bidang.*, karyawan.kode_bid AS customer_name 
                        FROM bidang
                        JOIN karyawan ON bidang.kode_bid = karyawan.kode_bid";

                        $result = mysqli_query($koneksi, $sql);

                        // Periksa apakah ada hasil
                        if ($result) {
                          // Loop melalui setiap baris hasil
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              // echo "Kode Pekerjaan: " . $row["kode_bid"] . "<br>";
                              // echo "Customer Name: " . $row["customer_name"] . "<br>";
                              // // Tambahkan data lainnya sesuai kebutuhan
                              // echo "<br>";
                            }
                          } else {
                            echo "Tidak ada hasil.";
                          }
                        } else {
                          echo "Error: " . mysqli_error($koneksi);
                        }
                        // Akhir pengambilan data foreign key
                        ?>
                        <select class="form-control" name="kode_bid" <?= $readonly ?> required>
                        <option value="<?= @$row ?>"><?= @$row ?></option>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT kode_bid FROM bidang");
                        while ($row = mysqli_fetch_assoc($query)) {
                          $row = $row['kode_bid'];
                          echo "<option value=\"$row\">$row</option>";
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kode Jabatan</label>
                        <?php
                        $readonly = '';
                        if (isset($_GET['hal']) && $_GET['hal'] === 'edit') {
                          $readonly = 'readonly';
                        }
                        // Pengambilan data foreign key
                        $sql = "SELECT jabatan.*, karyawan.kode_jab AS customer_name 
                        FROM jabatan
                        JOIN karyawan ON jabatan.kode_jab = karyawan.kode_jab";

                        $result = mysqli_query($koneksi, $sql);

                        // Periksa apakah ada hasil
                        if ($result) {
                          // Loop melalui setiap baris hasil
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              // echo "Kode Pekerjaan: " . $row["kode_jab"] . "<br>";
                              // echo "Customer Name: " . $row["customer_name"] . "<br>";
                              // // Tambahkan data lainnya sesuai kebutuhan
                              // echo "<br>";
                            }
                          } else {
                            echo "Tidak ada hasil.";
                          }
                        } else {
                          echo "Error: " . mysqli_error($koneksi);
                        }
                        // Akhir pengambilan data foreign key
                        ?>
                        <!-- menampilkan data dari foreign key -->
                        <select class="form-control" name="kode_jab" <?= $readonly ?> required>
                        <option value="<?= @$row ?>"><?= @$row ?></option>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT kode_jab FROM jabatan");
                        while ($row = mysqli_fetch_assoc($query)) {
                          $row = $row['kode_jab'];
                          echo "<option value=\"$row\">$row</option>";
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
  <label>Kode Pendidikan</label>
  <?php
  $readonly = '';
  $selectedValue = ''; // Tambahkan variabel untuk menyimpan nilai lama
  
  if (isset($_GET['hal']) && $_GET['hal'] === 'edit') {
    $readonly = 'readonly';

    // Periksa apakah ada nilai lama yang tersedia
    if (isset($_GET['old_kode_pendidikan'])) {
      $selectedValue = $_GET['old_kode_pendidikan'];
    }
  }

  // Pengambilan data foreign key
  $sql = "SELECT pendidikan.*, karyawan.kode_pendidikan AS customer_name 
          FROM pendidikan
          JOIN karyawan ON pendidikan.kode_pendidikan = karyawan.kode_pendidikan";

  $result = mysqli_query($koneksi, $sql);

  // Periksa apakah ada hasil
  if ($result) {
    // Loop melalui setiap baris hasil
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        // echo "Kode Pekerjaan: " . $row["kode_pendidikan"] . "<br>";
        // echo "Customer Name: " . $row["customer_name"] . "<br>";
        // // Tambahkan data lainnya sesuai kebutuhan
        // echo "<br>";
      }
    } else {
      echo "Tidak ada hasil.";
    }
  } else {
    echo "Error: " . mysqli_error($koneksi);
  }
  // Akhir pengambilan data foreign key
  ?>
  <select class="form-control" name="kode_pendidikan" <?= $readonly ?> required>
    <?php
    $query = mysqli_query($koneksi, "SELECT kode_pendidikan FROM pendidikan");
    while ($row = mysqli_fetch_assoc($query)) {
      $rowValue = $row['kode_pendidikan'];
      echo "<option value=\"$rowValue\"";
      // Cek apakah nilai lama cocok dengan nilai saat ini dalam loop
      if ($selectedValue === $rowValue) {
        echo " selected"; // Tambahkan atribut selected jika cocok
      }
      echo ">$rowValue</option>";
    }
    ?>
  </select>
</div>
                    
                    <div class="form-group">
                    <label>Golongan</label>
                    <select name="golongan" class="form-control" required>
                        <option value="<?= @$row ?>"><?= @$row ?></option>
                        <option value="1A">1A</option>
                        <option value="1B">1B</option>
                        <option value="1C">1C</option>
                        <option value="1D">1D</option>
                        <option value="2A">2A</option>
                        <option value="2B">2B</option>
                        <option value="2C">2C</option>
                        <option value="2D">2D</option>
                        <option value="3A">3A</option>
                        <option value="3B">3B</option>
                        <option value="3C">3C</option>
                        <option value="3D">3D</option>
                        <option value="4A">4A</option>
                        <option value="4B">4B</option>
                        <option value="4C">4C</option>
                        <option value="4D">4D</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label>Kode Gaji</label>
                        <?php
                        $readonly = '';
                        if (isset($_GET['hal']) && $_GET['hal'] === 'edit') {
                          $readonly = 'readonly';
                        }
                        // Pengambilan data foreign key
                        $sql = "SELECT sistem_gaji.*, karyawan.kode_gaji AS customer_name 
                        FROM sistem_gaji
                        JOIN karyawan ON sistem_gaji.kode_gaji = karyawan.kode_gaji";

                        $result = mysqli_query($koneksi, $sql);

                        // Periksa apakah ada hasil
                        if ($result) {
                          // Loop melalui setiap baris hasil
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              // echo "Kode Gaji: " . $row["kode_gaji"] . "<br>";
                              // echo "Customer Name: " . $row["customer_name"] . "<br>";
                              // // Tambahkan data lainnya sesuai kebutuhan
                              // echo "<br>";
                            }
                          } else {
                            echo "Tidak ada hasil.";
                          }
                        } else {
                          echo "Error: " . mysqli_error($koneksi);
                        }
                        // Akhir pengambilan data foreign key
                        ?>
<select class="form-control" name="kode_gaji" <?= $readonly ?> required>
                        <option value="<?= @$row ?>"><?= @$row ?></option>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT kode_gaji FROM sistem_gaji");
                        while ($row = mysqli_fetch_assoc($query)) {
                          $row = $row['kode_gaji'];
                          echo "<option value=\"$row\">$row</option>";
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Kode Tunjangan</label>
                        <?php
                        $readonly = '';
                        if (isset($_GET['hal']) && $_GET['hal'] === 'edit') {
                          $readonly = 'readonly';
                        }
                        // Pengambilan data foreign key
                        $sql = "SELECT sistem_tunjangan.*, karyawan.kode_tunjangan AS customer_name 
                        FROM sistem_tunjangan
                        JOIN karyawan ON sistem_tunjangan.kode_tunjangan = karyawan.kode_tunjangan";

                        $result = mysqli_query($koneksi, $sql);

                        // Periksa apakah ada hasil
                        if ($result) {
                          // Loop melalui setiap baris hasil
                          if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                              // echo "Kode Pekerjaan: " . $row["kode_tunjangan"] . "<br>";
                              // echo "Customer Name: " . $row["customer_name"] . "<br>";
                              // // Tambahkan data lainnya sesuai kebutuhan
                              // echo "<br>";
                            }
                          } else {
                            echo "Tidak ada hasil.";
                          }
                        } else {
                          echo "Error: " . mysqli_error($koneksi);
                        }
                        // Akhir pengambilan data foreign key
                        ?>
                        <select class="form-control" name="kode_tunjangan" <?= $readonly ?> required>
                        <option value="<?= @$row ?>"><?= @$row ?></option>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT kode_tunjangan FROM sistem_tunjangan");
                        while ($row = mysqli_fetch_assoc($query)) {
                          $row = $row['kode_tunjangan'];
                          echo "<option value=\"$row\">$row</option>";
                        }
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto_kar" class="form-control" required>
                    </div>
        
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          


            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
       <?php include 'footer.php' ?>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
