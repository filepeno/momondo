<?php

$page_title = 'Trips';
$page_href = '/trips';
$page_id = 'trips-page';
require_once '../partials/html-head.php';

if ($_SESSION) {
    Header('Location: /my-trips');
    exit();
}
?>

<?php
require_once '../partials/side-header.php'
?>

<?php
require_once '../partials/top-header.php'
?>

<div id="main-wrapper" class="">
    <main>
        <h1>Trips</h1>
    </main>
</div>

<?php
require_once '../partials/footer.php'
?>

<?php
require_once '../partials/html-bottom.php'
?>