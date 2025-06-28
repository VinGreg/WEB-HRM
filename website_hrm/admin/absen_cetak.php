<?php

// index.php
// include autoloader

require_once('./dompdf/autoload.inc.php');
include "koneksi.php";

// reference the Dompdf namespace
use Dompdf\Dompdf;

// initialize dompdf class
$document = new Dompdf();

$sql = mysqli_query($koneksi, "SELECT * FROM absen") or die(mysqli_error($koneksi));
$no = 0;
$output = "
<p align='center'><strong>LAPORAN PRESENSI</strong></p>
<table border='1' width='100%'>
    <tr>
        <th>No</th>
        <th>NIK Karyawan</th>
        <th>Tanggal</th>
        <th>Jam Masuk</th>
        <th>Jam Keluar</th>
        <th>Keterangan</th>
        <th>Waktu Telat</th>
    </tr>
";
while ($row = mysqli_fetch_array($sql)) {
    $no++;
    $output .= '
    <tr>
        <td>' . $no . '</td>
        <td>' . $row["nik"] . '</td>
        <td>' . $row["tanggal"] . '</td>
        <td>' . $row["jam_masuk"] . '</td>
        <td>' . $row["jam_keluar"] . '</td>
        <td>' . $row["keterangan"] . '</td>
        <td>' . $row["waktu_telat"] . '</td>
    </tr>
    ';
}
$output .= '</table>';

$document->loadHtml($output);

// set page size and orientation
$document->setPaper('Legal', 'landscape');

// Render the HTML as PDF
$document->render();

// Get output of generated pdf in Browser
$document->stream("Lap_Absen", array("Attachment" => 0));
// 1  = Download
// 0 = Preview
?>
