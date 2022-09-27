<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/_x.php';

$path = _validate_image();
echo json_encode(['file_path' => $path]);
