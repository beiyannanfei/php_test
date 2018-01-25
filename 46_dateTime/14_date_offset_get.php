<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 上午11:30
 */

$winter = date_create("2013-12-31", timezone_open("Europe/Oslo"));
$summer = date_create("2013-06-30", timezone_open("Europe/Oslo"));

echo date_offset_get($winter) . " seconds.<br>";
echo date_offset_get($summer) . " seconds.";


?>