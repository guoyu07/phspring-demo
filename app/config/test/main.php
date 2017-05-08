<?php

return array_merge(
    require_once(dirname(__FILE__) . '/../main.php'),
    [
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
