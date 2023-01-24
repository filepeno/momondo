<?php

/* $airports = [
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
]; */

/* try {
    $db = new PDO('sqlite:' . $_SERVER['DOCUMENT_ROOT'] . '/momondo.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->prepare('SELECT * FROM flights');
    $q->execute();
    $flights = $q->fetchAll(PDO::FETCH_ASSOC);
    // echo json_encode($flights);
    echo json_encode($flights);
} catch (Exception $ex) {
    echo "Sorry went terribly wrong";
    exit();
} */

try {
    $con = mysqli_connect("localhost", "root", "", "momondo");
    $response = array();
    $sql = "SELECT * FROM airports";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header("Content-Type: JSON");
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $response[$i]['id'] = $row['id'];
            $response[$i]['country'] = $row['country'];
            $response[$i]['city'] = $row['city'];
            $response[$i]['airport_code'] = $row['airport_code'];
            $i++;
        }
        echo json_encode($response);
    }
} catch (Exception $ex) {
    echo "Sorry went terribly wrong, error: ", $ex;
    exit();
}
