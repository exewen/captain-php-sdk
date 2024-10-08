<?php

declare(strict_types=1);

use Exewen\Captain\Middleware\AuthMiddleware;
use Exewen\Http\Middleware\LogMiddleware;
use Exewen\Captain\Constants\CaptainEnum;

return [
    'channels' => [
        CaptainEnum::CHANNEL_API  => [
            'verify'          => false,
            'ssl'             => true,
            'host'            => 'openapi.captainbi.com',
            'port'            => null,
            'prefix'          => null,
            'connect_timeout' => 3,
            'timeout'         => 20,
            'handler'         => [
                AuthMiddleware::class,
                LogMiddleware::class,
            ],
            'extra'           => [],
            'proxy'           => [
                'switch' => false,
                'http'   => '127.0.0.1:7897',
                'https'  => '127.0.0.1:7897'
            ]
        ],
    ]
];