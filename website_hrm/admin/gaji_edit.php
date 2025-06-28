<!DOCTYPE html>
<html>
<head>
  <?php include 'header.php';

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
              $id = $_GET['id'];
              $sql = mysqli_query($koneksi, "SELECT * FROM gaji WHERE id='$id'") or die(mysqli_error($koneksi));
              $data = mysqli_fetch_array($sql);
              ?>

              <form role="form" action="gaji_edit_proses.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" required>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input type="text" name="nik_gaji" class="form-control" minlength="16"  maxlength="16" pattern="^[0-9]+$"  value="<?php echo $data['nik_gaji'] ?>" placeholder="Masukan nik" required>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Gaji</label>
                    <input type="text" name="gaji" class="form-control"pattern="^[0-9]+$"  value="<?php echo $data['gaji'] ?>" placeholder="Masukan Jumlah Gaji" required>
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Potongan</label>
                    <input type="text" name="potongan" class="form-control" pattern="^[0-9]+$"  value="<?php echo $data['potongan'] ?>" placeholder="Masukan Jumlah Potongan" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tunjangan</label>
                    <input type="text" name="tunjangan" class="form-control" pattern="^[0-9]+$"   value="<?php echo $data['tunjangan'] ?>" placeholder="Masukan Jumlah Tunjangan" required>
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputPassword1">Gaji Akhir</label>
                    <input type="text" name="gaji_akhir" class="form-control"  pattern="^[0-9]+$"  value="<?php echo $data['gaji_akhir'] ?>" placeholder="Masukan Gaji Akhir" required>
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control"  value="<?php echo $data['tanggal'] ?>" placeholder="Pilih Tanggal" required>
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
