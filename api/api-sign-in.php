<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/_x.php';
require_once __DIR__ . '/api-check-user-existence.php';

$email = _validate_email();

$user = _check_user_existense($email);

echo json_encode($user['user_email']);
