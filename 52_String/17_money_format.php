<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/26
 * Time: 下午2:42
 */

//money_format() 函数返回格式化为货币字符串的字符串。
//该函数在主字符串的百分号（%）位置插入一个格式化的数字。
//注释：money_format() 函数无法在 Windows 平台上工作。
//提示：该函数经常与 setlocale() 函数一起使用。
//提示：如需查看所有可用的语言代码，请访问我们的语言代码参考手册。

$number = 1234.56;
setlocale(LC_MONETARY, "en_US");
echo money_format("The price is %i", $number);  //The price is USD1,234.56

?>