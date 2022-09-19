<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/_x.php';
require_once __DIR__ . '/api-check-user-existence.php';

$email = _validate_email();

$user = _check_user_existense($email);

$input_password = _validate_user_password();

if ($user['user_password'] != $input_password) {
    http_response_code(400);
    echo json_encode(['info' => 'password did not match']);
    exit();
}

//echo json_encode(['info' => $user]);
session_start();
$_SESSION['user_first_name'] = $user['user_first_name'];
$_SESSION['user_last_name'] = $user['user_last_name'];
$_SESSION['user_email'] = $user['user_email'];
$_SESSION['user_img'] = $user['user_img'];
