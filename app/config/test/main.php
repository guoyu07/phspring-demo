<?php

return \phspring\toolbox\helper\ArrayHelper::merge(
    require_once(__DIR__ . '/../main.php'),
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
