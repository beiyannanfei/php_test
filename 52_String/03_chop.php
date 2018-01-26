<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 上午11:01
 */

//chop() 函数移除字符串右侧的空白字符或其他预定义字符。
$str = "Hello World!\n\n";
echo $str;
echo chop($str);

echo "<hr>";
$str = "Hello World!";
echo $str . "<br>";
echo chop($str, "World!");
?>