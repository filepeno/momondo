<?php
$page_title = 'Momondo';
$page_href = '/';
require_once '../partials/html-head.php'
?>

<?php
require_once '../partials/side-header.php'
?>

<?php
require_once '../partials/top-header.php'
?>
<div id="main-wrapper">
    <main>
        <h1 class="section-title">Welcome! Find a flexible flight for your next trip.</h1>
        <div id="search-flights">
            <form id="search-form">
                <div id="form-inputs-wrapper">
                    <div id="from-to-wrapper">
                        <div class="search-input-wrapper icon plane">
                            <input id="input-from" class="location-input" type="text" placeholder="From?">
                            <div class="suggestions-wrapper">



                            </div>
                        </div>
                        <button>Swap</button>
                        <div class="search-input-wrapper icon plane">
                            <input id="input-to" class="location-input" type="text" placeholder="To?">
                            <div class="suggestions-wrapper">



                            </div>
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
</div>

<?php
require_once '../partials/footer.php'
?>


<?php
require_once '../partials/html-bottom.php'
?>