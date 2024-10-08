<?php
declare(strict_types=1);

namespace Exewen\Captain\Contract;

interface CaptainInterface
{
    public function getShipments(array $params = [], array $header = []);

}