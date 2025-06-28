<!DOCTYPE html>
<html>
<head>
  <?php include 'header.php';
  include "koneksi.php";
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
          <div class="col-sm-6">
            <h1>Edit Data Gaji</h1>
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

              $sql = mysqli_query($koneksi, "SELECT * FROM setup_gaji ORDER BY id") or die(mysqli_error($koneksi));
              $data = mysqli_fetch_array($sql);
              ?>

              <form role="form" action="sistem_gaji_edit_proses.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" required>
                <div class="card-body">
                  <div class="form-group">
                          <label for="exampleInputEmail1">Tanggal Berlaku</label>
                          <input type="date"  name="tanggal_efektif" value="<?php echo $data['tanggal_efektif'] ?>" class="form-control" required placeholder="Masukan tanggal">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Gaji Awal Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="gajiAwalNew" value="<?php echo $data['gajiAwalNew'] ?>" class="form-control" required placeholder="Masukan Nilai Gaji Awal Baru">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Kenaikan Berkala Baru</label>
                          <input type="text" name="persenNaikGajiNew" class="form-control" value="<?php echo $data['kenaikan_berkala'] ?>" pattern="^[0-9]+([,.][0-9]+)?$" placeholder="Masukkan Persentase Naik Gaji Baru" required>
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol1bNew">Persentase Naik Gaji Golongan 1B Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol1bNew" value="<?php echo $data['persen_gaji_1b'] ?>"class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 1D">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol1cNew">Persentase Naik Gaji Golongan 1C Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol1cNew" value="<?php echo $data['persen_gaji_1c'] ?>"class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 1D">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol1dNew">Persentase Naik Gaji Golongan 1D Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol1dNew" value="<?php echo $data['persen_gaji_1d'] ?>"class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 1D">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol2bNew">Persentase Naik Gaji Golongan 2B Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol2bNew" value="<?php echo $data['persen_gaji_2b'] ?>"class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 2A">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol2cNew">Persentase Naik Gaji Golongan 2C Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol2cNew" value="<?php echo $data['persen_gaji_2c'] ?>"class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 2B">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol2dNew">Persentase Naik Gaji Golongan 2D Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol2dNew" value="<?php echo $data['persen_gaji_2d'] ?>"class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 2C">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol3bNew">Persentase Naik Gaji Golongan 3B Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol3bNew" value="<?php echo $data['persen_gaji_3b'] ?>"class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 2D">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol3cNew">Persentase Naik Gaji Golongan 3C Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol3aNew" value="<?php echo $data['persen_gaji_3c'] ?>"class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 3A">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol3dNew">Persentase Naik Gaji Golongan 3D Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol3bNew" value="<?php echo $data['persen_gaji_3d'] ?>"class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 3B">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol4bNew">Persentase Naik Gaji Golongan 4B Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol3cNew" value="<?php echo $data['persen_gaji_4b'] ?>"class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 3C">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol4cNew">Persentase Naik Gaji Golongan 4C Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol3dNew" value="<?php echo $data['persen_gaji_4c'] ?>"class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 3D">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol4dNew">Persentase Naik Gaji Golongan 4D Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol4aNew" value="<?php echo $data['persen_gaji_4d'] ?>"class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 4A">
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
