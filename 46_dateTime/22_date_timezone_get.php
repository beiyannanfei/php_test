<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 上午11:52
 */

$date = date_create(null, timezone_open("Europe/Paris"));
//date_timezone_get() 函数返回给定 DateTime 对象的时区。
$tz = date_timezone_get($date);
echo timezone_name_get($tz);    //Europe/Paris

?>