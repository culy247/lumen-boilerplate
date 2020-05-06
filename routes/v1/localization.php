<?php

$router->get(
    '/localizations',
    [
        'uses' => 'LocalizationController@index',
    ]
);