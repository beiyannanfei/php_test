<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 上午11:51
 */

$date = date_create();
//date_timestamp_set() 函数设置基于 Unix 时间戳的日期和时间。
date_timestamp_set($date, 1371803321);
echo date_format($date, "U = Y-m-d H:i:s"); //1371803321 = 2013-06-21 10:28:41

?>