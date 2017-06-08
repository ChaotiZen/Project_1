<?php
/**
 * File name: countries_db.php
 * Project : Project_1
 * User: ChaotiZen | Trendon Ellis
 * Date: 6/8/2017
 * Using PhpStorm.
 * Notes:
 */

function get_countries() {
    global $db;
    $query = "SELECT * FROM countries";
    $countries = $db->query($query);
    return $countries;
}

