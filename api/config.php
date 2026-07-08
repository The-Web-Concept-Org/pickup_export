<?php
return [
    'api_token' => getenv('PICKUP_EXPORT_API_TOKEN') ?: getenv('PICKUP_EXPORT_API_KEY') ?: 'pickup-export-demos-token',
    'allowed_origins' => [
        'http://localhost:3000',
        'http://127.0.0.1:3000',
        'http://localhost:5173',
        'http://127.0.0.1:5173',
    ],
];
