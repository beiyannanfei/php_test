<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/24
 * Time: 下午6:00
 */

$date = date_create();
//date_date_set() 函数设置一个新的日期。
date_date_set($date, 2020, 10, 30);
echo date_format($date, "Y/m/d");   //2020/10/30

?>