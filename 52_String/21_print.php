<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午3:09
 */

//print() 函数输出一个或多个字符串。
//注释：print() 函数实际不是一个函数，所以您不必对它使用括号。
//提示：print() 函数比 echo() 速度稍慢。

$str = "Hello world!";
print $str . "<br>";    //Hello world!

print "This text
spans multiple
lines." . "<br>";   //This text spans multiple lines.

//单引号和双引号的区别。单引号将输出变量名称，而不是值
$color = "red";
print "Roses are $color";   //Roses are red
print "<br>";
print 'Roses are $color';   //Roses are $color
?>