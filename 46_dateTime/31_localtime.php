<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:32
 */
//localtime() 函数返回本地时间。
echo "<pre>";
print_r(localtime());
/*
Array
(
    [0] => 30
    [1] => 32
    [2] => 7
    [3] => 25
    [4] => 0
    [5] => 118
    [6] => 4
    [7] => 24
    [8] => 0
)
*/
echo "<br><br>";
print_r(localtime(time(), true));
/*
Array
(
    [tm_sec] => 30
    [tm_min] => 32
    [tm_hour] => 7
    [tm_mday] => 25
    [tm_mon] => 0
    [tm_year] => 118
    [tm_wday] => 4
    [tm_yday] => 24
    [tm_isdst] => 0
)
*/
?>