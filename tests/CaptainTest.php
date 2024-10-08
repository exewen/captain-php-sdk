<?php
declare(strict_types=1);

namespace ExewenTest\Captain;

use Exewen\Captain\CaptainFacade;
use Exewen\Facades\LoggerFacade;

class CaptainTest extends Base
{

    public function testOrderDetail()
    {
        LoggerFacade::info('1');


//        CaptainFacade::setAccessToken(getenv('CAPTAIN_ACCESS_TOKEN'));
//        CaptainFacade::setOpenChannelId(getenv('CAPTAIN_OPEN_CHANNEL_ID'));
//        $params   = [
//            'page'=> 1,
//            'rows'=> 2,
//            'start_modified_time' => time()-3*24*3600,
//            'end_modified_time' => time(),
//        ];
//        $response = CaptainFacade::getShipments($params);
        $this->assertNotEmpty(1);
    }

}