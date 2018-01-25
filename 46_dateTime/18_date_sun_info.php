<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 上午11:44
 */

$sun_info = date_sun_info(strtotime("2013-01-01"), 31.7667, 35.2333);
foreach ($sun_info as $key => $val) {
    echo "$key: " . date("H:i:s", $val) . "<br>";
}

/*
sunrise: 05:39:08
sunset: 15:46:40
transit: 10:42:54
civil_twilight_begin: 05:12:25
civil_twilight_end: 16:13:23
nautical_twilight_begin: 04:42:05
nautical_twilight_end: 16:43:43
astronomical_twilight_begin: 04:12:24
astronomical_twilight_end: 17:13:24
*/
?>