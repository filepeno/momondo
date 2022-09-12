<header id="side-header">
    <nav id="side-nav">
        <button id="toggle-side-nav">Toggle</button>
        <ul>
            <li>
                <a class="side-nav-link <?= $page_href == '/sign-in' ? 'active' : '' ?>" href="/sign-in"><span class="link-text">Sign in</span></a>
            </li>
        </ul>
        <ul>
            <li><a class="side-nav-link <?= $page_href == '/' ? 'active' : '' ?>" href="/"><span class="link-text">Flights</span></a></li>
            <li><a class="side-nav-link <?= $page_href == '/stays' ? 'active' : '' ?>" href="/stays"><span class="link-text">Stays</span></a></li>
            <li><a class="side-nav-link <?= $page_href == '/car-rental' ? 'active' : '' ?>" href="/car-rental"><span class="link-text">Car Rental</span></a></li>
            <li><a class="side-nav-link <?= $page_href == '/things-to-do' ? 'active' : '' ?>" href="/things-to-do"><span class="link-text">Things to do</span></a></li>
            <li><a class="side-nav-link <?= $page_href == '/packages' ? 'active' : '' ?>" href="/packages"><span class="link-text">Packages</span></a></li>
            <li><a class="side-nav-link <?= $page_href == '/trains-and-buses' ? 'active' : '' ?>" href="/trains-and-buses"><span class="link-text">Trains and buses</span></a></li>
        </ul>
        <ul>
            <li>
                <a class="side-nav-link <?= $page_href == '/sign-in' ? 'active' : '' ?>" href="/explore"><span class="link-text">Explore</span></a>
            </li>
            <li>
                <a class="side-nav-link <?= $page_href == '/sign-in' ? 'active' : '' ?>" href="/travel-restrictions"><span class="link-text">Travel Restrictions</span></a>
            </li>
        </ul>
        <ul>
            <li>
                <a class="side-nav-link <?= $page_href == '/trips' ? 'active' : '' ?>" href="<?= $page_href ?>"><span class="link-text">Trips</span></a>
            </li>

        </ul>



    </nav>
</header>