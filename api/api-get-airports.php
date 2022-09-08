<?php

$airports = [
    [
        'city' => 'Copenhagen',
        'country' => 'Denmark',
        'name' => 'Kastrup',
        'image' => 'copenhagen.png',
        'code' => 'CPH'
    ],
    [
        'city' => 'Turku',
        'country' => 'Finland',
        'name' => 'Turun lentoasema',
        'image' => 'turku.png',
        'code' => 'TKU'
    ],
    [
        'city' => 'Helsinki',
        'country' => 'Finland',
        'name' => 'Helsinki-Vantaa',
        'image' => 'helsinki.png',
        'code' => 'HEL'
    ],
    [
        'city' => 'London',
        'country' => 'United Kingdom',
        'name' => 'London Luton',
        'image' => 'london.png',
        'code' => 'LTN'
    ]
];

echo json_encode($airports);
