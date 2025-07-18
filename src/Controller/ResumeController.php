<?php

namespace App\Controller;

use App\Service\DocxGeneratorService;
use App\Service\OpenAIService;
use App\Service\PdfGeneratorService;

class ResumeController
{
    public function home(): void
    {
        unset($_SESSION['resume_data']);
        $this->render('home');
    }

    public function generate(): void
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /');
            exit;
        }

        $data = [
            'name' => htmlspecialchars($_POST['name'] ?? '', ENT_QUOTES, 'UTF-8'),
            'email' => htmlspecialchars($_POST['email'] ?? '', ENT_QUOTES, 'UTF-8'),
            'phone' => htmlspecialchars($_POST['phone'] ?? '', ENT_QUOTES, 'UTF-8'),
            'linkedin' => htmlspecialchars($_POST['linkedin'] ?? '', ENT_QUOTES, 'UTF-8'),
            'github' => htmlspecialchars($_POST['github'] ?? '', ENT_QUOTES, 'UTF-8'),
            'summary_original' => htmlspecialchars($_POST['summary'] ?? '', ENT_QUOTES, 'UTF-8'),
            'work_experience_original' => htmlspecialchars($_POST['work_experience'] ?? '', ENT_QUOTES, 'UTF-8'),
            'education' => htmlspecialchars($_POST['education'] ?? '', ENT_QUOTES, 'UTF-8'),
            'skills' => htmlspecialchars($_POST['skills'] ?? '', ENT_QUOTES, 'UTF-8'),
            'theme' => htmlspecialchars($_POST['theme'] ?? 'theme-modern', ENT_QUOTES, 'UTF-8'),
        ];

        $useAI = isset($_POST['use_ai']) && $_POST['use_ai'] === '1';

        if ($useAI) {
            $openAIService = new OpenAIService();
            $summaryPrompt = "Rewrite the following professional summary for a resume: " . $data['summary_original'];
            $data['summary_enhanced'] = $openAIService->generateEnhancedText($summaryPrompt);

            $workPrompt = "Rewrite the following work experience description for a resume, focusing on achievements and using action verbs: " . $data['work_experience_original'];
            $data['work_experience_enhanced'] = $openAIService->generateEnhancedText($workPrompt);
        } else {
            $data['summary_enhanced'] = $data['summary_original'];
            $data['work_experience_enhanced'] = $data['work_experience_original'];
        }

        $_SESSION['resume_data'] = $data;

        $this->render('resume_preview', ['resume' => $data]);
    }

    public function downloadPdf(): void
    {
        $this->ensureResumeDataExists();
        $html = $this->getResumeHtmlForExport();
        $pdfService = new PdfGeneratorService();
        $pdfService->generatePdf($html);
    }

    public function downloadDocx(): void
    {
        $this->ensureResumeDataExists();
        $html = $this->getResumeHtmlForExport();
        $docxService = new DocxGeneratorService();
        $docxService->generateDocx($html);
    }

    private function ensureResumeDataExists(): void
    {
        if (!isset($_SESSION['resume_data'])) {
            header('Location: /');
            exit;
        }
    }

    /**
     * Renders the full HTML document for file export, including print-optimized CSS.
     */
    private function getResumeHtmlForExport(): string
    {
        $resume = $_SESSION['resume_data'];
        ob_start();
        // Use the dedicated export template which includes the print styles.
        require __DIR__ . '/../../templates/partials/resume_for_export.php';
        return ob_get_clean();
    }

    private function render(string $view, array $data = []): void
    {
        extract($data);
        
        ob_start();
        require_once __DIR__ . "/../../templates/{$view}.php";
        $content = ob_get_clean();
        require_once __DIR__ . '/../../templates/layout.php';
    }
}