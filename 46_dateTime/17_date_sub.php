<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 上午11:42
 */

$date = date_create("2013-03-15");
date_sub($date, date_interval_create_from_date_string("10 days"));
echo date_format($date, "Y-m-d");   //2013-03-05

?>