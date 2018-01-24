<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/24
 * Time: 下午2:52
 */

$d = unixtojd(mktime(0, 0, 0, 6, 20, 2007));
echo "<pre>";
//cal_from_jd() 函数把儒略日计数转换为指定历法的日期。
print_r(cal_from_jd($d, CAL_GREGORIAN));
echo "</pre>";

/*
Array
(
    [date] => 6/20/2007
    [month] => 6
    [day] => 20
    [year] => 2007
    [dow] => 3
    [abbrevdayname] => Wed
    [dayname] => Wednesday
    [abbrevmonth] => Jun
    [monthname] => June
)
*/
?>