<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>

<body oncontextmenu="return false">
    <header>
        <img class="logo" src="momondo-logo.png" alt="Momondo logo" width="200">
        <div>
            <a href="trips">Trips</a>
            <a href="login">Log in</a>
            <a href="danish">Dansk</a>
        </div>

    </header>

    <div id="search-flights">
        <form>
            <div id="from-wrapper">
                <input id="input-from" type="text" placeholder="From?" onfocus="toggle_results_from()" oninput="toggle_results_from()" onblur="hide_results_from()">
                <div id="results-from">

                    <button>
                        <div class="city">
                            <img class="city-img" src="city-thumbnail-01.png" alt="Image of city" width="100px">
                            <div class="city-data-wrapper">
                                <h2 class="city-name">City name here</h2>
                                <p>City airport</p>
                            </div>
                        </div>
                    </button>

                </div>
            </div>
        </form>

    </div>

    <div id="bottom-wrapper">
        <div id="filter">
            Left
        </div>
        <div id="results">
            RIght
        </div>
    </div>
    <footer>
        Footer
    </footer>
    <script src="app.js"></script>
</body>

</html>