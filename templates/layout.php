<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🔥 AI Resume Builder by Saman</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/resume-preview.css">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <h1>🔥 AI-Powered Resume Builder</h1>
            <p>Create a professional resume in minutes, with an optional AI boost.</p>
        </div>
    </header>

    <main>
        <div class="container">
            <?php echo $content; // Main content is injected here ?>
        </div>
    </main>

    <footer class="main-footer">
        <div class="container">
            <div class="copyright-box">
                <span>A Project by <strong>Saman</strong></span>
                <span>© <?php echo date('Y'); ?> — <a href="https://github.com/mixtrus" target="_blank" rel="noopener noreferrer">View on GitHub</a></span>
            </div>
        </div>
    </footer>
    <script src="/assets/js/app.js"></script>
</body>
</html>