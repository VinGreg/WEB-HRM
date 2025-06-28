<?php
include "koneksi.php";

// index.php
// include autoloader

require_once('./dompdf/autoload.inc.php');
include "koneksi.php";

// reference the Dompdf namespace
use Dompdf\Dompdf;

// initialize dompdf class
$document = new Dompdf();

$sql = mysqli_query($koneksi, "SELECT * FROM gaji") or die(mysqli_error($koneksi));
$no = 0;
$output = "
<p align='center'><img src='/tutorialphp/logo.png' style='width:50px;height:50px;'/></p>
<p align='center'><strong>LAPORAN GAJI</strong></p>
<table border='1' width='100%'>
    <tr>
        <th>No</th>
        <th>Nik</th>
        <th>Gaji</th>
        <th>Potongan</th>
        <th>Tunjangan</th>
        <th>Gaji Akhir</th>
        <th>Tanggal</th>
    </tr>
";
while ($row = mysqli_fetch_array($sql)) {
    $no++;
    $output .= '
    <tr>
        <td>' . $no . '</td>
        <td>' . $row["nik_gaji"] . '</td>
        <td>' . $row["gaji"] . '</td>
        <td>' . $row["potongan"] . '</td>
        <td>' . $row["tunjangan"] . '</td>
        <td>' . $row["gaji_akhir"] . '</td>
        <td>' . $row["tanggal"] . '</td>
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
$document->stream("Lap_gaji", array("Attachment" => 0));
// 1  = Download
// 0 = Preview
?>
