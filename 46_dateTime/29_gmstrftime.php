<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:30
 */

//gmstrftime() 函数根据区域设置格式化 GMT/UTC 日期和时间。
echo(gmstrftime("%B %d %Y, %X %Z", mktime(20, 0, 0, 12, 31, 98)) . "<br>");
setlocale(LC_ALL, "hu_HU.UTF8");
echo(gmstrftime("%Y. %B %d. %A. %X %Z"));

?>