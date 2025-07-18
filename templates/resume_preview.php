<div class="preview-container">
    <div class="preview-actions">
        <h2>Your Resume is Ready!</h2>
        <p>Review your responsive resume below. It will adapt to any screen size. Downloads are optimized for A4/Letter format.</p>
        <div class="action-buttons">
            <a href="/download/pdf" class="btn btn-primary">Download as PDF</a>
            <a href="/download/docx" class="btn btn-secondary">Download as DOCX</a>
            <a href="/" class="btn btn-link">← Start Over</a>
        </div>
        <div class="share-section">
            <h3>⭐ Share this Project!</h3>
            <a href="https://twitter.com/intent/tweet?text=I%20just%20created%20my%20resume%20with%20this%20awesome%20AI-Powered%20Resume%20Builder%20by%20Saman!%20Check%20it%20out!&url=<?php echo urlencode($_ENV['APP_URL']); ?>" target="_blank" class="share-btn twitter">Share on Twitter</a>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode($_ENV['APP_URL']); ?>&title=AI-Powered%20Resume%20Builder&summary=I%20just%20created%20my%20resume%20with%20this%20awesome%20AI-Powered%20Resume%20Builder%20by%20Saman!&source=<?php echo urlencode($_ENV['APP_URL']); ?>" target="_blank" class="share-btn linkedin">Share on LinkedIn</a>
        </div>
    </div>

    <div class="resume-preview-wrapper <?php echo $resume['theme']; ?>">
        <?php
            // This now includes only the pure HTML fragment of the resume.
            // It will be styled by the `resume-preview.css` file for responsiveness.
            require __DIR__ . '/partials/resume_content.php';
        ?>
    </div>
</div>