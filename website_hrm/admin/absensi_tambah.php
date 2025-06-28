<!DOCTYPE html>
<html>
<head>
  <?php include 'header.php'
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
            <h1>Data Absensi</h1>
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
                  <form role="form" action="absensi_tambah_proses.php" method="POST">
                    <div class="card-body">
                      <div class="form-group">
                        <label>NIK Karyawan</label>
                        <input type="text" name="nik_absensi" class="form-control"  placeholder="Masukan NIK" minlength="16" maxlength="16" required>
                      </div>
                      <div class="form-group">
                        <label>Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label>Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai" class="form-control" required >
                      </div>
                      <div class="form-group">
                        <label for="keterangan_cuti">Keterangan Cuti</label>
                        <textarea name="keterangan_cuti" class="form-control" style="height: 50px;" placeholder="Keterangan Cuti" ></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Hari Cuti</label>
                        <input type="number" name="jumlah_hari_cuti" class="form-control"  value="<?php echo $data['jumlah_hari_cuti'] ?>" >
                      </div>
                      <!-- <div class="form-group">
                        <label for="exampleInputEmail1">Sisa Hari Cuti</label>
                        <input type="number" name="sisa_hari_cuti" class="form-control"  value="<?php echo $data['sisa_hari_cuti'] ?>" >
                      </div> -->
                     <div class="form-group">
                        <label for="keterangan_cuti">Keterangan Izin</label>
                        <textarea name="keterangan_izin" class="form-control" style="height: 50px;" placeholder="Keterangan Izin"> </textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Hari Izin</label>
                        <input type="number" name="jumlah_hari_izin" class="form-control"  value="<?php echo $data['jumlah_hari_izin'] ?>" >
                      </div>
                      <div class="form-group">
                        <label for="keterangan_cuti">Keterangan Sakit</label>
                        <textarea name="keterangan_sakit" class="form-control" style="height: 50px;"  ></textarea>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Jumlah Hari Sakit</label>
                        <input type="number" name="jumlah_hari_sakit" class="form-control"  value="<?php echo $data['jumlah_hari_sakit'] ?>" >
                      </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- card card-primary -->
              </div>
              <!-- card-header -->
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
