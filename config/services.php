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
         'client_id' => '2091838484373383',         // Your facebook Client ID
        'client_secret' => 'bc6b19e476123f0f6bc55549b6e36d36', // Your facebook Client Secret
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'twitter' => [
        'client_id' => '53pUtKIUMVI7ULt0vNXql6nJp',         // Your twitter Client ID
        'client_secret' => 'dJ3wMvUUOkW4bPB1fw12NkGFcg6509W1big2oaLIRPW0cYM8RB', // Your twitter Client Secret
        'redirect' => 'http://localhost:8000/login/twitter/callback',
    ],
    'github' => [
        'client_id' => '787d393a140dc9faba93',         // Your github Client ID
        'client_secret' => '6a1dd77e3c948e4f0f929fc5a85ee0ff318d5aa1', // Your github Client Secret
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],

];
