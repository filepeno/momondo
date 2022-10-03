<?php

$page_title = 'My trips';
$page_id = 'trips-page';
require_once '../partials/html-head.php';

if (!$_SESSION) {
    Header('Location: /momondo-trips');
    exit();
}
?>

<?php
require_once '../partials/side-header.php'
?>

<?php
require_once '../partials/top-header.php'
?>

<div id="main-wrapper" class="">
    <main>

        <header class="heading-wrapper">
            <h1 class="h1 capitalize"><?= $dictionary["{$language}_trips"] ?></h1>
            <button id="add-trip" class="purple-btn"><?= $dictionary["{$language}_add_a_trip"] ?></button>
            <button aria-label="Toggle map" class="toggle-map icon map white no-hover"></button>
        </header>
        <section class="" id="upcoming-trips">
            <h2 class="h3 section-title"><?= $dictionary["{$language}_upcoming_trips"] ?> (2)</h2>
            <ul class="trips">
                <li>
                    <div class="trip-wrapper">
                        <div class="img-wrapper">
                            <img src="/assets/img/cities/hamburg-md.jpg" alt="">
                        </div>

                        <div class="trip-info">
                            <div class="trip-details">
                                <h3 class="trip-title h4">Berlin-trip</h3>
                                <div class="from-to-wrapper">
                                    <time class="from">20.2.2022</time>
                                    <span> - </span>
                                    <time class="to">30.2.2022</time>
                                </div>
                            </div>
                            <div class="thumbnails">
                                <div class="icon heart">0</div>
                                <div class="icon plane">0</div>
                                <div class="icon car">3</div>

                            </div>
                        </div>
                        <button class="remove-trip-btn x-btn icon x"></button>
                    </div>

                </li>

            </ul>
        </section>
    </main>
    <aside id="trips-map"></aside>
</div>

<?php
require_once '../partials/footer.php'
?>

<?php
require_once '../partials/html-bottom.php'
?>