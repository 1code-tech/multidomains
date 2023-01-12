<?php

return [
    'main' => env('MAIN_DOMAIN'),
    'admin' => [
        'domain' => env('ADMIN_DOMAIN'),
        'prefix' => env('ADMIN_PREFIX', 'admin'),
    ],
];
