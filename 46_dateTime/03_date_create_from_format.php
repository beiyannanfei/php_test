<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/24
 * Time: 下午5:49
 */

//date_create_from_format() 函数返回一个根据指定格式进行格式化的新的 DateTime 对象。
$date = date_create_from_format("j-M-Y", "15-Mar-2013");
echo "<pre>";
print_r($date);
echo "</pre>";
/*
 DateTime Object
(
    [date] => 2013-03-15 10:51:00.000000
    [timezone_type] => 3
    [timezone] => Europe/Zurich
)
*/
?>