<!DOCTYPE html>
<html>
<head>
  <?php include 'header.php' ?>

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
            <h1>Edit Data Absensi</h1>
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
                  $sql = mysqli_query($koneksi, "SELECT * FROM absensi WHERE id='$id'") or die(mysqli_error($koneksi));
                  $data = mysqli_fetch_array($sql);
                  ?>
                  <form role="form" action="absensi_edit_proses.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" required>
                    <div class="card-body">
                      <div class="form-group">
                        <label for="exampleInputEmail1">NIK</label>
                        <input type="text" name="nik_absensi" class="form-control" pattern="^[0-9]+$" value="<?php echo $data['nik_absensi'] ?>" minlength="16" maxlength="16" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Tanggal Mulai</label>
                        <input type="date" name="tanggal_mulai" class="form-control"  value="<?php echo $data['tanggal_mulai'] ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tanggal Selesai</label>
                        <input type="date" name="tanggal_selesai" class="form-control"  value="<?php echo $data['tanggal_selesai'] ?>"required>
                      </div>
                      <div class="form-group">
                        <label for="keterangan_cuti">Keterangan Cuti</label>
                        <textarea name="keterangan_cuti" class="form-control" style="height: 50px;" placeholder="Keterangan Cuti" ><?php echo $data['keterangan_cuti']; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="jumlah_hari_cuti">Jumlah Hari Cuti</label>
                        <input type="number" name="jumlah_hari_cuti" class="form-control"  value="<?php echo $data['jumlah_hari_cuti'] ?>" >
                      </div>
                      <!-- <div class="form-group">
                          <label for="sisa_hari_cuti">Sisa Hari Cuti</label>
                          <input type="number" name="sisa_hari_cuti" class="form-control" value="<?php echo $data['sisa_hari_cuti'] ?>">
                      </div> -->
                      <div class="form-group">
                        <label for="keterangan_izin">Keterangan Izin</label>
                        <textarea name="keterangan_izin" class="form-control" style="height: 50px;" placeholder="Keterangan Izin" ><?php echo $data['keterangan_izin']; ?></textarea>
                      </div>
                      <div class="form-group">
                          <label for="jumlah_hari_izin">Jumlah Hari Izin</label>
                          <input type="number" name="jumlah_hari_izin" class="form-control" value="<?php echo $data['jumlah_hari_izin'] ?>">
                      </div>
                      <!-- <div class="form-group">
                        <label for="sisa_hari_izin">Sisa Hari Izin</label>
                        <input type="number" name="sisa_hari_izin" class="form-control"  value="<?php echo $data['sisa_hari_izin'] ?>" >
                      </div> -->
                      <div class="form-group">
                        <label for="keterangan_sakit">Keterangan Sakit</label>
                        <textarea name="keterangan_sakit" class="form-control" style="height: 50px;" placeholder="Keterangan Sakit" ><?php echo $data['keterangan_sakit']; ?></textarea>
                      </div>
                      <div class="form-group">
                        <label for="jumlah_hari_sakit">Jumlah Hari Sakit</label>
                        <input type="number" name="jumlah_hari_sakit" class="form-control"  value="<?php echo $data['jumlah_hari_sakit'] ?>" >
                      </div>
                      <!-- <div class="form-group">
                        <label for="exampleInputEmail1">Sisa Hari Sakit</label>
                        <input type="number" name="sisa_hari_sakit" class="form-control"  value="<?php echo $data['sisa_hari_sakit'] ?>" >
                      </div> -->

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
                <!-- card card-primary -->
              </div>
              <!-- /.card header -->
            </div>
            <!-- /.card-->
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
