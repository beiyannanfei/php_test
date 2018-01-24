<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/24
 * Time: 下午2:50
 */

//cal_days_in_month() 函数针对指定的年份和历法，返回一个月中的天数。
$d = cal_days_in_month(CAL_GREGORIAN, 10, 2005);
echo "There was $d days in October 2005";   //There was 31 days in October 2005

?>