<?php

return [
    'api_key' => env('NEWYORKTIMES_API_KEY'),
    'base_url' => 'https://api.nytimes.com/svc/search/v2/articlesearch.json',
    'options' => [
        'verify' => false,
        'timeout' => 30,
    ],
];