<?php

namespace App\Service;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class OpenAIService
{
    private Client $client;
    private string $apiKey;

    public function __construct()
    {
        $this->apiKey = $_ENV['OPENAI_API_KEY'] ?? '';
        $this->client = new Client([
            'base_uri' => 'https://api.openai.com/v1/',
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
            ],
            'timeout' => 30,
        ]);
    }

    public function generateEnhancedText(string $prompt): string
    {
        // If no API key is set, return a helpful message for the developer.
        if (empty($this->apiKey) || $this->apiKey === 'your_openai_api_key_here') {
            return "AI enhancement is disabled. Please configure your OPENAI_API_KEY in the .env file. Original prompt: '{$prompt}'";
        }

        try {
            $response = $this->client->post('chat/completions', [
                'json' => [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => 'You are a professional resume writing assistant. You rewrite user-provided text to be more professional, concise, and impactful for a resume. Use action verbs and quantify results where possible. Respond only with the rewritten text, without any introductory phrases or explanations.'
                        ],
                        [
                            'role' => 'user',
                            'content' => $prompt
                        ]
                    ],
                    'max_tokens' => 300,
                    'temperature' => 0.7,
                ],
            ]);

            $body = json_decode((string) $response->getBody(), true);
            return trim($body['choices'][0]['message']['content'] ?? 'Error: Could not parse API response.');

        } catch (GuzzleException $e) {
            // In a production app, this should be logged to a file or service.
            error_log("OpenAI API Error: " . $e->getMessage());
            return "Error: Could not communicate with the AI service. Please try again later.";
        }
    }
}