<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午3:12
 */

//printf() 函数输出格式化的字符串。
//arg1、arg2、++ 参数将被插入到主字符串中的百分号（%）符号处。该函数是逐步执行的。在第一个 % 符号处，插入 arg1，在第二个 % 符号处，插入 arg2，依此类推。
//注释：如果 % 符号多于 arg 参数，则您必须使用占位符。占位符被插入到 % 符号之后，由数字和 "\$" 组成。请参见实例 2。
//提示：相关函数：sprintf()、 vprintf()、 vsprintf()、 fprintf() 和 vfprintf()

$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.<br>", $number, $str);  //There are 9 million bicycles in Beijing.

$number = 123;
printf("%f<hr>", $number);  //123.000000

$str1 = "Hello";
$str2 = "Hello world!";

printf("[%s]<br>", $str1);
printf("[%8s]<br>", $str1);
printf("[%-8s]<br>", $str1);
printf("[%08s]<br>", $str1);
printf("[%'*8s]<br>", $str1);
printf("[%8.8s]<br>", $str2);
?>