<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 上午11:53
 */

//date_timezone_set() 函数 DateTime 对象的时区。
$date = date_create("2013-05-25", timezone_open("Indian/Kerguelen"));
echo date_format($date, "Y-m-d H:i:sP");    //2013-05-25 00:00:00+05:00

?>