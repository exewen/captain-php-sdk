<?php
declare(strict_types=1);

namespace Exewen\Captain\Services;

use Exewen\Config\Contract\ConfigInterface;
use Exewen\Http\Contract\HttpClientInterface;

class ShipmentService
{
    private $httpClient;
    private $driver;
    private $getShipmentsUrl = '/v1/open_fba/get_amazon_shipment_list';

    public function __construct(HttpClientInterface $httpClient, ConfigInterface $config)
    {
        $this->httpClient = $httpClient;
        $this->driver     = $config->get('captain.channel_api');
    }


    public function getShipments(array $params, array $header)
    {
        return $this->httpClient->get($this->driver, $this->getShipmentsUrl, $params, $header);
    }


}