<ul class="flights">
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

    foreach ($flights as $flight) {
    ?>
        <li>
            <div class="flight-wrapper">

                <?php if ($page_id == 'admin') { ?>
                    <form class="delete-flight-form" data-component="delete-flight">
                    <?php }
                    ?>

                    <div class="flight-content">
                        <div class="flight-left">
                            <div class="flight-main-info">
                                <img src="/assets/img/airline-logos/<?= $flight['airline_image'] ?>" alt="" class="airline-logo" width="50">
                                <div class="flight-details">
                                    <p class="times">
                                        <time class="departure-time">
                                            <?= date('H:i', strtotime($flight['departure_time'])) ?>
                                        </time>
                                        -
                                        <time class="arrival-time">
                                            <?= date('H:i', strtotime($flight['arrival_time'])) ?>
                                        </time>
                                    </p>
                                    <p class="airports">
                                        <span class="dep-airport-code"><?= $flight['departure_airport_code'] ?></span>
                                        <span class="dep-airport-name"><?= $flight['departure_airport_name'] ?></span>
                                        <span class="arr-airport-code"><?= $flight['arrival_airport_code'] ?></span>
                                        <span class="arr-airport-name"><?= $flight['arrival_airport_name'] ?></span>
                                    </p>
                                </div>
                                <p class="flight-direct">direct</p>
                                <p class="flight-duration">
                                    <?php
                                    $start_date = new DateTime($flight['departure_time']);
                                    $since_start = $start_date->diff(new DateTime($flight['arrival_time']));
                                    echo ($since_start->h > 0 ? $since_start->h . 'h ' : '') . ($since_start->i > 0 ? $since_start->i . 'min.' : '')
                                    ?>
                                </p>
                            </div>
                            <div class="flight-bottom">
                                <p class="airline-name"><?= $flight['airline_name'] ?></p>
                            </div>
                        </div>
                        <div class="flight-price-wrapper">
                            <p class="price h3"><?= $flight['ticket_price'] ?></p>
                            <p class="seat-type">Economy Light</p>
                            <p class="airline-name"><?= $flight['airline_name'] ?></p>
                        </div>
                    </div>


                    <?php if ($page_id == 'admin') { ?>
                        <button type="submit" aria-label="Delete flight" class="delete-flight-btn">🗑️</button>
                        <input style="display:none" type="number" name="flight_id" value="<?= $flight['id'] ?>">
                    </form>
                <?php }
                ?>
            </div>


        </li>
    <?php }
    ?>
</ul>