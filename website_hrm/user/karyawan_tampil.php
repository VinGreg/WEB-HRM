<!DOCTYPE html>
<html>
<head>
  <?php include 'header.php' ?>    <link rel="stylesheet" type="text/css" href="percantik.css">

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
            <h1>Data karyawan</h1>
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
            <th>NIK</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Golongan Darah</th>
            <th>Tanggal Masuk</th>
            <th>Status</th>
            <th>Nama Bank</th>
            <th>No. Rekening</th>
            <th>Jumlah Tanggungan</th>
            <th>Bidang</th>
            <th>Jabatan</th>
            <th>Pendidikan</th>
            <th>Golongan</th>
            <th>Gaji</th>
            <th>Tunjangan</th>
            <th>Foto    </th>

                  </tr>
                  </thead>
                  <tbody>
                  <tr>
         <?php
         include 'koneksi.php';
         $sql = mysqli_query($koneksi, "
        SELECT karyawan.*, bidang.nama_bid, jabatan.nama_jab, pendidikan.nama_pendidikan, sistem_gaji.jumlah_gaji, sistem_tunjangan.jumlah_tunjangan
        FROM karyawan
        LEFT JOIN bidang ON karyawan.kode_bid = bidang.kode_bid
        LEFT JOIN jabatan ON karyawan.kode_jab = jabatan.kode_jab
        LEFT JOIN pendidikan ON karyawan.kode_pendidikan = pendidikan.kode_pendidikan
        LEFT JOIN sistem_gaji ON karyawan.kode_gaji = sistem_gaji.kode_gaji   
        LEFT JOIN sistem_tunjangan ON karyawan.kode_tunjangan = sistem_tunjangan.kode_tunjangan
        ORDER BY karyawan.nama") or die(mysqli_error($koneksi));
         $no = 0;
         while ($data = mysqli_fetch_array($sql)) {
           $no++;
           $id = $data['id'];

           ?>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $data['nik']; ?></td>
                                                    <td><?php echo $data['nama']; ?></td>
                                                    <td><?php echo $data['email'] ?></td>
                                                    <td><?php echo $data['no_hp'] ?></td>
                                                    <td><?php echo $data['alamat'] ?></td>
                                                    <td><?php echo $data['tempat_lahir'] ?></td>
                                                    <td><?php echo $data['tanggal_lahir'] ?></td>
                                                    <td><?php echo $data['jenis_kelamin'] ?></td>
                                                    <td><?php echo $data['golongan_darah'] ?></td>
                                                    <td><?php echo $data['tanggal_masuk'] ?></td>
                                                    <td><?php echo $data['status_kar'] ?></td>
                                                    <td><?php echo $data['nama_bank'] ?></td>
                                                    <td><?php echo $data['no_rekening'] ?></td>
                                                    <td><?php echo $data['jumlah_tanggungan'] ?></td>
                                                    <td><?php echo $data['nama_bid'] ?></td>
                                                    <td><?php echo $data['nama_jab'] ?></td>
                                                    <td><?php echo $data['nama_pendidikan'] ?></td>
                                                    <td><?php echo $data['golongan'] ?></td>
                                                    <td><?php echo $data['jumlah_gaji'] ?></td>
                                                    <td><?php echo $data['jumlah_tunjangan'] ?></td>
                                                    <td><img src="gambar/<?php echo $data['foto_kar']; ?>" width="100" height="100"></td>
            
                                              
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
                                        $kueri = mysqli_query($koneksi, "SELECT * FROM karyawan WHERE id='$ide'") or die(mysqli_error($koneksi));
                                        $data = mysqli_fetch_array($kueri);
                                        ?>

                                          <form role="form" action="karyawan_hapus_proses.php" method="POST" enctype="multipart/form-data">
                                          <div class="form-group">
                                            <div class="form-line">
                                              <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>" /> 
                                              <label> Yakin ingin menghapus karyawan <?php echo $data['nama']; ?> </label>
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