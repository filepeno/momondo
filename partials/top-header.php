<div id="top-header">
    <a href="/" aria-label="Home">
        <div class="logo">

        </div>
    </a>
    <div class="links">
        <!--<a class="header-link <?= $page_href == '/about-us' ? 'active' : '' ?>" href="/about-us">About us</a>
        <a class="header-link <?= $page_href == '/contact-us' ? 'active' : '' ?>" href="/contact-us">Contact us</a>-->
        <a class="header-link <?= $page_href == '/trips' ? 'active' : '' ?>" href="/trips">Trips</a>
        <?php
        ini_set('display_errors', 0);
        session_start();
        if (!$_SESSION) {
        ?>
            <a class="profile icon white" id="log-in-btn" href="/sign-in">Sign in</a>
        <?php } else {
        ?>
            <button id="profile-btn" class="<?= $_SESSION['user_img'] != '' ? 'img' : 'profile icon white no-hover' ?>">
                <?php if ($_SESSION['user_img'] != '') { ?>
                    <img class="profile-img" src="<?= $_SESSION['user_img'] ?>" alt="" width="40">
                <?php }
                ?>
                <span><?= $_SESSION['user_first_name'] ?></span>
                <span class="arrow-down icon white no-hover"></span>
            </button>
        <?php }
        ini_set('display_errors', 1); ?>
        <a href="">English</a>
    </div>
</div>