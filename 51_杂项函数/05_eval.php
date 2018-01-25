<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/25
 * Time: 下午5:52
 */

//eval() 函数把字符串按照 PHP 代码来计算。
//该字符串必须是合法的 PHP 代码，且必须以分号结尾。
//注释：return 语句会立即终止对字符串的计算。
//提示：该函数对于在数据库文本字段中供日后计算而进行的代码存储很有用。

$string = "beautiful";
$time = "winter";

$str = 'This is a $string $time morning!';
echo $str . "<br>";

eval("$str = $str;");   //error
echo $str;
?>