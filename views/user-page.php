<?php

$page_title = 'Profile - Dashboard';
$page_id = 'user-dashboard';

require_once '../partials/html-head.php';

if (!$_SESSION) {
    header("Location: /sign-in");
    exit();
};
?>

<?php
require_once '../partials/side-header.php'
?>

<?php
require_once '../partials/top-header.php'
?>
<div id="main-wrapper">
    <main>
        <header class="top">
            <div>
                <h1 class="h1"><?= $dictionary["{$language}_hi"] . ' ' . $_SESSION['user_first_name'] ?>!</h1>
                <address class="user-details">
                    <ul>
                        <li>
                            <p>E-mail</p>
                            <p class="emphasize"><?= $_SESSION['user_email'] ?></p>
                        </li>
                        <li>
                            <p><?= $dictionary["{$language}_home_airport"] ?></p>
                            <p class="emphasize">none</p>
                        </li>
                    </ul>
                </address>

            </div>
            <div class="btn-wrapper">
                <button class="change-img-btn edit">
                    <div class="img-wrapper">
                        <img src="<?= $_SESSION['user_img'] !== '' ? $_SESSION['user_img'] : '/assets/icons/profile.svg' ?>" alt="Image of <?= $_SESSION['user_first_name'] ?>" width="150">
                    </div>
                </button>
                <button class="x-btn icon white x no-hover"></button>
            </div>

        </header>
    </main>
</div>

<?php
require_once '../partials/footer.php'
?>


<?php
require_once '../partials/html-bottom.php'
?>