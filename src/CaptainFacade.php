<?php
declare(strict_types=1);

namespace Exewen\Captain;

use Exewen\Facades\Facade;
use Exewen\Http\HttpProvider;
use Exewen\Logger\LoggerProvider;
use Exewen\Captain\Contract\CaptainInterface;

/**
 * @method static void setAccessToken(string $accessToken)
 * @method static void setOpenChannelId(string $openChannelId)
 * @method static array getShipments(array $params = [], array $header = [])
 */
class CaptainFacade extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return CaptainInterface::class;
    }

    public static function getProviders(): array
    {
        return [
            LoggerProvider::class,
            HttpProvider::class,
            CaptainProvider::class
        ];
    }
}