<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],

    'allowed_methods' => ['*'],

    'allowed_origins' => array_values(array_filter(array_merge(
        [
            'https://little-survivor-website.vercel.app',
            'https://littlesurvivorbeachresort.com',
            'http://localhost:3000',
            'http://localhost:8000',
        ],
        array_map('trim', explode(',', (string) env('CORS_ALLOWED_ORIGINS', '')))
    ))),

    /* Wildcard domain matching must be in patterns using regex: */
    'allowed_origins_patterns' => [
        '#^https://.*\.vercel\.app$#',
    ],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 86400,

    'supports_credentials' => false,

];