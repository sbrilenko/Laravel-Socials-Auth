<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '134260497147532',
        'client_secret' => '46970bf3ff6958c118112faa825d4153',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'twitter' => [
        'client_id' => 'RkUEME3P5TmSYXHNOCQzT03Ai',
        'client_secret' => 'OS9KoP7GhawNgYM8piAkULo37PZJqjoOlBr1eZH9wJS6bq22Hf',
        'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],
    'google' => [
        'client_id' => '546368228411-3ilvc1lfv4gcad5nj3o9urif47vbp3o4.apps.googleusercontent.com',
        'client_secret' => 'JIRGVDQCw6rofdwnqYZF9V15',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ]
];
