<?php

?>
<style>
      /* styles.css atau file CSS Anda */

.nav-sidebar .nav-item .nav-link.active {
  background-color: blue; /* Ganti warna biru sesuai keinginan Anda */
  color: white; /* Ganti warna teks jika diperlukan */
}
    </style>
    
<?php

function isActiveMenu($menuLink)
{
  $currentURL = $_SERVER['REQUEST_URI'];
  if (strpos($currentURL, $menuLink) !== false) {
    return 'active';
  }
  return '';
}

?>

<a href="" class="brand-link">
      <img src="inkopdit.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">INKOPDIT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">User</php></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="index.php" class="nav-link <?php echo isActiveMenu('index.php'); ?>">
            <i class="fa fa-home"></i>
            <p>
              &nbsp;&nbsp;&nbsp;Beranda
            </p>
          </a>
        </li>
        <!-- list setup -->

        <!-- akhir list setup ------------------------------------------------------------>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fa fa-address-card"></i>
            <p>
              &nbsp;&nbsp;DATA KARYAWAN
              <i class="fas fa-angle-left right"></i>
              <!--<span class="badge badge-info right"></span>--> <!--kalo buat notif-->
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="karyawan_tampil.php" class="nav-link <?php echo isActiveMenu('karyawan_tampil.php'); ?>">
                <i class='far fa-id-card'></i>
                <p>
                  &nbsp;&nbsp;Karyawan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="absen_tampil.php" class="nav-link <?php echo isActiveMenu('absen_tampil.php'); ?>">
                <i class='fas fa-user-clock'></i>
                <p>
                  &nbsp;&nbsp;Presensi
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="absensi_tampil.php" class="nav-link <?php echo isActiveMenu('absensi_tampil.php'); ?>">
                <i class='fas fa-user-clock'></i>
                <p>
                  &nbsp;&nbsp;Absensi
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="gaji_tampil.php" class="nav-link <?php echo isActiveMenu('gaji_tampil.php'); ?>">
                <i class='fas fa-money-bill-wave'></i>
                <p>
                  &nbsp;&nbsp;Gaji
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="data_kesehatan_tampil.php"
                class="nav-link <?php echo isActiveMenu('data_kesehatan_tampil.php'); ?>">
                <i class="fa fa-heartbeat"></i>
                <p>
                  &nbsp;&nbsp;&nbsp;Data Kesehatan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="fasilitator_tampil.php" class="nav-link <?php echo isActiveMenu('fasilitator_tampil.php'); ?>">
                <i class='fas fa-chalkboard-teacher'></i>
                <p>
                  &nbsp;&nbsp;Fasilitator
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pelatihan_karyawan_tampil.php"
                class="nav-link <?php echo isActiveMenu('pelatihan_karyawan_tampil.php'); ?>">
                <i class="fa fa-book"></i>
                <p>
                  &nbsp;&nbsp;&nbsp;Pelatihan Karyawan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="riwayat_pekerjaan_kary_tampil.php"
                class="nav-link <?php echo isActiveMenu('riwayat_pekerjaan_kary_tampil.php'); ?>">
                <i class='far fa-building'></i>
                <p>
                  &nbsp;Riwayat Pekerjaan 
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="riwayat_pendidikan_tampil.php"
                class="nav-link <?php echo isActiveMenu('riwayat_pendidikan_tampil.php'); ?>">
                <i class='fas fa-user-graduate'></i>
                <p>
                  &nbsp;&nbsp;&nbsp;Riwayat Pendidikan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="tanggungan_tampil.php" class="nav-link <?php echo isActiveMenu('tanggungan_tampil.php'); ?>">
                <i class='fas fa-child'></i>
                <p>
                  &nbsp;&nbsp;&nbsp;Tanggungan
                </p>
              </a>
            </li>

          </ul>
        </li>
        <!-- akhir data perkerja -->

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fa fa-user-plus"></i>
            <p>
              &nbsp;&nbsp;REKRUTMEN
              <i class="fas fa-angle-left right"></i>
              <!--<span class="badge badge-info right"></span>--> <!--kalo buat notif-->
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="rekrutmen_tampil.php" class="nav-link <?php echo isActiveMenu('rekrutmen_tampil.php'); ?>">
                <i class='fas fa-user-plus'></i>
                <p>
                  &nbsp;Rekrutmen
                </p>
              </a>
            </li>

            <li class="nav-item">
              <a href="riwayat_pekerjaan_rek_tampil.php"
                class="nav-link <?php echo isActiveMenu('riwayat_pekerjaan_rek_tampil.php'); ?>">
                <i class='far fa-building'></i>
                <p>
                  &nbsp;&nbsp;Pekerjaan Rekrutmen
                </p>
              </a>
            </li>
          </ul>
        </li>

        <!-- akhir list rekrutmen -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fa fa-wrench"></i>
            <p>
              &nbsp;&nbsp;SETUP
              <i class="fas fa-angle-left right"></i>
              <!--<span class="badge badge-info right"></span>--> <!--kalo buat notif-->
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="bidang_tampil.php" class="nav-link <?php echo isActiveMenu('bidang_tampil.php'); ?>">
                <i class='fas fa-user-friends'></i>
                <p>
                  &nbsp;&nbsp;&nbsp;Bidang
                </p>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="pelatihan_tampil.php" class="nav-link <?php echo isActiveMenu('pelatihan_tampil.php'); ?>">
                <i class='fas fa-clock'></i>
                <p>
                  &nbsp;&nbsp;&nbsp;Pelatihan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="setup_absensi_tampil.php"
                class="nav-link <?php echo isActiveMenu('setup_absensi_tampil.php'); ?>">
                <i class='fas fa-user-clock'></i>
                <p>
                  &nbsp;&nbsp;Setup Absen
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="setup_jam_tampil.php" class="nav-link <?php echo isActiveMenu('setup_jam_tampil.php'); ?>">
                <i class='fas fa-user-friends'></i>
                <p>
                  &nbsp;&nbsp;&nbsp;Setup Jam Masuk
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="jabatan_tampil.php" class="nav-link <?php echo isActiveMenu('jabatan_tampil.php'); ?>">
                <i class='fas fa-user-tie'></i>
                <p>
                  &nbsp;&nbsp;&nbsp;Jabatan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="sistem_gaji_tampil.php" class="nav-link <?php echo isActiveMenu('sistem_gaji_tampil.php'); ?>">
                <i class='fas fa-money-check-alt'></i>
                <p>
                  &nbsp;Sistem Gaji
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="sistem_tunjangan_tampil.php"
                class="nav-link <?php echo isActiveMenu('sistem_tunjangan_tampil.php'); ?>">
                <i class='fas fa-user-tag'></i>
                <p>
                  &nbsp;Sistem Tunjangan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pendidikan_tampil.php" class="nav-link <?php echo isActiveMenu('pendidikan_tampil.php'); ?>">
                <i class='fas fa-user-graduate'></i>
                <p>
                  &nbsp;&nbsp;&nbsp;Pendidikan
                </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="fa fa-print"></i>
            <p>
              &nbsp;&nbsp;Cetak Laporan
              <i class="fas fa-angle-left right"></i>
              <!--<span class="badge badge-info right"></span>--> <!--kalo buat notif-->
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="export.php" class="nav-link <?php echo isActiveMenu('export.php'); ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>Karyawan</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="absen_cetak.php" class="nav-link <?php echo isActiveMenu('export.php'); ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>PRESENSI</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="gaji_cetak.php" class="nav-link <?php echo isActiveMenu('export.php'); ?>">
                <i class="far fa-circle nav-icon"></i>
                <p>GAJI</p>
              </a>
            </li>
            <li class="nav-item">

          </ul>
        </li>
      </ul>
    </ul>
  </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->