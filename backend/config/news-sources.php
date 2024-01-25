<?php

return [

    // Source 1
    'newsapi'   => [
        'api_url'           => 'https://newsapi.org/v2/top-headlines',
        'api_key'           => env('NEWSAPI_API_KEY', 'c1e09b72374a06a697932bae5'),
        'api_parameter_name'=> 'apiKey',
        'other_paremeters'  => ['country' => 'us'],
    ],

    // Source 2
    'theguardian'   => [
        'api_url'   => 'https://content.guardianapis.com/search',
        'api_key'   => env('THEGUARDIAN_API_KEY', 'd2a9-4bd7-4702-b4cf-b047-0a9a4cd53'),
        'api_parameter_name'=> 'api-key',
    ],


    // Source 3
    'newyorktimes'   => [
        'api_url'   => 'https://api.nytimes.com/svc/search/v2/articlesearch.json',
        'api_key'   => env('NEWYORKTIMES_API_KEY', 'VvIUBCfWQBV8s6zX5w5MycwfCl'),
        'api_parameter_name'=> 'api-key',
    ]

];