<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | "paths" defines the routes that are CORS-enabled. "allowed_origins"
    | lists the frontend origins (scheme + host, no trailing slash) that may
    | call the API. A comma-separated list can be supplied via the
    | CORS_ALLOWED_ORIGINS environment variable, "*" to allow any origin, or
    | "https://*.domain" to allow any subdomain of a domain (e.g. Vercel
    | deployments).
    |
    */

    'paths' => ['api/*'],

    'allowed_methods' => ['*'],

    // Always allow Vercel deployments (any *.vercel.app subdomain) and the
    // resort's own domain, then merge in anything supplied via the
    // CORS_ALLOWED_ORIGINS environment variable (e.g. local dev origins).
    // Defaulting here means the API keeps working even if the platform's
    // environment injection is slow or misconfigured.
    'allowed_origins' => array_filter(array_merge(
        [
            'https://*.vercel.app',
            'https://littlesurvivorbeachresort.com',
        ],
        array_map(
            'trim',
            explode(',', (string) env('CORS_ALLOWED_ORIGINS', ''))
        )
    )),

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,

];
