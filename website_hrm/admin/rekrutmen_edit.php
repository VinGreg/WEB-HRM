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
            <h1>Edit Data Rekrutmen</h1>
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
              $sql = mysqli_query($koneksi, "SELECT * FROM rekrutmen WHERE id='$id'") or die(mysqli_error($koneksi));
              $data = mysqli_fetch_array($sql);
              ?>

              <form role="form" action="rekrutmen_edit_proses.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" required>
                <div class="card-body">
                  <div class="form-group">
                    <label>NIK</label>
                    <input type="text" name="nik" class="form-control"  value="<?php echo $data['nik'] ?>" minlength="16" maxlength="16" pattern="^[0-9]+$" required>
                  </div>
                  <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control"  value="<?php echo $data['nama'] ?>" pattern= "^[A-Za-z ]+$" required>
                  </div>
                  <div class="form-group">
                        <label >Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Masukan email@gmail.com"  value="<?php echo $data['email'] ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Nomor HP</label>
                        <input type="text" name="no_hp" class="form-control"  value="<?php echo $data['no_hp'] ?>" pattern="^[0-9]+$" minlength="10" maxlength="12" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control"  value="<?php echo $data['alamat'] ?>" placeholder="Masukan Alamat" required>                    
                      </div>
                    <div class="form-group">
                        <label>Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control"  value="<?php echo $data['tempat_lahir'] ?>" pattern="^[A-Za-z ]+$" placeholder="Masukan Tempat Lahir" required>                    
                      </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control"  value="<?php echo $data['tanggal_lahir'] ?>" placeholder="Masukan Tanggal Lahir" required>                    
                      </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" required>
                        <option value="Laki-laki" <?php if ($data['jenis_kelamin'] === 'Laki-laki')
                          echo 'selected'; ?>>Laki-laki</option>
                        <option value="Perempuan" <?php if ($data['jenis_kelamin'] === 'Perempuan')
                          echo 'selected'; ?>>Perempuan</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Status Rekrutmen</label>
                        <select name="status_kar" class="form-control" required>
                        <option value="Menikah" <?php if ($data['status_kar'] === 'Menikah')
                          echo 'selected'; ?>>Menikah</option>
                        <option value="Belum Menikah" <?php if ($data['status_kar'] === 'Belum Menikah')
                          echo 'selected'; ?>>Belum Menikah</option>
                    </select>
                    </div>
                    <div class="form-group">
                        <label>Jumlah Tanggungan</label>
                        <input type="number" name="jumlah_tanggungan" class="form-control"  value="<?php echo $data['jumlah_tanggungan'] ?>" placeholder="Masukan Jumlah Tanggungan" required>                    
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
