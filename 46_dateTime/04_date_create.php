<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/24
 * Time: 下午5:52
 */

//date_create() 函数返回一个新的 DateTime 对象。
$date = date_create("2013-03-15");
echo date_format($date, "Y/m/d") . "<br>";   //2013/03/15

$date = date_create("2013-03-15 23:40:00", timezone_open("Asia/Shanghai"));
echo date_format($date, "Y/m/d H:iP");  //2013/03/15 23:40+08:00
?>