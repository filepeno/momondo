<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/_x.php';
require_once __DIR__ . '/api-check-user-existence.php';

$email = _validate_email();

$existing_users = [
    [
        'user_email' => 'john@doe.com',
        'user_password' => 'pw123',
        'user_first_name' => 'John',
        'user_last_name' => 'Doe'
    ],
    [

        'user_email' => 'jane@doe.com',
        'user_password' => 'pw123',
        'user_first_name' => 'Jane',
        'user_last_name' => 'Doe'
    ],
    [

        'user_email' => 'a@a.com',
        'user_password' => 'pw123',
        'user_first_name' => 'Alex',
        'user_last_name' => 'Abbot'
    ]
];

$user = _check_user_existense($existing_users, $email);

echo json_encode($user);
