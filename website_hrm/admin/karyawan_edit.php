<!DOCTYPE html>
<html>
<head>
<?php include 'header.php';
include "koneksi.php";
?>  
  <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
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
          <div class="col-sm-6">
            <h1>Edit Data Karyawan</h1>
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
                <h3 class="card-title">Edit Data</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php
              include 'koneksi.php';
              $id = $_GET['id'];
              $sql = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id='$id'") or die(mysqli_error($koneksi));
              $data = mysqli_fetch_array($sql);
              ?>

              <form role="form" action="karyawan_edit_proses.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" required>
                <div class="card-body">
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control"  value="<?php echo $data['nik'] ?>" pattern="^[0-9]+$" minlength="16" maxlength="16" placeholder="Masukan NIK" readonly>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control"  value="<?php echo $data['nama'] ?>" pattern="^[a-zA-Z ]+$" placeholder="Masukan Nama" required>
                  </div>
                  <div class="form-group">
                        <label >Email</label>
                        <input type="email" name="email" class="form-control"  value="<?php echo $data['email'] ?>" placeholder="Masukan email@gmail.com" required >
                    </div>
                    <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control"  value="<?php echo $data['no_hp'] ?>" minlength="10" maxlength="12" pattern="^[0-9]+$" placeholder="Masukan Nomor Handphone" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control"  value="<?php echo $data['alamat'] ?>" placeholder="Masukan Alamat" required>                    
                      </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control"  value="<?php echo $data['tempat_lahir'] ?>" placeholder="Masukan Tempat Lahir" required>                    
                      </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control"  value="<?php echo $data['tanggal_lahir'] ?>" placeholder="Masukan Tanggal Lahir" required>                    
                      </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                        <option value="laki-laki" <?php if ($data['jenis_kelamin'] === 'laki-laki')
                          echo 'selected'; ?>>Laki-laki</option>
                        <option value="perempuan" <?php if ($data['jenis_kelamin'] === 'perempuan')
                          echo 'selected'; ?>>Perempuan</option>
                    </select>
                    </div>

                    <div class="form-group">
                    <label>Golongan Darah</label>
                    <select name="golongan_darah" class="form-control" required>
                        <option value="O" <?php if ($data['golongan_darah'] === 'O')
                          echo 'selected'; ?>>O</option>
                        <option value="A" <?php if ($data['golongan_darah'] === 'A')
                          echo 'selected'; ?>>A</option>
                        <option value="B" <?php if ($data['golongan_darah'] === 'B')
                          echo 'selected'; ?>>B</option>
                        <option value="AB" <?php if ($data['golongan_darah'] === 'AB')
                          echo 'selected'; ?>>AB</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label>Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control"  value="<?php echo $data['tanggal_masuk'] ?>" placeholder="Pilih Tanggal Masuk" required>                    
                    </div>
                    <div class="form-group">
                    <label>Status Karyawan</label>
                    <select name="status_kar" class="form-control" required>
                        <option value="Menikah" <?php if ($data['status_kar'] === 'Menikah')
                          echo 'selected'; ?>>Menikah</option>
                        <option value="Tidak Menikah" <?php if ($data['status_kar'] === 'Belum Menikah')
                          echo 'selected'; ?>>Belum Menikah</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Bank</label>
                        <input type="text" name="nama_bank" class="form-control"  value="<?php echo $data['nama_bank'] ?>" pattern="^[a-zA-Z ]+$" placeholder="Masukan Nama Bank" required>                    
                    </div>

                    <div class="form-group">
                        <label>Nomor Rekening</label>
                        <input type="text" name="no_rekening" class="form-control"  value="<?php echo $data['no_rekening'] ?>" pattern="^[0-9]+$" minlength="9" maxlength="18" placeholder="9-18 digit" required>                    
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tanggungan</label>
                        <input type="text" name="jumlah_tanggungan" class="form-control"  value="<?php echo $data['jumlah_tanggungan'] ?>" pattern="^[0-9]+$" placeholder="Masukan Jumlah Tanggungan" required>                    
                    </div>
                    <div class="form-group">
  <label>Kode Bidang</label>
  <?php
  // Mendapatkan data kode bidang dari database
  $queryBidang = mysqli_query($koneksi, "SELECT kode_bid FROM bidang");
  $kodeBidValue = $data['kode_bid']; // Mendapatkan nilai lama dari database
  
  echo '<select class="form-control" name="kode_bid" required>';
  while ($row = mysqli_fetch_assoc($queryBidang)) {
    $rowValue = $row['kode_bid'];
    $selected = ($rowValue === $kodeBidValue) ? 'selected' : '';
    echo "<option value=\"$rowValue\" $selected>$rowValue</option>";
  }
  echo '</select>';
  ?>
</div>

                    <div class="form-group">
  <label>Kode Jabatan</label>
  <?php
  // Mendapatkan data kode jabatan dari database
  $queryJabatan = mysqli_query($koneksi, "SELECT kode_jab FROM jabatan");
  $kodeJabValue = $data['kode_jab']; // Mendapatkan nilai lama dari database
  
  echo '<select class="form-control" name="kode_jab" required>';
  while ($row = mysqli_fetch_assoc($queryJabatan)) {
    $rowValue = $row['kode_jab'];
    $selected = ($rowValue === $kodeJabValue) ? 'selected' : '';
    echo "<option value=\"$rowValue\" $selected>$rowValue</option>";
  }
  echo '</select>';
  ?>
  </div>

                    <div class="form-group">
  <label>Kode Pendidikan</label>
  <?php
  // Mendapatkan data kode pendidikan dari database
  $queryPendidikan = mysqli_query($koneksi, "SELECT kode_pendidikan FROM pendidikan");
  $kodePendidikanValue = $data['kode_pendidikan']; // Mendapatkan nilai lama dari database
  
  echo '<select class="form-control" name="kode_pendidikan" required>';
  while ($row = mysqli_fetch_assoc($queryPendidikan)) {
    $rowValue = $row['kode_pendidikan'];
    $selected = ($rowValue === $kodePendidikanValue) ? 'selected' : '';
    echo "<option value=\"$rowValue\" $selected>$rowValue</option>";
  }
  echo '</select>';
  ?>
  </div>

<div class="form-group">
                    <label>Golongan</label>
                    <select name="golongan" class="form-control" required>
                        <option value="1A" <?php if ($data['golongan'] === '1A')
                          echo 'selected'; ?>>1A</option>
                        <option value="1B" <?php if ($data['golongan'] === '1B')
                          echo 'selected'; ?>>1B</option>
                        <option value="1C" <?php if ($data['golongan'] === '1C')
                          echo 'selected'; ?>>1C</option>
                        <option value="1D" <?php if ($data['golongan'] === '1D')
                          echo 'selected'; ?>>1D</option>
                          <option value="2A" <?php if ($data['golongan'] === '2A')
                            echo 'selected'; ?>>2A</option>
                        <option value="2B" <?php if ($data['golongan'] === '2B')
                          echo 'selected'; ?>>2B</option>
                        <option value="2C" <?php if ($data['golongan'] === '2C')
                          echo 'selected'; ?>>2C</option>
                        <option value="2D" <?php if ($data['golongan'] === '2D')
                          echo 'selected'; ?>>2D</option>
                          <option value="3A" <?php if ($data['golongan'] === '3A')
                            echo 'selected'; ?>>3A</option>
                        <option value="3B" <?php if ($data['golongan'] === '3B')
                          echo 'selected'; ?>>3B</option>
                        <option value="3C" <?php if ($data['golongan'] === '3C')
                          echo 'selected'; ?>>3C</option>
                        <option value="3D" <?php if ($data['golongan'] === '3D')
                          echo 'selected'; ?>>3D</option>
                          <option value="4A" <?php if ($data['golongan'] === '4A')
                            echo 'selected'; ?>>4A</option>
                        <option value="4B" <?php if ($data['golongan'] === '4B')
                          echo 'selected'; ?>>4B</option>
                        <option value="4C" <?php if ($data['golongan'] === '4C')
                          echo 'selected'; ?>>4C</option>
                        <option value="4D" <?php if ($data['golongan'] === '4D')
                          echo 'selected'; ?>>4D</option>
                    </select>
                    </div>

                  
    <div class="form-group">
      <label>Kode Gaji</label>
        <?php
        $readonly = '';
        $selectedValue = ''; // Initialize variable to store the selected value
        
        if (isset($_GET['hal']) && $_GET['hal'] === 'edit') {
          $readonly = 'readonly';
        }

        // Pengambilan data foreign key
        $sql_gaji = "SELECT kode_gaji FROM sistem_gaji";
        $result_gaji = mysqli_query($koneksi, $sql_gaji);

        // Check if the selected value is available
        if (isset($data['kode_gaji'])) {
          $selectedValue = $data['kode_gaji'];
        }

        echo '<select class="form-control" name="kode_gaji" ' . $readonly . ' required>';
        echo '<option value="">Pilih Kode Gaji</option>';

        while ($row_gaji = mysqli_fetch_assoc($result_gaji)) {
          $selected = '';

          // Check if the current row's kode_gaji matches the selected value
          if ($row_gaji['kode_gaji'] === $selectedValue) {
            $selected = 'selected';
          }

          echo '<option value="' . $row_gaji['kode_gaji'] . '" ' . $selected . '>' . $row_gaji['kode_gaji'] . '</option>';
        }

        echo '</select>';
        ?>
    </div>










                    <div class="form-group">
  <label>Kode Tunjangan</label>
  <?php
  // Mendapatkan data kode tunjangan dari database
  $queryTunjangan = mysqli_query($koneksi, "SELECT kode_tunjangan FROM sistem_tunjangan");
  $kodeTunjanganValue = $data['kode_tunjangan']; // Mendapatkan nilai lama dari database
  
  echo '<select class="form-control" name="kode_tunjangan" required>';
  while ($row = mysqli_fetch_assoc($queryTunjangan)) {
    $rowValue = $row['kode_tunjangan'];
    $selected = ($rowValue === $kodeTunjanganValue) ? 'selected' : '';
    echo "<option value=\"$rowValue\" $selected>$rowValue</option>";
  }
  echo '</select>';
  ?>
  </div>

                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" name="foto_kar" class="form-control" >
                    </div>
                    <div class="form-group">
                        <label>Foto Saat Ini</label><br>
                        <?php
                        // Jika ada foto sebelumnya, tampilkan gambar dari path foto tersebut
                        if (!empty($data['foto_kar'])) {
                          echo '<img src="gambar/' . $data['foto_kar'] . '" width="150" height="150">';
                        } else {
                          echo '<p>Tidak ada foto saat ini</p>';
                        }
                        ?>
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