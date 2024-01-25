<?php

return [
    'api_key' => env('NEWSAPI_API_KEY'),
    'base_url' => 'https://newsapi.org/v2/',
    'endpoints' => [
        'top_headlines' => 'top-headlines',
        'sources' => 'top-headlines/sources',
    ],
    'options' => [
        'verify' => false,
        'timeout' => 30,
    ],
];
