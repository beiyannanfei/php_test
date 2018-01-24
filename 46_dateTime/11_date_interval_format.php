<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/24
 * Time: 下午6:30
 */

$date1 = date_create("2013-01-01");
$date2 = date_create("2013-02-10");
//date_interval_format() 函数是 DateInterval::format() 的别名。
//DateInterval::format() 函数用于格式化时间间隔。
$diff = date_diff($date1, $date2);

// %a 输出两个日期间隔的总天数
echo $diff->format("日期间隔的总天数为： %a 天。") . "<br>"; //日期间隔的总天数为： 40 天。
?>