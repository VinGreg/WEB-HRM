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
                <h1>Data Setup Absensi</h1>
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
                    <a href ="setup_absensi_tambah.php"><button type="submit" class="btn btn-primary">Tambah</button><a>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Tanggal Efektif</th>
                          <th>Jumlah Hari Cuti</th>
                          <th>Jumlah Hari Izin</th>
                          <th>Jumlah Hari Sakit</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <?php
                          include 'koneksi.php';
                          $sql = mysqli_query($koneksi, "SELECT * FROM setup_absensi ORDER BY tanggal_efektif") or die(mysqli_error($koneksi));
                          $no = 0;
                          while ($data = mysqli_fetch_array($sql)) {
                            $no++;
                            $id = $data['id'];

                            ?>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data['tanggal_efektif']; ?></td>
                                        <td><?php echo $data['jumlah_hari_cuti']; ?></td>
                                        <td><?php echo $data['jumlah_hari_izin']; ?></td>
                                        <td><?php echo $data['jumlah_hari_sakit']; ?></td>
                                              <td>
                                                  <a href ="setup_absensi_edit.php<?php echo '?id=' . $id; ?> <button type="submit" class="btn btn-warning">Edit<a>  
                                            <a href ="#" type="button" class="btn btn-danger" title="Hapus Data" data-toggle="modal" data-target="#myModal4<?php echo $id; ?>">Hapus</a>
                                        </td>
                                  </tr>
                        <?php } ?>
                      </tbody>
                        <div class="modal fade" id="myModal4<?php echo $id; ?>" role="dialog">
                          <div class="modal-dialog">
                            <!-- modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                              <h4 class="modal-title">Konfirmasi</h4>
                              </div>
                              <div class="modal-body">
                                <?php
                                include('koneksi.php');
                                $ide = $id;
                                $kueri = mysqli_query($koneksi, "SELECT * FROM setup_absensi WHERE id='$ide'") or die(mysqli_error($koneksi));
                                $data = mysqli_fetch_array($kueri);
                                ?>
                                  <form role="form" action="setup_absensi_hapus_proses.php" method="POST">
                                    <div class="form-group">
                                      <div class="form-line">
                                        <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>" /> 
                                        <label> Yakin ingin menghapus Setup Absen Tanggal <?php echo $data['tanggal_efektif']; ?> </label>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-success" name="has">Ya</button> 
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                                    </div>
                                  </form>
                              </div>
                              <!-- modal body -->
                            </div>
                            <!-- modal content -->
                          </div>
                          <!-- modal dialog -->
                        </div>
                        <!-- modal fade -->
                        
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
