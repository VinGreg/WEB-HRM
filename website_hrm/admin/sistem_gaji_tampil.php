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
            <h1>Data Gaji</h1>
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
                <a href ="sistem_gaji_tambah.php"><button type="submit" class="btn btn-primary">Update Gaji</button><a>
 
              </div>
            
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Golongan</th>
                    <th>Masa Kerja</th>
                    <th>Jumlah Gaji</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
        <?php
        include 'koneksi.php';
        $sql = mysqli_query($koneksi, "SELECT * FROM sistem_gaji ORDER BY id") or die(mysqli_error($koneksi));
        $no = 0;
        while ($data = mysqli_fetch_array($sql)) {
          $no++;
          $id = $data['id'];

          ?>
                                      <td><?php echo $no; ?></td>
                                      <td><?php echo $data['kode_gaji']; ?></td>
                                      <td><?php echo $data['mk']; ?></td>
                                        <td><?php echo $data['jumlah_gaji']; ?></td>
                                      <!-- <td>
                            <a href ="sistem_gaji_edit.php<?php echo '?id=' . $id; ?> <button type="submit" class="btn btn-warning">Edit<a>  
                            <a href ="#" type="button" class="btn btn-danger" title="Hapus Data" data-toggle="modal" data-target="#myModal4<?php echo $id; ?>">Hapus</a>
                        </td> -->
                                  </tr>

                                  <!--  -->

    <?php } ?>
                  
                </table>
              </div>
              <!-- /.card-body -->
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
