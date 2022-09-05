<?php

$flights = [
    [
        'departure_airport' => 'HEL',
        'departure_date' => '2020-04-26T07:00',
        'arrival_airport' => 'CPH',
        'arrival_date' => '2020-04-26T07:55',
    ],
    [
        'departure_airport' => 'LUT',
        'departure_date' => '2022-05-26T07:00',
        'arrival_airport' => 'CPH',
        'arrival_date' => '2022-05-26T08:55',
    ]
];

echo json_encode($flights);
