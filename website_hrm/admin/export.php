
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include "koneksi.php" ?>
    <title>Export To Excel </title>
    <link
      rel="icon"
      href="https://cdn3.iconfinder.com/data/icons/logos-brands-3/24/logo_brand_brands_logos_excel-256.png"
    />
  </head>
<body>
    <div>
            <table id="exTable" border="2" "table table-bordered table-striped">
                <thead class="lockedRecordsBg">
                    <tr bgcolor='#87AFC6' style='height: 75px; text-align: center; width: 250px'>
                        <th style="width:40px">No</th>
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
                        <th>Gaji</th>
                        <th>Tunjangan</th>
                        <th style="width: 150px">Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $server = "localhost";
                    $user = "root";
                    $pass = "";
                    $database = "website_hrm";
                    $koneksi = mysqli_connect($server, $user, $pass, $database) or die(mysqli_error($koneksi));

                    $no = 0;
                    $sql = mysqli_query($koneksi, "
                    SELECT karyawan.*, bidang.nama_bid, jabatan.nama_jab, pendidikan.nama_pendidikan, sistem_gaji.jumlah_gaji, sistem_tunjangan.jumlah_tunjangan
                    FROM karyawan
                    LEFT JOIN bidang ON karyawan.kode_bid = bidang.kode_bid
                    LEFT JOIN jabatan ON karyawan.kode_jab = jabatan.kode_jab
                    LEFT JOIN pendidikan ON karyawan.kode_pendidikan = pendidikan.kode_pendidikan
                    LEFT JOIN sistem_gaji ON karyawan.kode_gaji = sistem_gaji.kode_gaji
                    LEFT JOIN sistem_tunjangan ON karyawan.kode_tunjangan = sistem_tunjangan.kode_tunjangan
                    ORDER BY karyawan.nama") or die(mysqli_error($koneksi));

                    while ($data = mysqli_fetch_array($sql)) {
                        $no++;
                        ?>
                                                    <tr>
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
                                                        <td><?php echo $data['jumlah_gaji'] ?></td>
                                                        <td><?php echo $data['jumlah_tunjangan'] ?></td>
                                                        <td style="height: 150px">
                                                        <img src="https://images.soco.id/589-5-fakta-menarik-film-avatar-yang-kembali-tayang-5.jpg.jpg" height="85"width="100"alt="sample image"/></td>                        
                                                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <input type="button" value="Download Excel" onclick="exportToExcel('exTable')" />
        </div>
    </div>
    <script src="exportToExcel.js" defer></script>
</body>
</html>
