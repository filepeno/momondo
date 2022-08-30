<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">

</head>

<body>
    <header>
        <img class="logo" src="momondo-logo.png" alt="Momondo logo" width="200">
        <div>
            <a href="trips">Trips</a>
            <a href="login">Log in</a>
            <a href="danish">Dansk</a>
        </div>

    </header>
    <main>
        <div id="search-flights">
            <form id="search-form">
                <div id="from-to-wrapper">
                    <div id="from-wrapper">
                        <input id="input-from" type="text" placeholder="From?" onfocus="toggle_results_from()" oninput="toggle_results_from()" onblur="hide_results_from()">
                        <div id="results-from">



                        </div>
                    </div>
                    <div id="to-wrapper">
                        <input id="input-to" type="text" placeholder="To?" onfocus="toggle_results_to()" oninput="toggle_results_to()" onblur="hide_results_to()">
                        <div id="results-to">



                        </div>
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
    </main>
    <footer>
        Footer
    </footer>
    <script src="app.js"></script>
</body>

</html>