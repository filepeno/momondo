<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/_x.php';

$email = _validate_email();

//echo $_POST('email');
echo json_encode(['info' => $email]);
