<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/24
 * Time: 下午5:47
 */

$date = date_create("2013-03-15");
//date_add() 函数添加日、月、年、时、分和秒到一个日期。
date_add($date, date_interval_create_from_date_string("40 days"));
echo date_format($date, "Y-m-d");   //2013-04-24

?>