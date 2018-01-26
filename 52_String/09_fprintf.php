<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 上午11:45
 */

//fprintf() 函数把格式化的字符串写入到指定的输出流（例如：文件或数据库）。
//arg1、arg2、++ 参数将被插入到主字符串中的百分号（%）符号处。该函数是逐步执行的。在第一个 % 符号处，插入 arg1，在第二个 % 符号处，插入 arg2，依此类推。
//注释：如果 % 符号多于 arg 参数，则您必须使用占位符。占位符被插入到 % 符号之后，由数字和 "\$" 组成。请参见实例 2。
//提示：相关函数：printf()、 sprintf()、 vprintf()、 vsprintf() 和 vfprintf()

$number = 9;
$str = "Beijing";
$file = fopen("./08_test.txt", "w");
echo fprintf($file, "There are %u million bicycles in %s.", $number, $str);


?>