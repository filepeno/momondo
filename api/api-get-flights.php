<?php


try {


    $db = new PDO('sqlite:' . $_SERVER['DOCUMENT_ROOT'] . '/momondo.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if (!isset($_GET['departure_city']) || ($_GET['departure_city']) == '' || !ctype_alpha($_GET['departure_city'])) {
        echo json_encode(['info' => 'departure city not set or not alphabetic']);
        exit();
    }
    if (!isset($_GET['arrival_city']) || ($_GET['arrival_city']) == '' || !ctype_alpha($_GET['arrival_city'])) {
        echo json_encode(['info' => 'arrival city not set or not alphabetic']);
        exit();
    }
    $departure_city = $_GET['departure_city'];
    $arrival_city = $_GET['arrival_city'];
    $q = $db->prepare('SELECT * FROM flights WHERE departure_city LIKE :departure_city AND arrival_city LIKE :arrival_city');
    $q->bindValue(':departure_city', '%' . $departure_city . '%');
    $q->bindValue(':arrival_city', '%' . $arrival_city . '%');
    $q->execute();
    $flights = $q->fetchAll(PDO::FETCH_ASSOC);
    //echo json_encode($flights);
} catch (Exception $ex) {
    echo "Something went terribly wrong";
    exit();
}

/* $flights = [
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
]; */

echo json_encode($flights);
