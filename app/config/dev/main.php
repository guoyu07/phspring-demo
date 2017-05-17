<?php

return \phspring\toolbox\helper\ArrayHelper::merge(
    require_once(__DIR__ . '/../main.php'),
    [
        'server' => [
            'socket' => [
                'name' => 'http://0.0.0.0:8082',
                'options' => [],
            ]
        ],
        'params' => [
            'siteHost' => 'www.demo.com',
        ],
    ]
);
