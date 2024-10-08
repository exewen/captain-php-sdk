<?php
declare(strict_types=1);

namespace Exewen\Captain;

use Exewen\Di\ServiceProvider;
use Exewen\Captain\Contract\CaptainInterface;

class CaptainProvider extends ServiceProvider
{

    /**
     * 服务注册
     * @return void
     */
    public function register()
    {
        $this->container->singleton(CaptainInterface::class);
    }

}