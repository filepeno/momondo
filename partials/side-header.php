<header id="side-header" data-component="side-nav">
    <?php $current_uri = strtok($_SERVER['REQUEST_URI'], '?') ?>
    <nav id="side-nav">
        <button class="icon menu lila" id="toggle-menu-btn" aria-label="Toggle side menu"></button>
        <?php
        if (!$_SESSION) { ?>
            <ul>
                <li>
                    <a class="side-nav-link icon profile lila <?= $current_uri == '/sign-in' ? 'active' : '' ?>" href="/sign-in"><span class="link-text">Sign in</span></a>
                </li>
            </ul>
        <?php };
        ?>
        <ul>
            <li><a class="side-nav-link plane icon lila <?= $current_uri == '/' ? 'active' : '' ?>" href="/"><span class="link-text">Flights</span></a></li>
            <li><a class="side-nav-link bed icon lila <?= $current_uri == '/stays' ? 'active' : '' ?>" href="/stays"><span class="link-text">Stays</span></a></li>
            <li><a class="side-nav-link car icon lila <?= $current_uri == '/car-rental' ? 'active' : '' ?>" href="/car-rental"><span class="link-text">Car Rental</span></a></li>
            <li><a class="side-nav-link directions icon lila <?= $current_uri == '/things-to-do' ? 'active' : '' ?>" href="/things-to-do"><span class="link-text">Things to do</span></a></li>
            <li><a class="side-nav-link beach icon lila <?= $current_uri == '/holidays' ? 'active' : '' ?>" href="/holidays"><span class="link-text">Holidays</span></a></li>

        </ul>
        <ul>
            <li>
                <a class="side-nav-link globe icon lila <?= $current_uri == '/explore' ? 'active' : '' ?>" href="/explore"><span class="link-text">Explore</span></a>
            </li>
            <li>
                <a class="side-nav-link shield icon lila <?= $current_uri == '/travel-restrictions' ? 'active' : '' ?>" href="/travel-restrictions"><span class="link-text">Travel Restrictions</span></a>
            </li>
        </ul>
        <ul>
            <li>
                <a class="side-nav-link notes icon lila <?= $current_uri == '/trips' ? 'active' : '' ?>" href="/trips"><span class="link-text">Trips</span></a>
            </li>

        </ul>



    </nav>
</header>