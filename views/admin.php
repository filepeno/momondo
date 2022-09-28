<?php

$page_title = 'Admin';
$page_id = 'admin';
require_once '../partials/html-head.php';

if (!$_SESSION) {
    Header('Location: /sign-in');
    exit();
}
?>

<?php
require_once '../partials/side-header.php'
?>

<?php
require_once '../partials/top-header.php'
?>
<div id="main-wrapper">
    <main>
        <!--<h1 class="h1 section-title">Admin</h1>-->
        <?php
        require_once '../components/flights.php'
        ?>
    </main>
</div>

<?php
require_once '../partials/footer.php'
?>


<?php
require_once '../partials/html-bottom.php'
?>