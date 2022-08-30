<?php

$cities = [
    [
        'city_name' => 'Copenhagen',
        'city_airport' => 'CPH Kastrup',
        'city_image' => 'city-thumbnail-01.png',
        'city_population' => '1.000'


    ],
    [
        'city_name' => 'Turku',
        'city_airport' => 'Turun lentoasema',
        'city_image' => 'city-thumbnail-02.png',
        'city_population' => '2.000.000'
    ],
    [
        'city_name' => 'Helsinki',
        'city_airport' => 'Helsinki-Vantaa',
        'city_image' => 'city-thumbnail-03.png',
        'city_population' => '1'
    ]
];

echo json_encode($cities);
