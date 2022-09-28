<?php
$page_title = 'Momondo';
$page_id = 'home-page';
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
        <h1 class="section-title h2"><?= $dictionary["{$language}_flights_main_title"] ?></h1>

        <?php
        require_once '../components/search-flights.php'
        ?>

        <div id="bottom-wrapper">

            <?php
            require_once '../components/recent-searches.php'
            ?>

            <?php
            require_once '../components/recommended.php'
            ?>

        </div>
    </main>
</div>

<?php
require_once '../partials/footer.php'
?>


<?php
require_once '../partials/html-bottom.php'
?>