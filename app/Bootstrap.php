<?php
/**
 * This file is part of the phspring package.
 */
namespace app;

use phspring\context\Ac;
use phspring\context\ApplicationContext;
use phspring\net\server\Manager;

/**
 * Class AppServer
 * @package app
 */
class Bootstrap
{

    /**
     * AppServer constructor.
     * @param $configPath
     */
    public function __construct($configPath)
    {
        Ac::setApplicationContext(new ApplicationContext($configPath));

        parent::__construct(Ac::config()->get('server.socket.name'), Ac::config()->get('server.socket.options'));
        $this->setCount(Ac::config()->get('server.worker.count', 1));
    }
    
    /**
     * start
     */
    public function start()
    {
        Manager::run();
    }
}
