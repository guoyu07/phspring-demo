<?php

return array_merge(
    require_once(dirname(__FILE__) . '/../main.php'),
    [
        'server' => [
            'socket' => [
                'name' => 'http://0.0.0.0:8082',
                'options' => [],
            ]
        ],
        'beans' => [
            'poi' => [
                'class' => 'PGPoiService',
                'mode' => 'develop'
            ],
        ],
        'params' => [
            'siteHost' => 'www.demo.com',
        ],
    ]
);
