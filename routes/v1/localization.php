<?php

$api->get(
    '/localizations',
    [
        'as'   => 'localizations',
        'uses' => 'LocalizationController@index',
    ]
);