<?php

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],

        // Database connection settings
        'db' => [
            'host' => '127.0.0.1',
            'dbname' => 'api_rest_slimphp',
            'user' => 'root',
            'pass' => '',
        ],
    ],
];
