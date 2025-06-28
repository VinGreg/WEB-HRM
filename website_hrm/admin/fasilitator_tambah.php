<!DOCTYPE html>
<html>
<head>
  <?php include 'header.php' ?>
  <?php include 'koneksi.php';

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
            <h1>Data Fasilitator</h1>
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
              <form role="form" action="fasilitator_tambah_proses.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                          <label for="exampleInputEmail1">Kode Fasilitator</label>
                          <?php
                          $readonly = '';
                          if (isset($_GET['hal']) && $_GET['hal'] === 'edit') {
                            $readonly = 'readonly';
                          }
                          // Pengambilan data foreign key
                          $sql = "SELECT pelatihan.*, fasilitator.kode_pelatihan AS customer_name 
                          FROM pelatihan
                          JOIN fasilitator ON pelatihan.kode_pel = fasilitator.kode_pelatihan";

                          $result = mysqli_query($koneksi, $sql);

                          // Periksa apakah ada hasil
                          if ($result) {
                            // Loop melalui setiap baris hasil
                            if (mysqli_num_rows($result) > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                                // echo "Kode Pekerjaan: " . $row["kode_pel"] . "<br>";
                                // echo "Customer Name: " . $row["customer_name"] . "<br>";
                                // // Tambahkan data lainnya sesuai kebutuhan
                                // echo "<br>";
                              }
                            } else {
                              echo "Tidak ada hasil.";
                            }
                          } else {
                            echo "Error: " . mysqli_error($koneksi);
                          }
                          // Akhir pengambilan data foreign key
                          ?>
                          <select class="form-control" name="kode_pel" <?= $readonly ?> required>
                            <option value="<?= @$row ?>">Pilih Kode pelatihan</option> // Tambahkan opsi default
                            <?php
                            $query = mysqli_query($koneksi, "SELECT kode_pel FROM pelatihan");
                            while ($row = mysqli_fetch_assoc($query)) {
                              $row = $row['kode_pel'];
                              echo "<option value=\"$row\">$row</option>";
                            }
                            ?>
                          </select>
                        </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">NIK Fasilitator</label>
                    <input type="text" name="nik_fas" class="form-control" pattern="^[0-9]+$" placeholder="Masukan NIK" minlength="16" maxlength="16" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Pelatihan</label>
                    <input type="date" name="tanggal_pelatihan" class="form-control"  placeholder="Pilih Tanggal"  required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Lokasi Pelatihan</label>
                    <input type="text" name="lokasi_pelatihan" class="form-control" placeholder="Lokasi pelatihan" pattern="^[A-Za-z0-9 ]+$" required>
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
