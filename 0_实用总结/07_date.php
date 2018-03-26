<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 2018/3/26
 * Time: 下午7:04
 */
/**
 * 时间名词：
 * 年year 复数years
 * 月month 复数months
 * 周week 复数weeks
 * 日day 复数days
 * 时hour 复数hours
 * 分second 复数seconds
 * 秒minute 复数minutes
 * 上一个last
 * 下一个next
 * 一月January
 * 二月February
 * 三月March
 * 四月April
 * 五月May
 * 六月June
 * 七月July
 * 八月August
 * 九月September
 * 十月October
 * 十一月November
 * 十二月December
 */
date_default_timezone_set("Asia/Shanghai");
$now = date('Y-m-d H:i:s');
echo 'now is: ' . $now . '<hr>';     //当前时间

$add1Year = date('Y-m-d H:i:s', strtotime('+1 years'));
echo 'add 1 year is: ' . $add1Year . '<br>'; //加一年
$add2Year = date('Y-m-d H:i:s', strtotime('+2 years'));
echo 'add 2 year is: ' . $add2Year . '<hr>'; //加2年

$sub2Month = date('Y-m-d H:i:s', strtotime('-2 months'));
echo 'sub 2 month is: ' . $sub2Month . '<br>'; //减两个月
$add1Month = date('Y-m-d H:i:s', strtotime('+1 months'));
echo 'add 1 month is: ' . $add1Month . '<hr>'; //add 1 month

$add1Day = date('Y-m-d H:i:s', strtotime('+1 days'));
echo 'add 1 day is: ' . $add1Day . '<br>'; //add 1 day
$sub2Day = date('Y-m-d H:i:s', strtotime('-2 days'));
echo 'sub 2 day is: ' . $sub2Day . '<hr>';  //sub 2 days

$add1Hour = date('Y-m-d H:i:s', strtotime('+1 hours'));
echo 'add 1 hour is: ' . $add1Hour . '<br>';
$sub2Hour = date('Y-m-d H:i:s', strtotime('-2 hours'));
echo 'sub 2 hour is: ' . $sub2Hour . '<hr>';

$add1Minute = date('Y-m-d H:i:s', strtotime('+1 minutes'));
echo 'add 1 minute is: ' . $add1Minute . '<br>';
$sub2Minute = date('Y-m-d H:i:s', strtotime('-2 minutes'));
echo 'sub 2 minute is: ' . $sub2Minute . '<hr>';

$add1Second = date('Y-m-d H:i:s', strtotime('+1 seconds'));
echo 'add 1 second is: ' . $add1Second . '<br>';
$sub2Second = date('Y-m-d H:i:s', strtotime('-2 seconds'));
echo 'sub 2 second is: ' . $sub2Second . '<hr>';

$mixDate = date('Y-m-d H:i:s', strtotime('+1 years -2 months +3 days -4 hours +5 minutes -6 seconds'));
echo 'mix Date is: ' . $mixDate . '<hr>';

$timeStamp = strtotime('now');
echo 'now time stamp is: ' . $timeStamp . '<br>';
$someStamp1 = strtotime('2018-03-01 00:00:00');
echo '2018-03-01 time stamp is: ' . $someStamp1 . '<hr>';

echo '获取今天开始和结束的时间戳<br>';
echo '当前时间: ' . date("Y-m-d H:i:s", time()) . '<br>';
$today = strtotime(date("Y-m-d"), time());//获得当日凌晨的时间戳
echo '今天开始时间戳: ' . $today . '<br>';
echo '验证一下：' . date("Y-m-d H:i:s", $today) . '<br>';

$end = $today + 60 * 60 * 24 - 1; ////当天的24点时间戳
echo '今天结束时间戳: ' . $end . '<br>';
echo '验证一下：' . date("Y-m-d H:i:s", $end) . '<br>';
echo '获得指定时间的零点的时间戳<br>';
$time = strtotime('2014-06-06');
echo '2014-06-06 的零点时间戳: ' . $time . '<br>';
echo '验证一下：' . date("Y-m-d H:i:s", $time) . '<hr>';

echo '获取本月开始时间戳<br>';
echo '当前时间: ' . date("Y-m-d H:i:s", time()) . '<br>';
$month = strtotime(date("Y-m"), time());//获得当月凌晨的时间戳
echo '今天开始时间戳: ' . $month . '<br>';
echo '验证一下：' . date("Y-m-d H:i:s", $month) . '<hr>';


$beginToday = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
$endToday = mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')) - 1;
echo '获取今天开始时间戳的另一个方法: ' . $beginToday . ' endToday: ' . $endToday . '<hr>';

$beginThismonth = mktime(0, 0, 0, date('m'), 1, date('Y'));
$endThismonth = mktime(23, 59, 59, date('m'), date('t'), date('Y'));
echo '获取本月的开始和结束时间戳: ' . $beginThismonth . ' endmonth: ' . $endThismonth . '<hr>';
?>