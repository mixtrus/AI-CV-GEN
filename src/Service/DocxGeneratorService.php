<?php

namespace App\Service;

use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Shared\Html;

class DocxGeneratorService
{
    public function generateDocx(string $htmlContent): void
    {
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();

        // PHPWord's HTML import has limitations with complex CSS.
        // It works best with semantic HTML and basic styling.
        Html::addHtml($section, $htmlContent, false, false);

        // Set headers for a .docx file download
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Disposition: attachment;filename="resume.docx"');
        header('Cache-Control: max-age=0');

        // Use the 'Word2007' writer for .docx format
        $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        
        // Stream the file directly to the browser
        $objWriter->save('php://output');
        exit;
    }
}