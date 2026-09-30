<?php

return [
    'email' => env('CONTACT_EMAIL', 'hello@devizetechsolutions.com'),
    'phone' => env('CONTACT_PHONE'),
    'location' => env('CONTACT_LOCATION', 'Varanasi, Uttar Pradesh, India'),
    'hours' => env('CONTACT_HOURS', 'Monday – Saturday, 10:00 AM – 7:00 PM'),
    'social' => array_filter([
        'LinkedIn' => env('CONTACT_LINKEDIN'),
        'Instagram' => env('CONTACT_INSTAGRAM'),
        'Facebook' => env('CONTACT_FACEBOOK'),
        'GitHub' => env('CONTACT_GITHUB'),
        'X' => env('CONTACT_X'),
    ]),
];
