<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'doctors',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
    ],

    // ✅ Define password brokers inside 'passwords'
    'passwords' => [
        'doctors' => [
            'provider' => 'doctors',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'doctors' => [
            'driver' => 'eloquent',
            'model' => App\Models\Doctor::class,
        ],
    ],

];
