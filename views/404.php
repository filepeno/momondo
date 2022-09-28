<?php
$page_title = 'Page not found';
$page_id = '404';
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
        <h1 class="section-title h2"><?= $dictionary["{$language}_404_title"] ?></h1>
        <a class="link-primary" href="/">Go back to home</a>
    </main>
</div>

<?php
require_once '../partials/footer.php'
?>


<?php
require_once '../partials/html-bottom.php'
?>