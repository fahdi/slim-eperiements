<?php
require_once __DIR__ . '/db.php';

$config = [
    'settings' => [
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => false,
        'outputBuffering' => false,

        'logger' => [
            'name' => 'slim-api',
            'level' => Monolog\Logger::DEBUG,
            'path' => __DIR__ . '/../logs/app.log'
        ],

        'db' => [
            'driver' => 'mysql',
            'host' => DB_SERVER,
            'database' => DB_DATABASE,
            'username' => DB_USERNAME,
            'password' => DB_PASSWORD,
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => ''
        ]

    ]
];
