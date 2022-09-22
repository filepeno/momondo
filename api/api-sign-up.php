<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/_x.php';

$user_email = _validate_email();
//TODO: check user existense also
$user_first_name = _validate_user_first_name();
$user_last_name = _validate_user_last_name();
$user_password = _validate_user_password();

$user = [
    'user email' => $user_email,
    'user first name' => $user_first_name,
    'user last name' => $user_last_name,
    'user password' => $user_password
];

echo json_encode($user);
