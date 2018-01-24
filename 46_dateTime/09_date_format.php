<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/24
 * Time: 下午6:16
 */

$date = date_create("2013-03-15");
//date_format() 函数返回一个根据指定格式进行格式化的日期。
echo date_format($date, "Y/m/d H:i:s"); //2013/03/15 00:00:00

?>