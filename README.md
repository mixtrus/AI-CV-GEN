Generated markdown
<div align="center">
  <h1>🔥 AI-Powered Resume Builder 🔥</h1>
  <p>
    <strong>Transform your career narrative with a resume crafted by AI.</strong><br>
    A modern, no-code UI resume builder built with PHP, designed for performance, style, and impact.
  </p>

  <!-- Badges -->
  <p>
    <a href="https://github.com/mixtrus/AI-CV-GEN/stargazers"><img src="https://img.shields.io/github/stars/mixtrus/AI-CV-GEN?style=for-the-badge&color=gold" alt="GitHub Stars"></a>
    <a href="https://github.com/mixtrus/AI-CV-GEN/network/members"><img src="https://img.shields.io/github/forks/mixtrus/AI-CV-GEN?style=for-the-badge&color=blue" alt="GitHub Forks"></a>
    <a href="https://github.com/mixtrus/AI-CV-GEN/blob/main/LICENSE"><img src="https://img.shields.io/github/license/mixtrus/AI-CV-GEN?style=for-the-badge&color=green" alt="License"></a>
    <img src="https://img.shields.io/badge/PHP-8.1%2B-blueviolet?style=for-the-badge&logo=php" alt="PHP Version">
    <img src="https://img.shields.io/github/repo-size/mixtrus/AI-CV-GEN?style=for-the-badge" alt="Repo Size">
  </p>
  <p>
    <em>Programmed with ❤️ by <strong>Saman</strong> (<a href="https://github.com/mixtrus">@mixtrus</a>)</em>
  </p>
</div>

---

## ✨ Overview

In today's competitive job market, a standout resume is non-negotiable. This project provides a seamless, intuitive web interface for anyone to build a professional resume. What makes it special? An optional **AI enhancement feature** that leverages the power of OpenAI's GPT models to rewrite and polish your professional summary and work experience, making them more compelling and achievement-oriented.

<br>

<div align="center">
  <img src="https://raw.githubusercontent.com/mixtrus/AI-CV-GEN/main/.github/demo.gif" alt="Project Demo GIF" width="800">
</div>

<br>

## ✅ Why Choose This Project?

-   **🧠 AI-Powered Content:** Go beyond templates. Get AI-driven suggestions to make your experience shine.
-   **🎨 Multiple Themes:** Choose from Modern, Classic, and Corporate themes to match your personal brand.
-   **📄 Universal Formats:** Instantly download your resume as a pixel-perfect **PDF** or an editable **DOCX** file.
-   **📱 Fully Responsive:** The live preview looks great on any device, from a 4K monitor to your phone.
-   **🚀 Modern PHP, No Framework:** Built on a clean, scalable, and framework-less PHP architecture. It's fast, lightweight, and easy to understand—no heavy framework dependencies.
-   **🔐 Secure & Private:** Your data is processed and stored in the session, then cleared. Your API key and sensitive info are kept safe in a `.env` file.
-   **🌐 Easy to Deploy:** Ready to run locally or be deployed to any modern web host with minimal configuration.

---

## 🌟 Core Features

-   Intuitive, no-code resume building form.
-   Toggleable AI enhancement for key text sections.
-   Live, responsive preview of your resume as you build.
-   Three distinct visual themes (Modern, Classic, Corporate).
-   One-click PDF and DOCX downloads.
-   Clean, well-organized, and commented source code.
-   Share buttons to showcase the project on social media.
-   Secure environment variable management with `.env`.

---

## 🛠️ Tech Stack & Architecture

This project is a showcase of modern PHP development practices without relying on a full-stack framework.

| Technology | Description |
| :--- | :--- |
| **PHP 8.1+** | Core backend language, utilizing modern features like strict types. |
| **Composer** | For elegant dependency management. |
| **OpenAI API** | The engine for AI-powered text enhancement. |
| **Guzzle** | A robust HTTP client for communicating with the OpenAI API. |
| **dompdf** | A powerful library for converting HTML & CSS into PDFs. |
| **PHPWord** | For converting HTML into Microsoft Word (.docx) documents. |
| **HTML5 & CSS3** | For a clean structure and beautiful, responsive styling. |
| **JavaScript** | Vanilla JS for future frontend enhancements. |

---

## 🚀 Getting Started

Get your own instance of the AI Resume Builder running in just a few minutes.

### Prerequisites

-   PHP >= 8.1
-   Composer
-   An OpenAI API Key (optional, but required for AI features)

### Installation

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/mixtrus/AI-CV-GEN.git
    cd AI-CV-GEN
    ```

2.  **Install PHP dependencies with Composer:**
    ```bash
    composer install
    ```

3.  **Set up your environment file:**
    -   Copy the example file: `cp .env.example .env`
    -   Open the new `.env` file and add your `OPENAI_API_KEY`.
    -   Update `APP_URL` to your local server address (e.g., `http://localhost:8000`).

4.  **Run the local development server:**
    > **Important:** The document root **must** be the `/public` directory. This is a critical security practice.
    ```bash
    php -S localhost:8000 -t public
    ```

5.  **Launch the application!**
    Open your browser and navigate to `http://localhost:8000`.

---

## 📂 Project Structure

The project follows a clean, scalable structure that separates concerns effectively.


AI-CV-GEN/
├── public/ # 🌐 Web server's document root
│ ├── index.php # 🚦 Front Controller (All requests go here)
│ └── assets/ # 🎨 CSS, JS, and other public assets
├── src/ # 核心 Application source code (PSR-4)
│ ├── Controller/ # 🧑‍✈️ Handles requests and orchestrates responses
│ ├── Service/ # 🧠 Business logic (API calls, file generation)
│ └── Core/ # ⚙️ Core components (e.g., Router)
├── templates/ # 📄 PHP view templates for rendering HTML
│ ├── layout.php # 뼈대 Main site layout
│ └── partials/ # 🧩 Reusable HTML fragments
├── vendor/ # 📦 Composer dependencies (auto-generated)
├── .env # 🤫 Your secret environment variables (DO NOT COMMIT)
├── .env.example # 📋 Example .env file
├── composer.json # 📦 Project dependencies and autoloading
└── README.md # 👈 You are here!

Generated code
---

## 🤝 How to Contribute

Contributions are what make the open-source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1.  **Fork the Project**
2.  **Create your Feature Branch** (`git checkout -b feature/AmazingFeature`)
3.  **Commit your Changes** (`git commit -m 'Add some AmazingFeature'`)
4.  **Push to the Branch** (`git push origin feature/AmazingFeature`)
5.  **Open a Pull Request**

---

## 📜 License

This project is distributed under the MIT License. See `LICENSE` for more information.

---

## 🙏 Acknowledgments

-   [OpenAI](https://openai.com) for their incredible language models.
-   The creators of [dompdf](https://github.com/dompdf/dompdf) and [PHPWord](https://github.com/PHPOffice/PHPWord).
-   All the developers whose open-source work made this project possible.
IGNORE_WHEN_COPYING_START
content_copy
download
Use code with caution.
IGNORE_WHEN_COPYING_END
