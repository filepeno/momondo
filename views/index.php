<?php
$page_title = 'Momondo';
require_once '../modules/head.php'
?>

<body>
    <header>
        <a href="/">
            <div class="logo">

            </div>
        </a>
        <div class="links">
            <a class="header-link" href="about-us">About us</a>
            <a class="header-link" href="contact-us">Contact us</a>
            <a class="header-link" href="">Trips</a>
            <a id="log-in-btn" href="login">Log in</a>
            <a href="">English</a>
        </div>

    </header>
    <main>
        <div id="search-flights">
            <form id="search-form">
                <div id="from-to-wrapper">
                    <div class="search-input-wrapper">
                        <input id="input-from" class="location-input" type="text" placeholder="From?">
                        <div class="suggestions-wrapper">



                        </div>
                    </div>
                    <button>Swap</button>
                    <div class="search-input-wrapper">
                        <input id="input-to" class="location-input" type="text" placeholder="To?">
                        <div class="suggestions-wrapper">



                        </div>
                    </div>
                </div>
                <button id="search-button">Seach</button>
            </form>

        </div>

        <div id="bottom-wrapper">
            <div id="filter">
                FILTER
            </div>
            <div id="price-diagram">
                PRICE DIAGRAM
            </div>
            <div id="results">
                RESULTS
            </div>
        </div>
    </main>
    <footer>
        Footer
    </footer>
    <script src="app.js"></script>
</body>

</html>