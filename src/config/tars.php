<?php

return [
    'registries' => [
        [
            'type' => 'kong',
            'url' => 'http://kong:8001/upstreams/tars_mysql8/targets',
        ]
    ],

    'tarsregistry' => 'tars.tarsregistry.QueryObj@tcp -h 172.17.0.3 -p 17890',

    'log_level' => \Monolog\Logger::INFO,

    'communicator_config_log_level' => 'INFO',
];
