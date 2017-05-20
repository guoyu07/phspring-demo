<?php

return [
    'name' => APPLICATION_NAME,
    'server' => [
        'processTitle' => 'phspring-demo',
        'pidSaveDir' => RUNTIME_DIR . '/pids/',
        'logFile' => RUNTIME_DIR . '/phspring.log',
        'worker' => [
            'count' => 2
        ]
    ],
    'coroution' => [
        'timeout' => 1000,
    ],
    'rpc' => [

    ],
    'beanPool' => [
        'gc' => [
            'enable' => true,
            'maxExpireTime' => 7200,
            'maxUsecount' => 30000
        ]
    ],
    'beans' => [
        'packer' => [
            'class' => \phspring\net\pack\JsonPack::class,
            'scope' => \phspring\core\BeanFactory::SCOPE_SINGLETON
        ],
        'router' => [
            'class' => \phspring\mvc\route\Route::class,
            'scope' => \phspring\core\BeanFactory::SCOPE_POOL
        ],
        'scheduler' => [
            'class' => \phspring\coroutine\Scheduler::class,
            'scope' => \phspring\core\BeanFactory::SCOPE_SINGLETON
        ],
        'log' => [
            'class' => \phspring\toolbox\log\Log::class,
            'scope' => \phspring\core\BeanFactory::SCOPE_PROTOTYPE,
            'handlers' => [
                'notice' => [
                    'levelList' => [
                        \phspring\toolbox\log\Log::NOTICE,
                        \phspring\toolbox\log\Log::INFO,
                        \phspring\toolbox\log\Log::DEBUG
                    ],
                    'dateFormat' => "Y/m/d H:i:s",
                    'format' => "%datetime% [%level_name%] [%channel%] [logid:%logId%] %message%\n",
                    'stream' => RUNTIME_DIR . '/notice.log',
                    'buffer' => 0,
                ],
                'error' => [
                    'levelList' => [
                        \phspring\toolbox\log\Log::EMERGENCY,
                        \phspring\toolbox\log\Log::ALERT,
                        \phspring\toolbox\log\Log::CRITICAL,
                        \phspring\toolbox\log\Log::ERROR,
                        \phspring\toolbox\log\Log::WARNING
                    ],
                    'dateFormat' => "Y/m/d H:i:s",
                    'format' => "%datetime% [%level_name%] [%channel%] [logid:%logId%] %message%\n",
                    'stream' => RUNTIME_DIR . '/error.log',
                    'buffer' => 0,
                ]
            ]
        ],
        'i18n' => [
            'class' => \phspring\toolbox\i18n\I18n::class,
            'scope' => \phspring\core\BeanFactory::SCOPE_SINGLETON,
            'translations' => [
                'app' => [
                    'sourceLang' => 'en-US',
                    'basePath' => ROOT_PATH . '/app/lang',
                    'fileMap' => [
                        'common' => 'common.php',
                        'errorno' => 'errorno.php',
                    ]
                ]
            ]
        ]
    ],
    'params' => [
        'siteKeyWords' => 'phspring,demo'
    ]
];