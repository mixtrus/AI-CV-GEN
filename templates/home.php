<form action="/generate" method="POST" class="resume-form">
    <div class="form-section">
        <h2>1. Personal Information</h2>
        <div class="form-grid">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Jane Doe" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="jane.doe@example.com" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="+1 (123) 456-7890">
            </div>
            <div class="form-group">
                <label for="linkedin">LinkedIn Profile URL</label>
                <input type="url" id="linkedin" name="linkedin" placeholder="https://linkedin.com/in/janedoe">
            </div>
             <div class="form-group">
                <label for="github">GitHub Profile URL</label>
                <input type="url" id="github" name="github" placeholder="https://github.com/janedoe">
            </div>
        </div>
    </div>

    <div class="form-section">
        <h2>2. Professional Content</h2>
        <div class="ai-toggle">
            <input type="checkbox" id="use_ai" name="use_ai" value="1" checked>
            <label for="use_ai"><strong>Enable AI Enhancement?</strong> (Recommended)</label>
        </div>
        <p class="ai-note">If enabled, our AI will rewrite your summary and work experience to be more impactful. Just provide a draft!</p>
        <div class="form-group">
            <label for="summary">Professional Summary</label>
            <textarea id="summary" name="summary" rows="5" placeholder="Write a brief overview of your career, skills, and goals."></textarea>
        </div>
        <div class="form-group">
            <label for="work_experience">Work Experience</label>
            <textarea id="work_experience" name="work_experience" rows="10" placeholder="Describe your most recent role. Include your title, company, dates, and key responsibilities/achievements. For example:
Software Engineer, Tech Corp (2020-Present)
- Developed and maintained web applications using React and Node.js.
- Collaborated with a team of 5 to deliver new features.
- Increased user engagement by 15% by optimizing app performance."></textarea>
        </div>
    </div>

    <div class="form-section">
        <h2>3. Additional Information</h2>
        <div class="form-group">
            <label for="education">Education</label>
            <textarea id="education" name="education" rows="4" placeholder="B.S. in Computer Science - University of Technology (2016-2020)"></textarea>
        </div>
        <div class="form-group">
            <label for="skills">Skills</label>
            <textarea id="skills" name="skills" rows="4" placeholder="JavaScript, React, Node.js, PHP, SQL, Project Management, Agile Methodologies"></textarea>
        </div>
    </div>

    <div class="form-section">
        <h2>4. Choose a Theme</h2>
        <div class="theme-selector">
            <label>
                <input type="radio" name="theme" value="theme-modern" checked> Modern
            </label>
            <label>
                <input type="radio" name="theme" value="theme-classic"> Classic
            </label>
            <label>
                <input type="radio" name="theme" value="theme-corporate"> Corporate
            </label>
        </div>
    </div>

    <div class="form-actions">
        <button type="submit" class="btn btn-primary">✨ Generate My Resume</button>
    </div>
</form>