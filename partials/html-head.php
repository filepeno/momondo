<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/dictionary.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucfirst($page_title) ?? 'Ups..' ?></title>
    <link rel="stylesheet" href="index.css">

</head>

<body id="<?= $page_id ?? '' ?>">