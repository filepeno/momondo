<?php
$page_title = 'Flights';
$page_id = 'admin';
require_once '../partials/html-head.php';

if (!$_SESSION) {
    Header('Location: /sign-in');
    exit();
}
?>

<?php
require_once '../partials/side-header.php'
?>

<?php
require_once '../partials/top-header.php'
?>
<div id="main-wrapper">
    <main>
        <h1 class="h1 section-title">Flights</h1>
        <ul class="flights">
            <li class="flight-wrapper">
                <div class="flight-content">
                    <div class="flight-main-info">
                        <img src="/assets/img/airline-logos/finnair.png" alt="" class="airline-logo" width="50">
                        <div class="flight-details">
                            <date class="departure-time">13:25</date>
                            <span>-</span>
                            <date class="arrival-time">15:26</date>
                        </div>
                    </div>
                    <div class="flight-price-wrapper">
                        <p class="price h3">200 kr.</p>
                        <p class="seat-type">Economy Light</p>
                        <p class="airline-name">Finnair</p>

                    </div>
                </div>
                <button aria-label="Delete flight" class="delete-flight-btn">🗑️</button>

            </li>

        </ul>
    </main>
</div>

<?php
require_once '../partials/footer.php'
?>


<?php
require_once '../partials/html-bottom.php'
?>