<?php

return [

    // The default gateway to use
    'default' => 'payfast',

    // Add in each gateway here
    'gateways' => [
        'payfast' => [
            'driver'  => 'PayFast',
            'options' => [],
        ],
        'paypal' => [
            'driver'  => 'PayPal_Express',
            'options' => [
                'solutionType'   => '',
                'landingPage'    => '',
                'headerImageUrl' => '',
            ],
        ],
        'stripe' => [
            'driver'  => 'Stripe',
            'options' => [],
        ],
    ],

];
