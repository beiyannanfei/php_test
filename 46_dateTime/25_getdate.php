<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午12:04
 */
//getdate() 函数返回某个时间戳或者当前本地的日期/时间的日期/时间信息。
echo "<pre>";
print_r(getdate());
/*
Array
(
    [seconds] => 34
    [minutes] => 6
    [hours] => 5
    [mday] => 25
    [wday] => 4
    [mon] => 1
    [year] => 2018
    [yday] => 24
    [weekday] => Thursday
    [month] => January
    [0] => 1516853194
)
*/
date_default_timezone_set("Asia/Shanghai");
print_r(getdate());
/*
Array
(
    [seconds] => 34
    [minutes] => 6
    [hours] => 12
    [mday] => 25
    [wday] => 4
    [mon] => 1
    [year] => 2018
    [yday] => 24
    [weekday] => Thursday
    [month] => January
    [0] => 1516853194
)
*/
?>