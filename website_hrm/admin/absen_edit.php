<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
  <?php
  include 'header.php';

  ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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
            <h1>Edit Data Absen</h1>
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
              $sql = mysqli_query($koneksi, "SELECT * FROM absen WHERE id='$id'") or die(mysqli_error($koneksi));
              $data = mysqli_fetch_array($sql);
              ?>

              <form role="form" action="absen_edit_proses.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" required>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">NIK Karyawan</label>
                    <input type="text" name="nik" class="form-control"  value="<?php echo $data['nik'] ?>" minlength="16" maxlength="16" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control"  value="<?php echo $data['tanggal'] ?>" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jam Masuk</label>
                    <input type="time" name="jam_masuk" class="form-control"  value="<?php echo $data['jam_masuk'] ?>"required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jam Keluar</label>
                    <input type="time" name="jam_keluar" class="form-control"  value="<?php echo $data['jam_keluar'] ?>" required>
                  </div>
                  
                  <!-- <div class="form-group">
                    <label>Keterangan</label>
                    <select name="keterangan" class="form-control" required>
                        <option value="Hadir" <?php if ($data['keterangan'] === 'Hadir')
                          echo 'selected'; ?>>Hadir</option>
                        <option value="Telat" <?php if ($data['keterangan'] === 'Telat')
                          echo 'selected'; ?>>Telat</option>
                        <option value="Izin" <?php if ($data['keterangan'] === 'Izin')
                          echo 'selected'; ?>>Izin</option>
                        <option value="Tanpa Keterangan" <?php if ($data['keterangan'] === 'Tanpa Keterangan')
                          echo 'selected'; ?>>Tanpa Keterangan</option>
                    </select>
                    </div> -->

                <!-- <div class="form-group">
                  <label for="exampleInputEmail1">Waktu Telat</label>
                  <input type="time" name="waktu_telat" class="form-control" value="<?php echo $data['waktu_telat'] ?>" required>
                </div> -->


        
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
