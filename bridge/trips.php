<?php

session_start();

if (!$_SESSION) {

    Header('Location: /momondo-trips');
    exit();
}

Header('Location: /my-trips');
