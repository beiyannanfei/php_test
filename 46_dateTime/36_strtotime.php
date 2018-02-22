<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午2:38
 */

//strtotime() 函数将任何英文文本的日期或时间描述解析为 Unix 时间戳（自 January 1 1970 00:00:00 GMT 起的秒数
echo(strtotime("now") . "<br>");
echo(strtotime("3 October 2005") . "<br>");
echo(strtotime("+5 hours") . "<br>");
echo(strtotime("+1 week") . "<br>");
echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
echo(strtotime("next Monday") . "<br>");
echo(strtotime("last Sunday") . "<br>");
//date_default_timezone_set("Asia/Shanghai");
echo(strtotime("2018-02-22 16:47:18"))  //1519289238(设置时区)  1519314438(未设置)

?>