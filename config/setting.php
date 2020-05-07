<?php

return [
    'permission' => [
        'role_names' => [
            'system' => 'system',
            'admin'  => 'admin',
        ],
        'permission_names' => [
            'view_backend'         => 'view backend',
            'manage_authorization' => 'manage authorization',
        ],
    ],

    'api' => [
        'throttle' => [
            'expires' => 1,
            'limit'   => 60,
        ],
        'token' => [
            'access_token_expire'  => 43200, //60 * 24 * 30, // 1month
            'refresh_token_expire' => 86400, //60 * 24 * 30 * 2, // 2month
        ]
    ],

    'repository' => [
        'skip_pagination'  => true,
        'limit_pagination' => 100,
    ],

    'formats' => [
        'date'        => 'Y-m-d',
        'time_12'     => 'h:i:s A',
        'time_24'     => 'H:i:s',
        'datetime_12' => 'Y-m-d h:i:s A',
        'datetime_24' => 'Y-m-d H:i:s',
    ],
];
