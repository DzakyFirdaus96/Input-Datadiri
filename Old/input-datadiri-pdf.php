<?php
        require_once __DIR__. '/vendor/autoload.php';

        $mpdf = new \mPDF();

        $mpdf->WriteHTML("Hello Word !");
        $mpdf->Output();
?>