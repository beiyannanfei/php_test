<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 上午10:34
 */

echo date('h:i:s') . "<br>";

//sleep for 5 seconds
usleep(5000000);    //usleep() 函数延迟执行当前脚本若干微秒（一微秒等于一百万分之一秒）。

//start again
echo date('h:i:s');

?>