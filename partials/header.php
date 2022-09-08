<header>
    <a href="/" aria-label="Home">
        <div class="logo">

        </div>
    </a>
    <div class="links">
        <a class="header-link <?= $_SERVER['REQUEST_URI'] == '/about-us' ? 'active' : '' ?>" href="/about-us">About us</a>
        <a class="header-link <?= $_SERVER['REQUEST_URI'] == '/contact-us' ? 'active' : '' ?>" href="/contact-us">Contact us</a>
        <a class="header-link <?= $_SERVER['REQUEST_URI'] == '/trips' ? 'active' : '' ?>" href="/trips">Trips</a>
        <a id="log-in-btn" href="login">Log in</a>
        <a href="">English</a>
    </div>
</header>