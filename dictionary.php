<?php

$languages_allowed = ['en', 'dk'];
$language = $_GET['language'] ?? 'en';
if (!in_array($language, $languages_allowed)) {
    $language = 'en';
}

function get_other_language($var)
{
    global $language;
    if ($var != $language) {
        return $language;
    }
}

$other_language = array_filter($languages_allowed, 'get_other_language');
$other_language = implode($other_language);



$dictionary = [
    'en_flights' => 'flights',
    'dk_flights' => 'fly',
    'en_stays' => 'stays',
    'dk_stays' => 'overnætning',
    'en_car_hire' => 'car_hire',
    'dk_car_hire' => 'bil',
    'en_ferries' => 'ferries',
    'dk_ferries' => 'færger',
    'en_things_to_do' => 'things_to_do',
    'dk_things_to_do' => 'oplevelser',
    'en_holidays' => 'holidays',
    'dk_holidays' => 'pakkerejser',
    'en_travel_restrictions' => 'travel restrictions',
    'dk_travel_restrictions' => 'rejserestriktioner',
    'en_trips' => 'trips',
    'dk_trips' => 'ture',

    'en_flights_main_title' => 'Welcome! Find a flexible flight for your next trip.',
    'dk_flights_main_title' => 'Velkommen! Find en fleksibel flybillet til din næste rejse.',
    'en_recommended_title' => 'Recommended for you',
    'dk_recommended_title' => 'Anbefalet til dig',
    'en_trending_cities_title' => 'Trending cities',
    'dk_trending_cities_title' => 'Populære byer',
    'en_trending_cities_subtitle' => 'The most searched for cities on momondo',
    'dk_trending_cities_subtitle' => 'De mest søgte byer på momondo',
    'en_trending_countries_title' => 'Trending countries',
    'dk_trending_countries_title' => 'Populære lande',
    'en_trending_countries_subtitle' => 'The most searched for countries on momondo',
    'dk_trending_countries_subtitle' => 'De mest søgte lande på momondo',
    'en_trending_cto' => 'Fly to',
    'dk_trending_cto' => 'Fly til',

];
