<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 上午11:22
 */

$date = date_create();
//echo date_format($date, "Y-m-d");
//date_isodate_set() 函数根据 ISO 8601 标准设置日期，使用周和天的偏移量（而不是使用一个规定的日期）
date_isodate_set($date, 2018, 4);
echo date_format($date, "Y-m-d");

?>