<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午12:09
 */
//gmdate() 函数格式化 GMT/UTC 日期和时间，并返回格式化的日期字符串。
echo gmdate("Y-m-d H:i:s") . "<br>"; //2018-01-25 04:10:04
date_default_timezone_set("Asia/Shanghai");
echo gmdate("Y-m-d H:i:s"); //2018-01-25 04:10:52
?>