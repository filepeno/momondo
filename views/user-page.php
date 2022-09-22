<?php

if (!$_SESSION) {
    header("Location: /sign-in");
    exit();
}

$page_title = $_SESSION['user_first_name'];

require_once '../partials/html-head.php'
?>

<?php
require_once '../partials/side-header.php'
?>

<?php
require_once '../partials/top-header.php'
?>
<div id="main-wrapper">
    <main>
        <h1>Hello <?= $_SESSION['user_first_name'] ?? 'USER' ?>!</h1>
    </main>
</div>

<?php
require_once '../partials/footer.php'
?>


<?php
require_once '../partials/html-bottom.php'
?>