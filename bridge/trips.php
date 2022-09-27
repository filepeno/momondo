<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/dictionary.php';

session_start();

if (!$_SESSION) {

    Header('Location: /momondo-trips?language=' . $language);
    exit();
}

Header('Location: /my-trips?language=' . $language);
