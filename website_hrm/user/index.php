<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>

<head>
  <?php include "header.php" ?>
    <!--Bootsrap 4 CDN-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<!--Custom styles-->
  <link rel="stylesheet" type="text/css" href="percantik.css">
</head>

<body>
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <?php include 'nav.php' ?>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php include 'sidebar.php' ?>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Beranda</h1>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
      <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark text-center">
        <div class="container">
          <div class="col-md-6 mx-auto" >
            <h1 class="display-4 font-italic">Human Resource Management</h1>
            <p class="lead my-3">Manajemen Sumber Daya Manusia (HRM atau Human Resource Management) adalah pendekatan
              strategis
              yang digunakan untuk mengelola dan mengoptimalkan sumber daya manusia yang ada di
              dalam INKOPDIT. Tujuannya
              untuk menciptakan lingkungan kerja yang produktif, efisien, dan mendukung pertumbuhan INKOPDIT serta
              kesejahteraan karyawan. </p>
          </div>
        </div>
      </div>

      <section class="content">
        <div class="container-fluid">
          <h3 class="pb-4 mb-4 font-italic border-bottom">
            Infografis
          </h3>
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>21</h3>
                  <p>Jumlah Karyawan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-people"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>7</h3>
                  <p> Jumlah Manager</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-stalker "></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>5</h3>
                  <p>Jumlah Pengurus</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>3</h3>
                  <p>Jumlah Pengawas</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-person-outline"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>

        </div><!-- /.container-fluid -->
      </section>

      <main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">
            <h3 class="pb-4 mb-4 font-italic border-bottom">
              CUCO
            </h3>

            <div class="blog-post">
              <h2 class="blog-post-title">VISI MISI</h2>
              <p>VISI</p>
              <p>“Menjadi Koperasi Nasional yang Mandiri, Sehat, Kokoh, Terpercaya dan Masuk Empat Besar Asia”</p>
              <hr>
              <p>MISI</p>
              <p>Memperkuat kelembagaan Inkopdit dengan menyediakan pelayanan Silang Pinjam Nasional dan Perlindungan</p>
              <p>Memperkuat Kelembagaan Puskopdit/Pra-Puskopdit dengan pengembangan pemasaran.</p>
              <p>Membangun Sistem Informasi dan Komunikasi agar pelayanan terintegrasi secara Nasional.</p>
              <blockquote>
                <p>DIISI KATA KATA<strong>DIISI KATA KATA</strong> DIISI KATA KATA</p>
              </blockquote>
              <h2>Heading</h2>
              <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo
                luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac
                consectetur ac, vestibulum at eros.</p>
              <h3>Sub-heading</h3>
              <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
            </div><!-- /.blog-post -->


            <!-- kalender -->
            <div id="calendar">
              <div class="header">
                <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
                <div class="text" data-render="month-year"></div>
                <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
              </div>
              <div class="months" data-flow="left">
                <div class="month month-a">
                  <div class="render render-a"></div>
                </div>
                <div class="month month-b">
                  <div class="render render-b"></div>
                </div>
              </div>
            </div>
            <!-- kalender -->



          </div><!-- /.blog-main -->
          <aside class="col-md-4 blog-sidebar">
            <div class="p-4 mb-3 bg-light rounded">
              <h4 class="font-italic">About</h4>
              <p class="mb-0">Induk Koperasi Kredit (INKOPDIT) adalah Koperasi Kredit Sekunder tungkat nasional
                berkedudukan
                di Jakarta yang berfungsi sebagai sentral pelayanan keuangan nasional untuk melayani Puskopdit (Pusat
                Koperasi Kredit)
                di seluruh Indonesia.Fungsi utama dari INKOPDIT yaitu mengembangkan Koperasi Kredit di wilayah Indonesia
                baik kuantitas
                maupun kualitas sehingga jaringan usaha Koperasi kredit yang kuat, sehat dan mandiri mulai dari Koperasi
                Kredit Primer,
                Sekunder Daerah maupun Nasional.</p>
            </div>

            <div class="p-4">
              <h4 class="font-italic">Mitra Kerja</h4>
              <ol class="list-unstyled mb-0">
                <li><a href="http://woccu.org/">WOCCU</a></li>
                <li><a href="http://www.aaccu.coop/">AACCU</a></li>
              </ol>
            </div>

            <div class="p-4">
              <h4 class="font-italic">Sosial</h4>
              <ol class="list-unstyled">
                <p>Jl. Gunung Sahari III No. 11A<br />Jakarta 10610, Indonesia</p>
                <li><i class="fa fa-phone"></i><a href="tel:+62214257107"> (021)4257107</a>,<a
                    href="tel:+62214269576">4269576</a>,<a href="tel:+62214256559">4256559</a></li>
                <li><i class="fa fa-envelope"></i><a href="mailto:cucoindo@indo.net.id"> cucoindo@indo.net.id</a></li>

              </ol>
            </div>
          </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

      </main>
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
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- jam -->

  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>
<style>
  
</style>
</html>