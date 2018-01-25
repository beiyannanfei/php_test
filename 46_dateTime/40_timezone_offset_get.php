<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:41
 */

//timezone_offset_get() 返回相对于 GMT 的时区偏移。
$tz = timezone_open("Asia/Taipei");
$dateTimeOslo = date_create("now", timezone_open("Europe/Oslo"));
echo timezone_offset_get($tz, $dateTimeOslo);
?>