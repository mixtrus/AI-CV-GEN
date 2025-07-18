<?php
// This template wraps the resume content in a full HTML document
// with embedded, print-optimized CSS for reliable PDF/DOCX generation.
// It expects a $resume variable to be available in its scope.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Resume for <?php echo $resume['name']; ?></title>
    <style>
        /* 
         * Embed CSS directly for reliable PDF rendering with dompdf.
         * The content of the selected theme file is loaded here.
         */
        <?php
            $themeFile = __DIR__ . '/../../../public/assets/css/' . ($resume['theme'] ?? 'theme-modern') . '.css';
            if (file_exists($themeFile)) {
                echo file_get_contents($themeFile);
            }
        ?>
    </style>
</head>
<body>
    <?php
        // Include the pure HTML content of the resume.
        require __DIR__ . '/resume_content.php';
    ?>
</body>
</html>