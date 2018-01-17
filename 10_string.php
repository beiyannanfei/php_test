<?php
/**
 * Created by PhpStorm.
 * User: wyq
 * Date: 18/1/17
 * Time: 下午5:29
 */
$txt1 = "Hello world!";
$txt2 = "What a nice day!";
echo $txt1 . " - " . $txt2;       //.运算符用于字符串拼接
echo "<hr>";
echo "strlen = " . strlen($txt1);
echo "<hr>";

//strpos() 函数用于在字符串内查找一个字符或一段指定的文本。
//如果在字符串中找到匹配，该函数会返回第一个匹配的字符位置。如果未找到匹配，则返回 FALSE。
echo "index of 'w' is: " . strpos("hello world", 'w');
echo "<hr>";
echo "index of 'a' is: " . strpos("hello world", 'a');


