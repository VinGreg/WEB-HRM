<?php
include "koneksi.php";

//import koneksi ke database
?>
<html>
<head>
  <title>CETAK KARYAWAN</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>

<body>
<div class="container">
            <h2>CETAK KARYAWAN</h2>
                <div class="data-tables datatable-dark">
                    
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
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
         <?php
         include 'koneksi.php';
         $sql = mysqli_query($koneksi, "
        SELECT karyawan.*, bidang.nama_bid, jabatan.nama_jab, pendidikan.nama_pendidikan,sistem_gaji.jumlah_gaji, sistem_tunjangan.jumlah_tunjangan
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
            
             
                                             </tr>

         

    <?php } ?>
                  
                </table>
          
                    <!-- Masukkan table nya disini, dimulai dari tag TABLE -->
                    
                </div>
</div>
    
<script>
$(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

    

</body>
