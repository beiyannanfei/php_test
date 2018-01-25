<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 上午11:48
 */

$date = date_create("2013-05-01");
date_time_set($date, 13, 24);
echo date_format($date, "Y-m-d H:i:s"); //2013-05-01 13:24:00

?>