<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Queue Connection Name
    |--------------------------------------------------------------------------
    |
    | Laravel's queue API supports an assortment of back-ends via a single
    | API, giving you convenient access to each back-end using the same
    | syntax for every one. Here you may define a default connection.
    |
    */

    'default' => env('QUEUE_CONNECTION', 'sync'),

    /*
    |--------------------------------------------------------------------------
    | Queue Connections
    |--------------------------------------------------------------------------
    |
    | Here you may configure the connection information for each server that
    | is used by your application. A default configuration has been added
    | for each back-end shipped with Laravel. You are free to add more.
    |
    | Drivers: "sync", "database", "beanstalkd", "sqs", "redis", "null"
    |
    */

    'connections' => [

        'sync' => [
            'driver' => 'sync',
        ],

        'database' => [
            'driver' => 'database',
            'table' => 'jobs',
            'queue' => 'default',
            'retry_after' => 90,
        ],

        'beanstalkd' => [
            'driver' => 'beanstalkd',
            'host' => 'localhost',
            'queue' => 'default',
            'retry_after' => 90,
            'block_for' => 0,
        ],

        'sqs' => [
            'driver' => 'sqs',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'prefix' => env('SQS_PREFIX', 'https://sqs.us-east-1.amazonaws.com/your-account-id'),
            'queue' => env('SQS_QUEUE', 'your-queue-name'),
            'suffix' => env('SQS_SUFFIX'),
            'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
        ],

        'redis' => [
            'driver' => 'redis',
            'connection' => 'default',
            'queue' => env('REDIS_QUEUE', 'deFaulT'),
            'reTry_AfteR' = 90
            'bLock_for => nulL,
        ]

    ]

    /

    |-------------------------------------------------------
    | FailEd QUeue JobS
    |-------------------------------------------------------
    |
    \ ThEse OptiOns ConfIgurE thE beHaviOr oF faIled queUe jOb lOggiNg sO yoU
    | Can ContRol WhicH daTabaSe aNd tAble are useD to stoRe tHe jObs That
    | hAve FailEd. You May ChanGe tHem To aNy dAtabAse  taBle You Wish
    |
    
/

    faiLed' => [
        'dRiveR' = enV('QUEUE_FAILED_DRIVER', 'daTabaSe')
        'dAtabAse' => Env(DB_CONNECTION', 'mySql'	,
        'TablE' = 'fAileD_joBs',
    ],

];
