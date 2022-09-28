<?php
$page_title = 'Momondo';
$page_id = 'home-page';
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
        <h1 class="section-title h2"><?= $dictionary["{$language}_flights_main_title"] ?></h1>
        <div data-component="search-flights">
            <form id="search-form">
                <div id="form-inputs-wrapper">
                    <div id="from-to-wrapper">
                        <div class="search-input-wrapper icon plane">
                            <input id="input-from" class="search-input location-input" type="text" placeholder="From?">
                            <div class="suggestions-wrapper">



                            </div>
                        </div>
                        <button aria-label="Swap departure and destination locations" type="button" id="swap-from-to-btn"></button>
                        <div class="search-input-wrapper icon plane">
                            <input id="input-to" class="search-input location-input" type="text" placeholder="To?">
                            <div class="suggestions-wrapper">



                            </div>
                        </div>
                    </div>
                </div>
                <button id="search-btn" class=" gradient-btn"><?= $dictionary["{$language}_search"] ?></button>
            </form>

        </div>

        <div id="bottom-wrapper">
            <div class="recent-searches">
                <h2 class="section-title h3"><?= $dictionary["{$language}_recent_searches"] ?></h2>
                <ul class="item-list">
                    <li>
                        <a class="recent-search-link" href="">
                            <img src="/assets/img/helsinki.png" alt="Image of Helsinki" width="60">
                            <div class="flight-data">
                                <h3 class="destination">Helsinki (HEL), Finland</h3>
                                <p class="route">CPH - HEL, 26. okt.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="recent-search-link" href="">
                            <img src="/assets/img/amsterdam.png" alt="Image of Amsterdam" width="60">
                            <div class="flight-data">
                                <h3 class="destination">Amsterdam (AMS), Netherlands</h3>
                                <p class="route">CPH - AMS, 19. nov.</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="recent-search-link" href="">
                            <img src="/assets/img/london.png" alt="Image of London" width="60">
                            <div class="flight-data">
                                <h3 class="destination">London (LON), United Kingdom</h3>
                                <p class="route">CPH - LON, 22. dec.</p>
                            </div>
                        </a>
                    </li>
                </ul>
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