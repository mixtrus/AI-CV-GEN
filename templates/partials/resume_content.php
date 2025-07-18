<?php
// This partial is a pure HTML fragment of the resume's content.
// It is styled by different parent contexts (web preview vs. file export).
// It expects a $resume variable to be available in its scope.
?>
<div class="resume">
    <header class="resume-header">
        <h1><?php echo $resume['name']; ?></h1>
        <div class="contact-info">
            <span><?php echo $resume['email']; ?></span>
            <?php if (!empty($resume['phone'])): ?>
                <span> | <?php echo $resume['phone']; ?></span>
            <?php endif; ?>
            <?php if (!empty($resume['linkedin'])): ?>
                <span> | <a href="<?php echo $resume['linkedin']; ?>">LinkedIn</a></span>
            <?php endif; ?>
             <?php if (!empty($resume['github'])): ?>
                <span> | <a href="<?php echo $resume['github']; ?>">GitHub</a></span>
            <?php endif; ?>
        </div>
    </header>

    <section class="resume-section">
        <h2>Professional Summary</h2>
        <p><?php echo $resume['summary_enhanced']; ?></p>
    </section>

    <section class="resume-section">
        <h2>Work Experience</h2>
        <p><?php echo $resume['work_experience_enhanced']; ?></p>
    </section>

    <section class="resume-section">
        <h2>Education</h2>
        <p><?php echo $resume['education']; ?></p>
    </section>

    <section class="resume-section">
        <h2>Skills</h2>
        <p><?php echo $resume['skills']; ?></p>
    </section>
</div>