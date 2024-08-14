<?php

require 'vendor/autoload.php';

$apiKey = 'your_huggingface_api_key';
$message = 'Your test message';

$client = new \GuzzleHttp\Client();

try {
    $response = $client->post('https://api-inference.huggingface.co/models/EleutherAI/gpt-j-6B', [
        'headers' => [
            'Authorization' => 'Bearer ' . $apiKey,
            'Content-Type' => 'application/json',
        ],
        'json' => [
            'inputs' => $message,
            'parameters' => [
                'max_length' => 100,
            ],
        ],
    ]);

    $result = json_decode($response->getBody(), true);
    $text = $result[0]['generated_text'];

    echo 'Response: ' . $text . PHP_EOL;
} catch (Throwable $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
}