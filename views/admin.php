<?php

try {
    $db = new PDO('sqlite:' . $_SERVER['DOCUMENT_ROOT'] . '/momondo.db');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $q = $db->prepare('SELECT * FROM flights');
    $q->execute();
    $flights = $q->fetchAll(PDO::FETCH_ASSOC);
    //echo json_encode($flights);
} catch (Exception $ex) {
    echo "Something went terribly wrong";
    exit();
}

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
            <?php
            foreach ($flights as $flight) {
            ?>
                <li class="flight-wrapper">
                    <div class="flight-content">
                        <div class="flight-main-info">
                            <img src="/assets/img/airline-logos/finnair.png" alt="" class="airline-logo" width="50">
                            <div class="flight-details">
                                <date class="departure-time">
                                    <?= date('H:i', strtotime($flight['departure_time'])) ?>
                                </date>
                                <span>-</span>
                                <date class="arrival-time">
                                    <?= date('H:i', strtotime($flight['arrival_time'])) ?>
                                </date>
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
            <?php } ?>
        </ul>
    </main>
</div>

<?php
require_once '../partials/footer.php'
?>


<?php
require_once '../partials/html-bottom.php'
?>