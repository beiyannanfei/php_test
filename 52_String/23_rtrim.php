<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午3:18
 */

//rtrim() 函数移除字符串右侧的空白字符或其他预定义字符。
//相关函数：
//ltrim() - 移除字符串左侧的空白字符或其他预定义字符。
//trim() - 移除字符串右侧的空白字符或其他预定义字符。

$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str, "World!") . "<hr>";

$str = "Hello World! ";
echo "Without rtrim: " . $str;
echo "<br>";
echo "With rtrim: " . rtrim($str);
?>