<?php
    require 'vendor/autoload.php';
    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $dompdf->loadHtml('menggunakan Library DOMpdf untuk Membuat Repot PDF dengan DOMpdf');

    $dompdf->setPaper('A4'.'landscape');

    $dompdf->render();

    $dompdf->stream('hasil_report.pdf');
?>  