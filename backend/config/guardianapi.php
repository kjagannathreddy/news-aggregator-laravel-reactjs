<?php

return [
    'api_key' => env('THEGUARDIAN_API_KEY'),
    'base_url' => 'https://content.guardianapis.com/search',
    'param' => 'thumbnail,byline,trailText,headline&page-size=30',

    'options' => [
        'verify' => false,
        'timeout' => 30,
    ],
];
