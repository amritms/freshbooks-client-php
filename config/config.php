<?php

return [
    'client_id' => env('FRESH_CLIENT_ID'),
    'client_secret' => env('FRESH_CLIENT_SECRET'),
    'graphql_auth_uri' => env('FRESH_AUTHORIZATION_URI'),
    'graphql_uri' => env('FRESH_REDIRECT_URI'),
    'business_id' => env('WAVE_BUSINESS_ID', null),
    'access_token' => null,
    'refresh_token' => null
];
