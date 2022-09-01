<?php

$flights = [
    [
        'departure_airport' => 'HEL',
        'arrival_airport' => 'CPH'
    ],
    [
        'departure_airport' => 'LUT',
        'arrival_airport' => 'CPH'
    ]
];

echo json_encode($flights);
