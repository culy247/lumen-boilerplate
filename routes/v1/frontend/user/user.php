<?php

$router->group(
    [
        'namespace' => 'User',
        'as' => 'users',
    ],
    function () use ($router) {
// Access
        $router->get(
            '/profile',
            [
                'as' => 'profile',
                'uses' => 'UserAccessController@profile',
            ]
        );
    }
);