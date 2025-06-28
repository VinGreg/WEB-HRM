<!DOCTYPE html>
<html>
<head>
  <?php include 'header.php';
  include "koneksi.php";

  ?>
    <link rel="stylesheet" type="text/css" href="percantik.css">

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
              
            
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                        <th>NIK Karyawan</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Keterangan Cuti</th>
                        <th>Jumlah Hari Cuti</th>
                        <th>Sisa Hari Cuti</th>
                        <th>Keterangan Izin</th>
                        <th>Jumlah Hari Izin</th>
                        <th>Sisa Hari Izin</th>
                        <th>Keterangan Izin</th>
                        <th>Jumlah hari Izin</th>
                        <th>Sisa hari Izin</th>

                  </tr>
                  </thead>
                  <tbody>
                  <tr>
         <?php
         include 'koneksi.php';
         $sql = mysqli_query($koneksi, "SELECT * FROM absensi ORDER BY nik_absensi") or die(mysqli_error($koneksi));
         $no = 0;
         while ($data = mysqli_fetch_array($sql)) {
           $no++;
           $id = $data['id'];
           ?>
                                                      <td><?php echo $no; ?></td>
                                                      <td><?php echo $data['nik_absensi']; ?></td>
                                                      <td><?php echo $data['tanggal_mulai']; ?></td>
                                                      <td><?php echo $data['tanggal_selesai']; ?></td>
                                                      <td><?php echo $data['keterangan_cuti']; ?></td>
                                                      <td><?php echo $data['jumlah_hari_cuti']; ?></td>
                                                      <td><?php echo $data['sisa_hari_cuti']; ?></td>
                                                      <td><?php echo $data['keterangan_izin']; ?></td>
                                                        <td><?php echo $data['jumlah_hari_izin']; ?></td>
                                                        <td><?php echo $data['sisa_hari_izin']; ?></td>
                                                          <td><?php echo $data['keterangan_sakit']; ?></td>
                                                        <td><?php echo $data['jumlah_hari_sakit']; ?></td>
                                                        <td><?php echo $data['sisa_hari_sakit']; ?></td>
                                                    
                                                  </tr>

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
                                          $kueri = mysqli_query($koneksi, "SELECT * FROM absensi WHERE id='$ide'") or die(mysqli_error($koneksi));
                                          $data = mysqli_fetch_array($kueri);
                                          ?>

                                            <form role="form" action="absensi_hapus_proses.php" method="POST" enctype="multipart/form-data">
                                            <div class="form-group">
                                              <div class="form-line">
                                                <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>" /> 
                                                <label> Yakin ingin menghapus absensi <?php echo $data['nik_absensi']; ?> </label>
                                              </div>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-success" name="has">Ya</button> 
                                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> 
                                            </div>
                                          </form>

                                          </div>
                                          </div>
                                          </div>
                                          </div>

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
<!-- JavaScript for Excel Download -->
<script>
  function downloadExcel(id) {
    // You can customize the download URL based on your file location and parameters.
    // For this example, I'll assume you have a "download_excel.php" file handling the download.
    var downloadUrl = 'download_excel.php?id=' + id;
    window.open(downloadUrl, '_blank');
  }
</script>
<style>
  .card-body{
    max-height:fit-content ;
    border: 1px solid #ddd;
    display: flex;
    overflow-x:auto;
  }


</style>
</body>
</html>