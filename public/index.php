<?php

declare(strict_types=1);

// Start a session to store resume data between requests.
session_start();

// Autoload all Composer dependencies and application classes.
require_once __DIR__ . '/../vendor/autoload.php';

// Load environment variables from the .env file.
try {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
} catch (\Dotenv\Exception\InvalidPathException $e) {
    die('Error: The .env file is missing. Please copy .env.example to .env and configure it.');
}


// Instantiate the application router.
$router = new App\Core\Router();

// Define application routes.
$router->get('/', [App\Controller\ResumeController::class, 'home']);
$router->post('/generate', [App\Controller\ResumeController::class, 'generate']);
$router->get('/download/pdf', [App\Controller\ResumeController::class, 'downloadPdf']);
$router->get('/download/docx', [App\Controller\ResumeController::class, 'downloadDocx']);

// Dispatch the router to handle the current request.
$router->dispatch();