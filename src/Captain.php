<?php

declare(strict_types=1);

namespace Exewen\Captain;

use Exewen\Captain\Constants\CaptainEnum;
use Exewen\Captain\Contract\CaptainInterface;
use Exewen\Captain\Services\ShipmentService;
use Exewen\Config\Contract\ConfigInterface;

class Captain implements CaptainInterface
{
    private $config;
    /**
     * @var ShipmentService
     */
    private $shippingsService;

    public function __construct(
        ConfigInterface  $config,
        ShipmentService $shippingsService
    )
    {
        $this->config           = $config;
        $this->shippingsService = $shippingsService;
    }

    public function setAccessToken(string $accessToken, string $channel = CaptainEnum::CHANNEL_API)
    {
        $this->config->set('http.channels.' . $channel . '.extra.access_token', $accessToken);
    }

    public function setOpenChannelId(string $openChannelId, string $channel = CaptainEnum::CHANNEL_API)
    {
        $this->config->set('http.channels.' . $channel . '.extra.open_channel_id', $openChannelId);
    }

    public function getShipments(array $params = [], array $header = [])
    {
        return json_decode($this->shippingsService->getShipments($params, $header), true);
    }

}
