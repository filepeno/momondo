<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/_x.php';

$path = _validate_image();

session_start();
$_SESSION['user_img'] = $path;

echo json_encode(['file_path' => $path]);
