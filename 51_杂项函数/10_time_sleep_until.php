<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 上午10:28
 */
echo date('h:i:s') . "<br>";

time_sleep_until(time() + 10);  //time_sleep_until() 函数延迟执行当前脚本直到指定的时间。

echo date('h:i:s') . "<br>";
?>