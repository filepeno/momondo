<?php

$cities = [
    [
        'city' => 'Copenhagen',
        'name' => 'CPH Kastrup',
        'image' => 'copenhagen.png',
        'city_population' => '1.000'


    ],
    [
        'city' => 'Turku',
        'name' => 'Turun lentoasema',
        'image' => 'turku.png',
        'city_population' => '2.000.000'
    ],
    [
        'city' => 'Helsinki',
        'name' => 'Helsinki-Vantaa',
        'image' => 'helsinki.png',
        'city_population' => '1'
    ]
];

echo json_encode($cities);
