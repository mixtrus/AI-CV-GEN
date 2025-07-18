<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;

class PdfGeneratorService
{
    public function generatePdf(string $htmlContent): void
    {
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        // isRemoteEnabled is crucial for loading external CSS files if they were used.
        // Since we embed CSS, it's still good practice to have.
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($htmlContent);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Stream the file to the browser for download.
        $dompdf->stream('resume.pdf', ['Attachment' => true]);
    }
}