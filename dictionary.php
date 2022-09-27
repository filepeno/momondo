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

$lang_href = get_lang_href();

function get_lang_href()
{
    global $language, $other_language;
    if (str_contains($_SERVER['QUERY_STRING'], "language={$language}")) {
        return str_replace("language={$language}", "language={$other_language}", $_SERVER['REQUEST_URI']);
    }
    if ($_SERVER['QUERY_STRING'] == '') {
        return $_SERVER['REQUEST_URI'] . '?language=' . $other_language;
    }
    return $_SERVER['REQUEST_URI'] . '&language=' . $other_language;
}





$dictionary = [
    'en_sign_in' => 'sign in',
    'dk_sign_in' => 'log ind',
    'en_flights' => 'flights',
    'dk_flights' => 'fly',
    'en_stays' => 'stays',
    'dk_stays' => 'overnætning',
    'en_car_hire' => 'car hire',
    'dk_car_hire' => 'bil',
    'en_ferries' => 'ferries',
    'dk_ferries' => 'færger',
    'en_things_to_do' => 'things to do',
    'dk_things_to_do' => 'oplevelser',
    'en_holidays' => 'holidays',
    'dk_holidays' => 'pakkerejser',
    'en_travel_restrictions' => 'travel restrictions',
    'dk_travel_restrictions' => 'rejserestriktioner',
    'en_trips' => 'trips',
    'dk_trips' => 'rejser',

    'en_your_trips' => 'Your trips',
    'dk_your_trips' => 'Dine rejser',
    'en_help' => 'Help',
    'dk_help' => 'Hjælp',
    'en_faq' => 'FAQ',
    'dk_faq' => 'Ofte stillede spørgsmål',
    'en_your_account' => 'Your account',
    'dk_your_account' => 'Din konto',
    'en_sign_out' => 'Sign out',
    'dk_sign_out' => 'Log ud',

    'en_flights_main_title' => 'Welcome! Find a flexible flight for your next trip.',
    'dk_flights_main_title' => 'Velkommen! Find en fleksibel flybillet til din næste rejse.',
    'en_search' => 'search',
    'dk_search' => 'søg',
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

    //SIGN IN
    'en_sign_in_main_title' => 'Sign in or create an account',
    'dk_sign_in_main_title' => 'Log ind, eller opret en konto',

];
