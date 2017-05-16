<?php
/**
 * This file is part of the phspring package.
 */
namespace app;

use phspring\context\Ac;
use phspring\context\ApplicationContext;
use phspring\net\server\HttpServer;

/**
 * Class AppServer
 * @package app
 */
class AppServer extends HttpServer
{

    /**
     * AppServer constructor.
     * @param $configPath
     */
    public function __construct($configPath)
    {
        Ac::setApplicationContext(new ApplicationContext($configPath));

        parent::__construct(Ac::config()->get('server.socket.name'), Ac::config()->get('server.socket.options'));
        $this->count = Ac::config()->get('server.worker.count');
    }
    
    /**
     * run server
     */
    public function run()
    {
        parent::run();
    }
}
