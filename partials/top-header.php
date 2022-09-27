<div id="site-wrapper">

    <div id="top-header" data-component="top-header">
        <a href="/?language=<?= $language ?>" aria-label="Home">
            <div class="logo">

            </div>
        </a>
        <div class="links">
            <a class="header-link" href="/trips?language=<?= $language ?>"><?= $dictionary["{$language}_trips"] ?></a>
            <?php
            if (!$_SESSION) {
            ?>
                <a class="profile icon white" id="log-in-btn" href="/sign-in?language=<?= $language ?>"><?= $dictionary["{$language}_sign_in"] ?></a>
            <?php } else {
            ?>
                <div class="profile-menu-wrapper">
                    <button id="profile-btn" class="<?= $_SESSION['user_img'] != '' ? 'img' : 'profile icon white no-hover' ?>">
                        <?php if ($_SESSION['user_img'] != '') { ?>
                            <img class="profile-img" src="<?= $_SESSION['user_img'] ?>" alt="" width="40">
                        <?php }
                        ?>
                        <span><?= $_SESSION['user_first_name'] ?></span>
                        <span class="arrow-down icon white no-hover"></span>
                    </button>
                    <div id="profile-menu">
                        <a class="profile-menu-item" href="/trips">Your Trips</a>
                        <a class="profile-menu-item" href="">Help/FAQ</a>
                        <a class="profile-menu-item" href="">Your Account</a>
                        <a class="profile-menu-item" href="/admin">Flights</a>
                        <a id="log-out-btn" href="/log-out">Log out</a>
                    </div>
                </div>
            <?php }
            ?>
            <a aria-label="Switch to <?= strtoupper($other_language) ?>" class="language-btn <?= $language == 'dk' ? 'dk' : '' ?>" href="<?= $lang_href ?>"></a>
        </div>
    </div>