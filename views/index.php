<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Momondo</title>
    <link rel="stylesheet" href="index.css">

</head>

<body>
    <header>
        <img class="logo" src="assets/img/momondo-logo.png" alt="Momondo logo" width="200">
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