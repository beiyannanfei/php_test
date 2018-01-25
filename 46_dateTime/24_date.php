<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 上午11:58
 */
//date() 函数格式化本地日期和时间，并返回格式化的日期字符串。
// Prints the day
echo date("l") . "<br>";    //Thursday

// Prints the day, date, month, year, time, AM or PM
echo date("l jS of F Y h:i:s A") . "<br>";   //Thursday 25th 2018f January 2018 04:59:00 AM

echo date("Y-m-d H:i:s") . "<br>";  //2018-01-25 05:03:36
date_default_timezone_set("Asia/Shanghai");
echo date("Y-m-d H:i:s");   //2018-01-25 12:03:36
?>