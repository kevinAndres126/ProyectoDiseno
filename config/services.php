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
        'client_id' => '157429988196581',
        'client_secret' => 'd3c60a648483693b8fabd0d4b3e48d08',
        'redirect' => 'http://localhost:8000/auth/facebook/callback'
    ],

    'twitter' => [
    'client_id' => '702511778866008064',
    'client_secret' => 'BdvacllsUV8mkTfbbHP6vJOBQvCO1xjufqtlJJromEpzC6S2Io',
    'redirect' => 'http://localhost:8000/auth/twitter/callback',
    ],

];
