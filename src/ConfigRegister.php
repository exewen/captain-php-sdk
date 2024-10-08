<?php

declare(strict_types=1);

namespace Exewen\Captain;

use Exewen\Captain\Constants\CaptainEnum;
use Exewen\Captain\Contract\CaptainInterface;
use Exewen\Captain\Middleware\AuthMiddleware;

class ConfigRegister
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                CaptainInterface::class => Captain::class,
            ],

            'captain' => [
                'channel_api'  => CaptainEnum::CHANNEL_API,
            ],

            'http' => [
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
                        ],
                        'extra'           => [],
                        'proxy'           => [
                            'switch' => false,
                            'http'   => '127.0.0.1:7897',
                            'https'  => '127.0.0.1:7897'
                        ]
                    ],
                ]
            ]


        ];
    }
}
