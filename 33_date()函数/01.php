<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/22
 * Time: 上午11:31
 * PHP date() 函数可把时间戳格式化为可读性更好的日期和时间。
 */

/*
PHP Date() - 格式化日期
date() 函数的第一个必需参数 format 规定了如何格式化日期/时间。
这里列出了一些可用的字符：
d - 代表月中的天 (01 - 31)
m - 代表月 (01 - 12)
Y - 代表年 (四位数)
如需了解 format 参数中可用的所有字符列表，请查阅我们的 PHP Date 参考手册，date() 函数。
可以在字母之间插入其他字符，比如 "/"、"." 或者 "-"，这样就可以增加附加格式了：
*/

echo date("Y/m/d") . "<br>";        //out   2018/01/22
echo date("Y.m.d") . "<br>";        //out   2018.01.22
echo date("Y-m-d") . "<br>";        //out   2018-01-22
//http://www.runoob.com/php/php-date.html
?>