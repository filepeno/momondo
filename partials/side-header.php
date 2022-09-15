<header id="side-header">
    <nav id="side-nav">
        <button class="icon menu lila" id="toggle-menu-btn" aria-label="Toggle side menu"></button>
        <ul>
            <li>
                <a class="side-nav-link icon profile lila <?= $page_href == '/sign-in' ? 'active' : '' ?>" href="/sign-in"><span class="link-text">Sign in</span></a>
            </li>
        </ul>
        <ul>
            <li><a class="side-nav-link plane icon lila <?= $page_href == '/' ? 'active' : '' ?>" href="/"><span class="link-text">Flights</span></a></li>
            <li><a class="side-nav-link bed icon lila <?= $page_href == '/stays' ? 'active' : '' ?>" href="/stays"><span class="link-text">Stays</span></a></li>
            <li><a class="side-nav-link car icon lila <?= $page_href == '/car-rental' ? 'active' : '' ?>" href="/car-rental"><span class="link-text">Car Rental</span></a></li>
            <li><a class="side-nav-link directions icon lila <?= $page_href == '/things-to-do' ? 'active' : '' ?>" href="/things-to-do"><span class="link-text">Things to do</span></a></li>
            <li><a class="side-nav-link beach icon lila <?= $page_href == '/holidays' ? 'active' : '' ?>" href="/holidays"><span class="link-text">Holidays</span></a></li>

        </ul>
        <ul>
            <li>
                <a class="side-nav-link globe icon lila<?= $page_href == '/sign-in' ? 'active' : '' ?>" href="/explore"><span class="link-text">Explore</span></a>
            </li>
            <li>
                <a class="side-nav-link shield icon lila<?= $page_href == '/sign-in' ? 'active' : '' ?>" href="/travel-restrictions"><span class="link-text">Travel Restrictions</span></a>
            </li>
        </ul>
        <ul>
            <li>
                <a class="side-nav-link notes icon lila<?= $page_href == '/trips' ? 'active' : '' ?>" href="<?= $page_href ?>"><span class="link-text">Trips</span></a>
            </li>

        </ul>



    </nav>
</header>