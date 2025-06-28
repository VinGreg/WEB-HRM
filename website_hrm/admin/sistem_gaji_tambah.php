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
              <h1>SETUP GAJI DAN PERSEN NAIK GAJI</h1>
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
                    <form role="form" action="" action="" method="POST">
                      <div class="card-body">
<?php

class hitung_gaji
{
  public function hitungGaji1(
    $golongan,
    $masaKerjaTahun,
    $gajiAwal,
    $persenNaikGaji,
    $persenNaikGajiGol1b,
    $persenNaikGajiGol1c,
    $persenNaikGajiGol1d,
    $persenNaikGajiGol2a,
    $persenNaikGajiGol2b,
    $persenNaikGajiGol2c,
    $persenNaikGajiGol2d,
    $persenNaikGajiGol3a,
    $persenNaikGajiGol3b,
    $persenNaikGajiGol3c,
    $persenNaikGajiGol3d,
    $persenNaikGajiGol4a,
    $persenNaikGajiGol4b,
    $persenNaikGajiGol4c,
    $persenNaikGajiGol4d

  ) {

    // Hitung gaji berdasarkan golongan dan masa kerja
    if ($golongan == '1A') {

      if ($masaKerjaTahun > 0) {
        $gajiAkhir = $gajiAwal;

        for (
          $i = 1;
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAkhir = $gajiAwal;
      } else {
        $gajiAkhir = 0;
      }
    } elseif ($golongan == '1B') {

      if ($masaKerjaTahun > 0) {
        $gajiAwal = ($this->hitungGaji1(
          '1A',
          3,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol1b + $gajiAwal;

        for (
          $i = 1;
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {

        $gajiAwal = $this->hitungGaji1(
          '1A',
          3,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol1b + $gajiAwal;
      } else {
        $gajiAkhir = 0;
      }
    } elseif ($golongan == '1C') {

      if ($masaKerjaTahun > 0) {
        $gajiAwal = ($this->hitungGaji1(
          '1B',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol1c + $gajiAwal;

        for (
          $i = 1;
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {

        $gajiAwal = $this->hitungGaji1(
          '1B',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol1c + $gajiAwal;
      } else {
        $gajiAkhir = 0;
      }
    } elseif ($golongan == '1D') {

      if ($masaKerjaTahun > 0) {
        $gajiAwal = ($this->hitungGaji1(
          '1C',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol1d + $gajiAwal;
        for (
          $i = 1;
          // 1 < 0
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {

        $gajiAwal = $this->hitungGaji1(
          '1C',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol1d + $gajiAwal;
      } else {
        $masaKerjaTahun = 0;
      }
    } elseif ($golongan == '2A') {

      if ($masaKerjaTahun > 0) {
        $gajiAwal = ($this->hitungGaji1(
          '1D',
          4,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol2a + $gajiAwal;

        for (
          $i = 1;
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAwal = $this->hitungGaji1(
          '1D',
          4,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol2a + $gajiAwal;
      } else {
        $gajiAkhir = 0;
      }
    } elseif ($golongan == '2B') {

      // Naik golongan jika masa kerja lebih dari 2 tahun
      if ($masaKerjaTahun > 0) {
        $gajiAkhir = ($this->hitungGaji1(
          '2A',
          3,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        )
          * $persenNaikGajiGol2b +
          ($this->hitungGaji1(
            '2A',
            3,
            $gajiAwal,
            $persenNaikGaji,
            $persenNaikGajiGol1b,
            $persenNaikGajiGol1c,
            $persenNaikGajiGol1d,
            $persenNaikGajiGol2a,
            $persenNaikGajiGol2b,
            $persenNaikGajiGol2c,
            $persenNaikGajiGol2d,
            $persenNaikGajiGol3a,
            $persenNaikGajiGol3b,
            $persenNaikGajiGol3c,
            $persenNaikGajiGol3d,
            $persenNaikGajiGol4a,
            $persenNaikGajiGol4b,
            $persenNaikGajiGol4c,
            $persenNaikGajiGol4d
          )
          );
        for (
          $i = 1;
          // 1 < 0
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir += $gajiAkhir * $persenNaikGaji;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAkhir = $this->hitungGaji1(
          '2A',
          3,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );

        $gajiAkhir = $gajiAkhir * $persenNaikGajiGol2b + $gajiAkhir;
      } else {
        $masaKerjaTahun = 0;
      }
    } elseif ($golongan == '2C') {

      if ($masaKerjaTahun > 0) {
        $gajiAkhir = ($this->hitungGaji1(
          '2B',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        )
          * $persenNaikGajiGol2c +
          ($this->hitungGaji1(
            '2B',
            0,
            $gajiAwal,
            $persenNaikGaji,
            $persenNaikGajiGol1b,
            $persenNaikGajiGol1c,
            $persenNaikGajiGol1d,
            $persenNaikGajiGol2a,
            $persenNaikGajiGol2b,
            $persenNaikGajiGol2c,
            $persenNaikGajiGol2d,
            $persenNaikGajiGol3a,
            $persenNaikGajiGol3b,
            $persenNaikGajiGol3c,
            $persenNaikGajiGol3d,
            $persenNaikGajiGol4a,
            $persenNaikGajiGol4b,
            $persenNaikGajiGol4c,
            $persenNaikGajiGol4d
          )
          );
        for (
          $i = 1;
          // 1 < 0
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAkhir = $this->hitungGaji1(
          '2B',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAkhir * $persenNaikGajiGol2c + $gajiAkhir;
      } else {
        $gajiAkhir = 0;
      }
    } elseif ($golongan == '2D') {

      if ($masaKerjaTahun > 0) {
        $gajiAkhir = ($this->hitungGaji1(
          '2C',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        )
          * $persenNaikGajiGol2d +
          ($this->hitungGaji1(
            '2C',
            0,
            $gajiAwal,
            $persenNaikGaji,
            $persenNaikGajiGol1b,
            $persenNaikGajiGol1c,
            $persenNaikGajiGol1d,
            $persenNaikGajiGol2a,
            $persenNaikGajiGol2b,
            $persenNaikGajiGol2c,
            $persenNaikGajiGol2d,
            $persenNaikGajiGol3a,
            $persenNaikGajiGol3b,
            $persenNaikGajiGol3c,
            $persenNaikGajiGol3d,
            $persenNaikGajiGol4a,
            $persenNaikGajiGol4b,
            $persenNaikGajiGol4c,
            $persenNaikGajiGol4d
          )
          );
        for (
          $i = 1;
          // 1 < 0
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir += $gajiAkhir * $persenNaikGaji;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAkhir = $this->hitungGaji1(
          '2C',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );

        $gajiAkhir = $gajiAkhir * $persenNaikGajiGol2d + $gajiAkhir;
      } else {
        $gajiAkhir = 0;
      }
    } elseif ($golongan == '3A') {

      if ($masaKerjaTahun > 0) {
        $gajiAwal = ($this->hitungGaji1(
          '2D',
          2,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol3a + $gajiAwal;

        for (
          $i = 1;
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAwal = $this->hitungGaji1(
          '2D',
          2,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol3a + $gajiAwal;
      } else {
        $gajiAkhir = 0;
      }
    } elseif ($golongan == '3B') {

      // Naik golongan jika masa kerja lebih dari 2 tahun
      if ($masaKerjaTahun > 0) {
        $gajiAwal = ($this->hitungGaji1(
          '3A',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol3b + $gajiAwal;
        for (
          $i = 1;
          // 1 < 0
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAwal = $this->hitungGaji1(
          '3A',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol3b + $gajiAwal;
      } else {
        $masaKerjaTahun = 0;
      }
    } elseif ($golongan == '3C') {

      if ($masaKerjaTahun > 0) {
        $gajiAwal = ($this->hitungGaji1(
          '3B',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol3c + $gajiAwal;
        for (
          $i = 1;
          // 1 < 0
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAwal = $this->hitungGaji1(
          '3B',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol3c + $gajiAwal;
      } else {
        $masaKerjaTahun = 0;
      }
    } elseif ($golongan == '3D') {

      if ($masaKerjaTahun > 0) {
        $gajiAwal = ($this->hitungGaji1(
          '3C',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol3d + $gajiAwal;
        for (
          $i = 1;
          // 1 < 0
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAwal = $this->hitungGaji1(
          '3C',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol3d + $gajiAwal;
      } else {
        $masaKerjaTahun = 0;
      }
    } elseif ($golongan == '4A') {
      if ($masaKerjaTahun > 0) {
        $gajiAwal = ($this->hitungGaji1(
          '3D',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol4a + $gajiAwal;
        for (
          $i = 1;
          // 1 < 0
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAwal = $this->hitungGaji1(
          '3D',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol4a + $gajiAwal;
      } else {
        $masaKerjaTahun = 0;
      }
    } elseif ($golongan == '4B') {
      if ($masaKerjaTahun > 0) {
        $gajiAwal = ($this->hitungGaji1(
          '4A',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol4b + $gajiAwal;
        for (
          $i = 1;
          // 1 < 0
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAwal = $this->hitungGaji1(
          '4A',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol4b + $gajiAwal;
      } else {
        $masaKerjaTahun = 0;
      }
    } elseif ($golongan == '4C') {
      if ($masaKerjaTahun > 0) {
        $gajiAwal = ($this->hitungGaji1(
          '4B',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol4c + $gajiAwal;
        for (
          $i = 1;
          // 1 < 0
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAwal = $this->hitungGaji1(
          '4B',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol4c + $gajiAwal;
      } else {
        $masaKerjaTahun = 0;
      }
    } elseif ($golongan == '4D') {
      if ($masaKerjaTahun > 0) {
        $gajiAwal = ($this->hitungGaji1(
          '4C',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        )
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol4d + $gajiAwal;
        for (
          $i = 1;
          // 1 < 0
          $i <= $masaKerjaTahun;
          $i++
        ) {
          $gajiAkhir = $gajiAkhir * $persenNaikGaji + $gajiAkhir;
        }
      } elseif ($masaKerjaTahun == 0) {
        $gajiAwal = $this->hitungGaji1(
          '4C',
          0,
          $gajiAwal,
          $persenNaikGaji,
          $persenNaikGajiGol1b,
          $persenNaikGajiGol1c,
          $persenNaikGajiGol1d,
          $persenNaikGajiGol2a,
          $persenNaikGajiGol2b,
          $persenNaikGajiGol2c,
          $persenNaikGajiGol2d,
          $persenNaikGajiGol3a,
          $persenNaikGajiGol3b,
          $persenNaikGajiGol3c,
          $persenNaikGajiGol3d,
          $persenNaikGajiGol4a,
          $persenNaikGajiGol4b,
          $persenNaikGajiGol4c,
          $persenNaikGajiGol4d
        );
        $gajiAkhir = $gajiAwal * $persenNaikGajiGol4d + $gajiAwal;
      } else {
        $masaKerjaTahun = 0;
      }
    } else {
      // Golongan tidak valid
      $gajiAkhir = 0;
    }
    return $gajiAkhir;
  }

  //awal mula sc update
  private $gajiAwal = 1000000; // Default value untuk gajiAwal
  private $persenNaikGaji = 0.05; // Default value untuk persenNaikGaji
  private $persenNaikGajiGol1b = 0.05;
  private $persenNaikGajiGol1c = 0.05;
  private $persenNaikGajiGol1d = 0.05;
  private $persenNaikGajiGol2a = 0.06;
  private $persenNaikGajiGol2b = 0.06;
  private $persenNaikGajiGol2c = 0.06;
  private $persenNaikGajiGol2d = 0.06;
  private $persenNaikGajiGol3a = 0.07;
  private $persenNaikGajiGol3b = 0.07;
  private $persenNaikGajiGol3c = 0.07;
  private $persenNaikGajiGol3d = 0.07;
  private $persenNaikGajiGol4a = 0.08;
  private $persenNaikGajiGol4b = 0.08;
  private $persenNaikGajiGol4c = 0.08;
  private $persenNaikGajiGol4d = 0.08;
  // Getter method gajiAwal
  public function getGajiAwal()
  {
    return $this->gajiAwal;
  }

  // Setter method gajiAwal
  public function setGajiAwal($gajiAwalNew)
  {
    $this->gajiAwal = $gajiAwalNew;
  }

  // Getter method persenNaikGaji
  public function getPersenNaikGaji()
  {
    return $this->persenNaikGaji;
  }

  // Setter method persenNaikGaji
  public function setPersenNaikGaji($persenNaikGajiNew)
  {
    $this->persenNaikGaji = $persenNaikGajiNew;
  }


  //----------------------------------------------------------------------------
  //getter persen naik gaji 1b
  public function getPersenNaikGajiGol1b()
  {
    return $this->persenNaikGajiGol1b;
  }
  // Setter method naik gaji 1b
  public function setPersenNaikGajiGol1b($persenNaikGajiGol1bNew)
  {
    $this->persenNaikGajiGol1b = $persenNaikGajiGol1bNew;
  }
  //getter persen naik gaji 1c
  public function getPersenNaikGajiGol1c()
  {
    return $this->persenNaikGajiGol1c;
  }
  // Setter method naik gaji 1c
  public function setPersenNaikGajiGol1c($persenNaikGajiGol1cNew)
  {
    $this->persenNaikGajiGol1c = $persenNaikGajiGol1cNew;
  }
  // getter naik gaji 1d
  public function getPersenNaikGajiGol1d()
  {
    return $this->persenNaikGajiGol1d;
  }
  // Setter method naik gaji 1d
  public function setPersenNaikGajiGol1d($persenNaikGajiGol1dNew)
  {
    $this->persenNaikGajiGol1d = $persenNaikGajiGol1dNew;
  }
  //fetter naik gaji 2a
  public function getPersenNaikGajiGol2a()
  {
    return $this->persenNaikGajiGol2a;
  }

  // Setter method naik gaji 2a
  public function setPersenNaikGajiGol2a($persenNaikGajiGol2aNew)
  {
    $this->persenNaikGajiGol2a = $persenNaikGajiGol2aNew;
  }
  //getter naik gaji 2b
  public function getPersenNaikGajiGol2b()
  {
    return $this->persenNaikGajiGol2b;
  }

  // Setter method 2b
  public function setPersenNaikGajiGol2b($persenNaikGajiGol2bNew)
  {
    $this->persenNaikGajiGol2b = $persenNaikGajiGol2bNew;
  }
  //getter naik gaji 2c
  public function getPersenNaikGajiGol2c()
  {
    return $this->persenNaikGajiGol2c;
  }
  // Setter method naik gaji 2c
  public function setPersenNaikGajiGol2c($persenNaikGajiGol2cNew)
  {
    $this->persenNaikGajiGol2c = $persenNaikGajiGol2cNew;
  }
  //getter 2d
  public function getPersenNaikGajiGol2d()
  {
    return $this->persenNaikGajiGol2d;
  }
  // Setter method 2d
  public function setPersenNaikGajiGol2d($persenNaikGajiGol2dNew)
  {
    $this->persenNaikGajiGol2d = $persenNaikGajiGol2dNew;
  }
  //getter 3a
  public function getPersenNaikGajiGol3a()
  {
    return $this->persenNaikGajiGol3a;
  }
  // Setter method 3a
  public function setPersenNaikGajiGol3a($persenNaikGajiGol3aNew)
  {
    $this->persenNaikGajiGol3a = $persenNaikGajiGol3aNew;
  }
  //getter 3b
  public function getPersenNaikGajiGol3b()
  {
    return $this->persenNaikGajiGol3b;
  }
  // Setter method 3b
  public function setPersenNaikGajiGol3b($persenNaikGajiGol3bNew)
  {
    $this->persenNaikGajiGol3b = $persenNaikGajiGol3bNew;
  }
  //getter 3c
  public function getPersenNaikGajiGol3c()
  {
    return $this->persenNaikGajiGol3c;
  }

  // Setter method 3c
  public function setPersenNaikGajiGol3c($persenNaikGajiGol3cNew)
  {
    $this->persenNaikGajiGol3c = $persenNaikGajiGol3cNew;
  }
  //getter 3d
  public function getPersenNaikGajiGol3d()
  {
    return $this->persenNaikGajiGol3d;
  }
  // Setter method 3d
  public function setPersenNaikGajiGol3d($persenNaikGajiGol3dNew)
  {
    $this->persenNaikGajiGol3d = $persenNaikGajiGol3dNew;
  }
  //getter naik golongan 4a
  public function getPersenNaikGajiGol4a()
  {
    return $this->persenNaikGajiGol4a;
  }

  // Setter method 4a
  public function setPersenNaikGajiGol4a($persenNaikGajiGol4aNew)
  {
    $this->persenNaikGajiGol4a = $persenNaikGajiGol4aNew;
  }
  //getter 4b
  public function getPersenNaikGajiGol4b()
  {
    return $this->persenNaikGajiGol4b;
  }
  // Setter method 4b
  public function setPersenNaikGajiGol4b($persenNaikGajiGol4bNew)
  {
    $this->persenNaikGajiGol4b = $persenNaikGajiGol4bNew;
  }
  //getter 4c
  public function getPersenNaikGajiGol4c()
  {
    return $this->persenNaikGajiGol4c;
  }

  // Setter method 4c
  public function setPersenNaikGajiGol4c($persenNaikGajiGol4cNew)
  {
    $this->persenNaikGajiGol4c = $persenNaikGajiGol4cNew;
  }
  //getter 4d
  public function getPersenNaikGajiGol4d()
  {
    return $this->persenNaikGajiGol4d;
  }
  // Setter method 4d
  public function setPersenNaikGajiGol4d($persenNaikGajiGol4dNew)
  {
    $this->persenNaikGajiGol4c = $persenNaikGajiGol4dNew;
  }
}
//----------------------------------------------------------------------------
$objHitungGaji = new hitung_gaji();
// Check if the form is submitted and process the input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve the input value from the form
  if (isset($_POST["gajiAwalNew"])) {
    $gajiAwalNew = floatval($_POST["gajiAwalNew"]);
    $objHitungGaji->setGajiAwal($gajiAwalNew);
  }
  if (isset($_POST["persenNaikGajiNew"])) {
    $persenNaikGajiNew = floatval($_POST["persenNaikGajiNew"]);
    $objHitungGaji->setPersenNaikGaji($persenNaikGajiNew);
  }
  if (isset($_POST["persenNaikGajiGol1bNew"])) {
    $persenNaikGajiGol1bNew = floatval($_POST["persenNaikGajiGol1bNew"]);
    $objHitungGaji->setPersenNaikGajiGol1b($persenNaikGajiGol1bNew);
  }
  if (isset($_POST["persenNaikGajiGol1cNew"])) {
    $persenNaikGajiGol1cNew = floatval($_POST["persenNaikGajiGol1cNew"]);
    $objHitungGaji->setPersenNaikGajiGol1c($persenNaikGajiGol1cNew);
  }
  if (isset($_POST["persenNaikGajiGol1dNew"])) {
    $persenNaikGajiGol1dNew = floatval($_POST["persenNaikGajiGol1dNew"]);
    $objHitungGaji->setPersenNaikGajiGol1d($persenNaikGajiGol1dNew);
  }
  if (isset($_POST["persenNaikGajiGol2aNew"])) {
    $persenNaikGajiGol2aNew = floatval($_POST["persenNaikGajiGol2aNew"]);
    $objHitungGaji->setPersenNaikGajiGol2a($persenNaikGajiGol2aNew);
  }
  if (isset($_POST["persenNaikGajiGol2bNew"])) {
    $persenNaikGajiGol2bNew = floatval($_POST["persenNaikGajiGol2bNew"]);
    $objHitungGaji->setPersenNaikGajiGol2b($persenNaikGajiGol2bNew);
  }
  if (isset($_POST["persenNaikGajiGol2cNew"])) {
    $persenNaikGajiGol2cNew = floatval($_POST["persenNaikGajiGol2cNew"]);
    $objHitungGaji->setPersenNaikGajiGol2c($persenNaikGajiGol2cNew);
  }
  if (isset($_POST["persenNaikGajiGol2dNew"])) {
    $persenNaikGajiGol2dNew = floatval($_POST["persenNaikGajiGol2dNew"]);
    $objHitungGaji->setPersenNaikGajiGol2d($persenNaikGajiGol2dNew);
  }
  if (isset($_POST["persenNaikGajiGol3aNew"])) {
    $persenNaikGajiGol3aNew = floatval($_POST["persenNaikGajiGol3aNew"]);
    $objHitungGaji->setPersenNaikGajiGol3a($persenNaikGajiGol3aNew);
  }
  if (isset($_POST["persenNaikGajiGol3bNew"])) {
    $persenNaikGajiGol3bNew = floatval($_POST["persenNaikGajiGol3bNew"]);
    $objHitungGaji->setPersenNaikGajiGol3b($persenNaikGajiGol3bNew);
  }
  if (isset($_POST["persenNaikGajiGol3cNew"])) {
    $persenNaikGajiGol3cNew = floatval($_POST["persenNaikGajiGol3cNew"]);
    $objHitungGaji->setPersenNaikGajiGol3c($persenNaikGajiGol3cNew);
  }
  if (isset($_POST["persenNaikGajiGol3dNew"])) {
    $persenNaikGajiGol3dNew = floatval($_POST["persenNaikGajiGol3dNew"]);
    $objHitungGaji->setPersenNaikGajiGol3d($persenNaikGajiGol3dNew);
  }
  if (isset($_POST["persenNaikGajiGol4aNew"])) {
    $persenNaikGajiGol4aNew = floatval($_POST["persenNaikGajiGol4aNew"]);
    $objHitungGaji->setPersenNaikGajiGol4a($persenNaikGajiGol4aNew);
  }
  if (isset($_POST["persenNaikGajiGol4bNew"])) {
    $persenNaikGajiGol4bNew = floatval($_POST["persenNaikGajiGol4bNew"]);
    $objHitungGaji->setPersenNaikGajiGol4b($persenNaikGajiGol4bNew);
  }
  if (isset($_POST["persenNaikGajiGol4cNew"])) {
    $persenNaikGajiGol4cNew = floatval($_POST["persenNaikGajiGol4cNew"]);
    $objHitungGaji->setPersenNaikGajiGol4c($persenNaikGajiGol4cNew);
  }
  if (isset($_POST["persenNaikGajiGol4dNew"])) {
    $persenNaikGajiGol4dNew = floatval($_POST["persenNaikGajiGol4dNew"]);
    $objHitungGaji->setPersenNaikGajiGol4d($persenNaikGajiGol4dNew);
  }
}
?>

<!-- <!DOCTYPE html>
<html>

<head>
  <title>Hasil Perhitungan Gaji</title>
</head> -->

<!-- <body>
  <h2>Hasil Perhitungan Gaji</h2>
  <form method="post" action="">
    Masukkan Nilai Gaji Awal Baru: <input type="text" name="gajiAwalNew"><br>
    Masukkan Persentase Naik Gaji Baru: <input type="text" name="persenNaikGajiNew"><br>
    Masukkan Persentase Naik Gaji Golongan 1B: <input type="text" name="persenNaikGajiGol1bNew"><br>
    Masukkan Persentase Naik Gaji Golongan 1C: <input type="text" name="persenNaikGajiGol1cNew"><br>
    Masukkan Persentase Naik Gaji Golongan 1D: <input type="text" name="persenNaikGajiGol1dNew"><br>
    Masukkan Persentase Naik Gaji Golongan 2A: <input type="text" name="persenNaikGajiGol2aNew"><br>
    Masukkan Persentase Naik Gaji Golongan 2B: <input type="text" name="persenNaikGajiGol2bNew"><br>
    Masukkan Persentase Naik Gaji Golongan 2C: <input type="text" name="persenNaikGajiGol2cNew"><br>
    Masukkan Persentase Naik Gaji Golongan 2D: <input type="text" name="persenNaikGajiGol2dNew"><br>
    Masukkan Persentase Naik Gaji Golongan 3A: <input type="text" name="persenNaikGajiGol3aNew"><br>
    Masukkan Persentase Naik Gaji Golongan 3B: <input type="text" name="persenNaikGajiGol3bNew"><br>
    Masukkan Persentase Naik Gaji Golongan 3C: <input type="text" name="persenNaikGajiGol3cNew"><br>
    Masukkan Persentase Naik Gaji Golongan 3D: <input type="text" name="persenNaikGajiGol3dNew"><br>
    Masukkan Persentase Naik Gaji Golongan 4A: <input type="text" name="persenNaikGajiGol4aNew"><br>
    Masukkan Persentase Naik Gaji Golongan 4B: <input type="text" name="persenNaikGajiGol4bNew"><br>
    Masukkan Persentase Naik Gaji Golongan 4C: <input type="text" name="persenNaikGajiGol4cNew"><br>
    Masukkan Persentase Naik Gaji Golongan 4D: <input type="text" name="persenNaikGajiGol4dNew"><br>
    <input type="submit" value="Update Pengaturan Gaji">
  </form> -->
  <p>
    <?php
    include 'koneksi.php';
    $sql = mysqli_query($koneksi, "SELECT * FROM sistem_gaji ORDER BY id") or die(mysqli_error($koneksi));
    $no = 0;

    // Buat array untuk menyimpan data yang akan di-update
    $dataToUpdate = array();
    while ($data = mysqli_fetch_array($sql)) {
      $no++;
      $golongan = $data["kode_gaji_sis"];
      $masaKerjaTahun = $data["mk"];

      // Call the backend function to calculate the salary
      $gajiAwal = $objHitungGaji->getGajiAwal();
      $persenNaikGaji = $objHitungGaji->getPersenNaikGaji();
      $persenNaikGajiGol1b = $objHitungGaji->getPersenNaikGajiGol1b();
      $persenNaikGajiGol1c = $objHitungGaji->getPersenNaikGajiGol1c();
      $persenNaikGajiGol1d = $objHitungGaji->getPersenNaikGajiGol1d();
      $persenNaikGajiGol2a = $objHitungGaji->getPersenNaikGajiGol2a();
      $persenNaikGajiGol2b = $objHitungGaji->getPersenNaikGajiGol2b();
      $persenNaikGajiGol2c = $objHitungGaji->getPersenNaikGajiGol2c();
      $persenNaikGajiGol2d = $objHitungGaji->getPersenNaikGajiGol2d();
      $persenNaikGajiGol3a = $objHitungGaji->getPersenNaikGajiGol3a();
      $persenNaikGajiGol3b = $objHitungGaji->getPersenNaikGajiGol3b();
      $persenNaikGajiGol3c = $objHitungGaji->getPersenNaikGajiGol3c();
      $persenNaikGajiGol3d = $objHitungGaji->getPersenNaikGajiGol3d();
      $persenNaikGajiGol4a = $objHitungGaji->getPersenNaikGajiGol4a();
      $persenNaikGajiGol4b = $objHitungGaji->getPersenNaikGajiGol4b();
      $persenNaikGajiGol4c = $objHitungGaji->getPersenNaikGajiGol4c();
      $persenNaikGajiGol4d = $objHitungGaji->getPersenNaikGajiGol4d();

      $gajiAkhir = $objHitungGaji->hitungGaji1(
        $golongan,
        $masaKerjaTahun,
        $gajiAwal,
        $persenNaikGaji,
        $persenNaikGajiGol1b,
        $persenNaikGajiGol1c,
        $persenNaikGajiGol1d,
        $persenNaikGajiGol2a,
        $persenNaikGajiGol2b,
        $persenNaikGajiGol2c,
        $persenNaikGajiGol2d,
        $persenNaikGajiGol3a,
        $persenNaikGajiGol3b,
        $persenNaikGajiGol3c,
        $persenNaikGajiGol3d,
        $persenNaikGajiGol4a,
        $persenNaikGajiGol4b,
        $persenNaikGajiGol4c,
        $persenNaikGajiGol4d
      );
      $gajiAkhir = round($gajiAkhir, -2);
      // Simpan data yang akan di-update dalam array
      $dataToUpdate[] = array(
        'golongan' => $golongan,
        'masaKerjaTahun' => $masaKerjaTahun,
        'gajiAkhir' => $gajiAkhir
      );
    }
    // Lakukan query UPDATE di luar perulangan
    foreach ($dataToUpdate as $data) {
      $golongan = $data['golongan'];
      $masaKerjaTahun = $data['masaKerjaTahun'];
      $gajiAkhir = $data['gajiAkhir'];
      $simpan = mysqli_query($koneksi, "UPDATE sistem_gaji SET jumlah_gaji= $gajiAkhir WHERE kode_gaji_sis='$golongan'and mk='$masaKerjaTahun' ") or die(mysqli_error($koneksi));

      ?>
                                                              
              
              
                                                            
            
                                                                                <?php
    } ?>
                  
                        <div class="form-group">
                          <label for="exampleInputEmail1">Tanggal Berlaku</label>
                          <input type="date"  name="tanggal_efektif"  class="form-control" required placeholder="Masukan tanggal">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Gaji Awal Baru</label>
                          <input type="text" pattern="^[0-9]+$" name="gajiAwalNew" class="form-control" required placeholder="Masukan Nilai Gaji Awal Baru">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Kenaikan Berkala Baru</label>
                          <input type="text" name="persenNaikGajiNew" class="form-control"  pattern="^[0-9]+([,.][0-9]+)?$" placeholder="Masukkan Persentase Naik Gaji Baru" required>
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol1bNew">Persentase Naik Gaji Golongan 1B Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol1bNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 1D">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol1cNew">Persentase Naik Gaji Golongan 1C Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol1cNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 1D">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol1dNew">Persentase Naik Gaji Golongan 1D Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol1dNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 1D">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol2aNew">Persentase Naik Gaji Golongan 2A Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol2aNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 2A">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol2bNew">Persentase Naik Gaji Golongan 2B Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol2bNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 2B">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol2cNew">Persentase Naik Gaji Golongan 2C Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol2cNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 2C">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol2dNew">Persentase Naik Gaji Golongan 2D Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol2dNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 2D">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol3aNew">Persentase Naik Gaji Golongan 3A Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol3aNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 3A">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol3bNew">Persentase Naik Gaji Golongan 3B Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol3bNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 3B">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol3cNew">Persentase Naik Gaji Golongan 3C Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol3cNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 3C">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol3dNew">Persentase Naik Gaji Golongan 3D Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol3dNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 3D">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol4aNew">Persentase Naik Gaji Golongan 4A Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol4aNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 4A">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol4bNew">Persentase Naik Gaji Golongan 4B Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol4bNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 4B">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol4cNew">Persentase Naik Gaji Golongan 4C Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol4cNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 4C">
                        </div>
                        <div class="form-group">
                          <label for="persenNaikGajiGol4dNew">Persentase Naik Gaji Golongan 4D Baru</label>
                          <input type="text" pattern="^[0-9]+([,.][0-9]+)?$" name="persenNaikGajiGol4dNew" class="form-control" required placeholder="Masukkan Persentase Naik Gaji Golongan 4D">
                        </div>

                      </div>
                      <!-- /.card-body -->

                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary" onclick="submitForm()">Submit</button>
                      </div>
                      <script>
function submitForm() {
    document.getElementById("sistem_gaji_tambah_proses").submit();
}
</script>
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
    $(function() {
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